/*
	Script: Thumbnoo.js v0.2.6
		Big graphics do fit small spaces!
	
	Author:
		Dalibor Karlovic <dado@krizevci.info>
	
	License:
		GPLv2 or later
	
	Note:
		Thumbnoo requires an XHTML doctype.
	
	Always fresh:
		http://87.230.15.86/~dado/devel/mootools/thumbnoo/

	TODO:
		- preload next in slideshow&&thumb mode
*/
var Thumbnoo = new Class({
	Implements: [Options, Events],

	options: {/*
		onInitEnd: $empty,
		onPopupStart: $empty,
		onPopupEnd: $empty,
		onPopdownStart: $empty,
		onCaptionShow: $empty,
		onCaptionHide: $empty,
		onPopdownEnd: $empty,
		onPrevious: $empty,
		onNext: $empty,
		onQueueEnd: $empty,
		onShowStart: $empty,
		onShowStop: $empty,*/
		caption: true,
		captionSide: 'bottom',
		center: false,
		indicate: true,
		className: 'thumbnoo',
		gallery: false,
		imagePrefix: '',
		thumbPrefix: 'thumb_',
		maxHeight: 0,
		maxWidth: 0,
		percent: 100,
		shrink: false,
		toPopup: 'click',
		toPopdown: 'click',
		transFx: 'back:out',
		transDuration: 'normal'
	},
	initialize: function(elements, options){
		this.elements = elements;
		this.current = null;
		this.imgs = new Hash();
		this.setOptions(options);
		window.addEvent('load', this.afterInitialize.bind(this));
		this.elements.each (function(n, i) {
			this.imgs[i] = {popup: false};
			if (!this.options.indicate) n.addEvent(this.options.toPopup || 'click', this.popup.bind(this, i));
			if (this.options.caption) this.imgs[i].caption = n.title || n.alt || null;
			if (this.options.shrink){
				if (n.width > 0) this.shrinkImage(n, i);
				else n.addEvent('load', this.shrinkImage.bind(this, [n, i]));
			} else this.imgs[i].image = n;
		}, this);
	},
	afterInitialize: function(){
		this.elements.each (function(n, i) {
			var p = n.getPosition();
			this.imgs[i].y = p.y, this.imgs[i].x = p.x;
			this.imgs[i].style = {
				zIndex: 99,
				margin: '0px',
				position: 'absolute',
				'float': 'none',
				top: p.y,
				left: p.x,
				width: n.width,
				height: n.height
			};
			if (this.options.indicate){
				this.imgs[i].indicate = document.createElement('div');
				$(this.imgs[i].indicate).setStyles(this.imgs[i].style).addClass('thumbnooindicate').addClass(this.options.className).addClass(this.options.className +'indicate').addEvent(this.options.toPopup || 'click', this.popup.bind(this, i));
				$(document.body).adopt(this.imgs[i].indicate);
				n.removeEvent(this.options.toPopup || 'click');
			}
		}, this);
		window.addEvent('resize', this.reposition.bind(this));
		this.fireEvent('onInitEnd');
	},
	reposition: function(){
		this.elements.each (function(n, i) {
			var p = n.getPosition(), c = this.getNewCoordinates(n, i), clone = this.imgs[i].clone;
			this.imgs[i].x = p.x, this.imgs[i].y = p.y;
			this.imgs[i].style.top = p.y, this.imgs[i].style.left = p.x;
			['cover', 'loader', 'indicate'].each(function(o){
				if ($defined(this.imgs[i][o])) this.imgs[i][o].setStyles({top: p.y, left: p.x});
			}, this);
		}, this);
	},
	popup: function(i){
		if (!this.imgs[i].popup){
			this.imgs[i].popup = true;
			this.fireEvent('onPopupStart', i);
			this.setCurrent(i);
			var el = this.imgs[i].image, a, u;
			if (this.options.shrink){
				if (!$defined(this.imgs[i].clone)){
					this.imgs[i].clone = el.clone(false)
					if (this.options.caption) this.imgs[i].clone.title = "";
				}
				this.popupMorph(i, el, this.imgs[i].clone);
			} else {
				if (this.options.gallery && $defined(el.parentNode.href)) u = el.parentNode.href;
				else {
					if ($defined(this.options.thumbPrefix) && $defined(this.options.fullsizePrefix)) a = el.src.replace(this.options.thumbPrefix, this.options.fullsizePrefix);
					else a = el.src.replace(this.options.thumbPrefix, "");
					u = a.match( /.*\//) + this.options.imagePrefix + a.replace(/.*\//, "");
				}
				if (!$defined(this.imgs[i].loader)){
					this.imgs[i].loader = document.createElement('div');
					$(this.imgs[i].loader).setStyles(this.imgs[i].style).addClass('thumbnooloader').addClass(this.options.className).addClass(this.options.className +'loader');
				}
				$(document.body).adopt(this.imgs[i].loader);

				if (!$defined(this.imgs[i].clone)){
					this.imgs[i].clone = document.createElement('img');
					this.imgs[i].clone.alt = el.alt;
					$(this.imgs[i].clone).addClass('.' + this.options.className).addEvent('load', this.popupMorph.bind(this, [i, el, this.imgs[i].clone]));
					this.imgs[i].clone.src = u;
				} else this.popupMorph(i, el, this.imgs[i].clone);
			}
		}
		return false;
	},
	popupMorph: function(i, el, clone){
		if (!this.options.shrink){
			this.imgs[i].loader.dispose();
			this.imgs[i] = $merge(this.imgs[i], {
				width: clone.width,
				height: clone.height
			});
		}

		if (!$defined(this.imgs[i].cover)){
			this.imgs[i].cover = document.createElement('div');
			$(this.imgs[i].cover).setStyles(this.imgs[i].style).addClass('thumbnoocover').addClass(this.options.className).addClass(this.options.className +'cover').addEvent(this.options.toPopdown || 'click', this.popdown.bind(this, i));
		}
		$(document.body).adopt(this.imgs[i].cover);

		clone.setStyles($merge(this.imgs[i].style, {zIndex: 100})).addClass('thumbnood').addClass(this.options.className + 'd').addEvent(this.options.toPopdown || 'click', this.popdown.bind(this, i));
		$(document.body).adopt(clone);
		var c = this.getNewCoordinates(el, i), o = {transition: this.options.transFx, duration: this.options.transDuration, onComplete: function(){
			if ($defined(this.imgs[i].caption)){
				this.fireEvent('onCaptionShow', i);
				var b = document.createElement('blockquote'); b.innerHTML = unescape(this.imgs[i].caption);
				this.imgs[i].cel = document.createElement('div'), $(this.imgs[i].cel).setStyles({visibility: 'hidden', position: 'absolute', zIndex: 100, width: this.imgs[i].width}).addClass('thumbnoocaption').addClass(this.options.className).addClass(this.options.className +'caption').adopt(b);
				$(document.body).adopt(this.imgs[i].cel);
				this.imgs[i].cel.setStyles($merge({visibility: 'visible'}, this.getCaptionCoordinates(clone.getCoordinates(), this.imgs[i].cel.getSize())));
			}
			this.fireEvent('onPopupEnd', i);
		}.bind(this, [i, c, clone])}, morph = el.retrieve('fx', new Fx.Morph (clone, o));
		morph.start({top: c.y, left: c.x, width: this.imgs[i].width, height: this.imgs[i].height});
	},
	popdown: function(i){
		if (this.imgs[i].popup){
			this.fireEvent('onPopdownStart', i);
			var el = this.imgs[i].clone, o = {transition: this.options.transFx, duration: this.options.transDuration, onStart: function(){
				if ($defined(this.imgs[i].cel)) this.imgs[i].cel.destroy(), this.fireEvent('onCaptionHide', i);
			}.bind(this, i), onComplete: function(){
				if ($defined(this.imgs[i].cover)) this.imgs[i].cover.dispose();
				this.imgs[i].clone.dispose();
				this.imgs[i].popup = false;
				this.fireEvent('onPopdownEnd', i);
			}.bind(this, i)}, morph = el.retrieve('fx', new Fx.Morph (el, o));
			morph.start({top: this.imgs[i].y, left: this.imgs[i].x, width: this.imgs[i].image.width, height: this.imgs[i].image.height});
		}
	},
	getNewSize: function(el){
		var h, w, mw = this.options.maxWidth, mh = this.options.maxHeight, p = this.options.percent, pc;
		if (mw == 0 && mh == 0 && p == 100) return {width: el.width, height: el.height};
		if (mw == 0 && mh == 0) w = el.width / 100 * p, h = el.height / 100 * p;
		else if (mw != 0 && mh == 0) pc = el.width / 100 * p, w = (mw > pc) ? pc : mw, h = el.height / el.width * w;
		else if (mw == 0 && mh != 0) pc = el.height / 100 * p, h = (mh > pc) ? pc : mh, w = el.width / el.height * h;
		else if (mw != 0 && mh != 0){
			if ((w = el.width / 100 * p) > mw) w = mw;
			if ((h = el.height / el.width * w) > mh) h = mh, w = el.width / el.height * h;
		}
		return {width: Math.ceil(w), height: Math.ceil(h)};
	},
	getNewCoordinates: function(el, i){
		var coo = {}, pl = {y: 'height', x: 'width'}, w = window.getSize(), s = window.getScroll();
		for (var n in pl){
			var bs = this.imgs[i][pl[n]], sc = this.imgs[i][n] - s[n], ss = this.imgs[i].image[pl[n]];
			if(this.options.center || bs > w[n]) coo[n] = (w[n] - bs) / 2;
			else if((sc >= (bs - ss) / 2) && ((sc + ss + ((bs - ss) / 2)) <= w[n])) coo[n] = sc - (bs - ss) / 2;
			else if((sc >= (bs - ss) / 2) && ((sc + ss + ((bs - ss) / 2)) >= w[n])) coo[n] = sc - (bs - ss);
			else if((sc <= (bs - ss) / 2) && ((sc + ss + ((bs - ss) / 2)) <= w[n])) coo[n] = sc;
			coo[n] = Math.round(coo[n] + s[n]);
		}
		return coo;
	},
	getCaptionCoordinates: function(el, caption){
		var res, top, w = window.getSize(), s = window.getScroll();
		switch (this.options.captionSide){
			case 'above':
				res = el.top - caption.y, top = (res >= s.y ) ? res : s.y;
			break;
			case 'top':
				top = (el.top >= s.y)? el.top : s.y;
			break;
			case 'bellow':
				res = w.y + s.y - caption.y, top = (el.bottom <= res) ? el.bottom : res;
			break;
			case 'bottom':
				top = (el.bottom <= w.y + s.y) ? el.bottom - caption.y : w.y + s.y - caption.y;
			break;
		}
		return {'left': el.left, 'top': top};
	},
	shrinkImage: function(n, i){
		this.imgs[i].width =  n.width, this.imgs[i].height = n.height;
		var s = this.getNewSize(n);
		n.width = s.width, n.height = s.height;
		this.imgs[i].image = n;
	},
	alternate: function(i){
		if (this.imgs[i].popup) this.popdown(i);
		else this.popup(i);
	},
	getCurrent: function(){
		return this.current;
	},
	setCurrent: function(current){
		this.current = current;
	},
	getCount: function(){
		return this.imgs.getLength();
	},
	getPrevious: function(){
		return $defined(this.getCurrent()) ? this.getCurrent() : false;
	},
	getNext: function (){
		var i = this.getCount() - 1 - this.getCurrent();
		return (i > 0) ? i : false;
	},
	previous: function(){
		var i = this.getCurrent();
		if ($defined(i)){
			if (this.imgs[i].popup){
				this.popdown(i);
				if (i == 0) this.setCurrent(null);
			}
			if (this.getPrevious()) this.fireEvent('onPrevious', i - 1), this.alternate(i - 1);
		} else i = this.getCount() - 1, this.fireEvent('onPrevious', i), this.alternate(i);
	},
	next: function(){
		var i = this.getCurrent();
		if ($defined(i)){
			if (i < this.getCount() && this.imgs[i].popup){
				this.popdown(i);
				if (!this.getNext()) this.setCurrent(null);
			}
			if ($defined (this.getCurrent()) && this.getNext()) this.fireEvent('onNext', i+1), this.alternate(i + 1);
			else this.fireEvent('onQueueEnd');
		} else this.fireEvent('onNext', 0), this.alternate(0);
	},
	getShow: function(){
		return $defined(this.slideshow) ? this.slideshow : false;
	},
	setShow: function(show){
		this.slideshow = show;
	},
	startShow: function(t){
		if (!this.getShow()) this.next(), this.setShow(this.next.periodical(t, this), this.fireEvent('onShowStart'));
	},
	endShow: function(){
		if (this.getShow()) $clear(this.getShow()), this.setShow(null), this.fireEvent('onShowStop');
	}
});