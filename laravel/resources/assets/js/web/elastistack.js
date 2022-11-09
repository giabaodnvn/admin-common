;(function(window){'use strict';function extend(a,b){for(var key in b){if(b.hasOwnProperty(key)){a[key]=b[key];}}
return a;}
var is3d=!!getStyleProperty('perspective'),support={transitions:Modernizr.csstransitions},transEndEventNames={'WebkitTransition':'webkitTransitionEnd','MozTransition':'transitionend','OTransition':'oTransitionEnd','msTransition':'MSTransitionEnd','transition':'transitionend'},transEndEventName=transEndEventNames[Modernizr.prefixed('transition')],onEndTransition=function(el,callback){var onEndCallbackFn=function(ev){if(support.transitions){if(ev.target!=this)return;this.removeEventListener(transEndEventName,onEndCallbackFn);}
if(callback&&typeof callback==='function'){callback.call(this);}};if(support.transitions){el.addEventListener(transEndEventName,onEndCallbackFn);}
else{onEndCallbackFn();}};function ElastiStack(el,options){this.container=el;this.options=extend({},this.options);extend(this.options,options);this._init();}
function setTransformStyle(el,tval){el.style.WebkitTransform=tval;el.style.msTransform=tval;el.style.transform=tval;}
ElastiStack.prototype.options={distDragBack:200,distDragMax:450,onUpdateStack:function(current){return false;}};ElastiStack.prototype._init=function(){this.items=[].slice.call(this.container.children);this.itemsCount=this.items.length;this.current=0;this._setStackStyle();if(this.itemsCount<=1)return;this._initDragg();this._initEvents();};ElastiStack.prototype._initEvents=function(){var self=this;this.draggie.on('dragStart',function(i,e,p){self._onDragStart(i,e,p);});this.draggie.on('dragMove',function(i,e,p){self._onDragMove(i,e,p);});this.draggie.on('dragEnd',function(i,e,p){self._onDragEnd(i,e,p);});};ElastiStack.prototype._setStackStyle=function(){var item1=this._firstItem(),item2=this._secondItem(),item3=this._thirdItem();if(item1){item1.style.opacity=1;item1.style.zIndex=4;setTransformStyle(item1,is3d?'translate3d(0,0,0)':'translate(0,0)');}
if(item2){item2.style.opacity=1;item2.style.zIndex=3;setTransformStyle(item2,is3d?'translate3d(0,-18px, -75px)':'translate(0,0)');}
if(item3){item3.style.opacity=1;item3.style.zIndex=2;setTransformStyle(item3,is3d?'translate3d(0,-35px, -170px)':'translate(0,0)');}};ElastiStack.prototype._reset=function(){this.current=this.current<this.itemsCount-1?this.current+1:0;var item1=this._firstItem(),item2=this._secondItem(),item3=this._thirdItem();classie.remove(item1,'move-back');if(item2)classie.remove(item2,'move-back');if(item3)classie.remove(item3,'move-back');var self=this;setTimeout(function(){classie.add(self._lastItem(),'animate');self._setStackStyle();},25);this._initDragg();this._initEvents();this.options.onUpdateStack(this.current);};ElastiStack.prototype._moveAway=function(instance){var el=instance.element;this._disableDragg();classie.add(el,'animate');var tVal=this._getTranslateVal(instance);setTransformStyle(el,is3d?'translate3d('+tVal.x+'px,'+tVal.y+'px, 0px)':'translate('+tVal.x+'px,'+tVal.y+'px)');el.style.opacity=0;var item2=this._secondItem(),item3=this._thirdItem();if(item2){classie.add(item2,'move-back');classie.add(item2,'animate');setTransformStyle(item2,is3d?'translate3d(0,-18px, -75px)':'translate(0,0)');}
if(item3){classie.add(item3,'move-back');classie.add(item3,'animate');setTransformStyle(item3,is3d?'translate3d(0,-35px, -170px)':'translate(0,0)');}
var self=this;onEndTransition(el,function(){setTransformStyle(el,is3d?'translate3d(0,0,-180px)':'translate(0,0,0)');el.style.left=el.style.top='0px';el.style.zIndex=-1;classie.remove(el,'animate');self._reset();});};ElastiStack.prototype._moveBack=function(instance){var item2=this._secondItem(),item3=this._thirdItem();classie.add(instance.element,'move-back');classie.add(instance.element,'animate');setTransformStyle(instance.element,is3d?'translate3d(0,0,0)':'translate(0,0)');instance.element.style.left='0px';instance.element.style.top='0px';if(item2){classie.add(item2,'move-back');classie.add(item2,'animate');setTransformStyle(item2,is3d?'translate3d(0,-18px, -75px)':'translate(0,0)');}
if(item3){classie.add(item3,'move-back');classie.add(item3,'animate');setTransformStyle(item3,is3d?'translate3d(0,-35px, -170px)':'translate(0,0)');}};ElastiStack.prototype._onDragStart=function(instance,event,pointer){var item2=this._secondItem(),item3=this._thirdItem();classie.remove(instance.element,'move-back');classie.remove(instance.element,'animate');if(item2){classie.remove(item2,'move-back');classie.remove(item2,'animate');}
if(item3){classie.remove(item3,'move-back');classie.remove(item3,'animate');}};ElastiStack.prototype._onDragMove=function(instance,event,pointer){if(this._outOfBounds(instance)){this._moveAway(instance);}
else{var item2=this._secondItem(),item3=this._thirdItem();if(item2){setTransformStyle(item2,is3d?'translate3d('+(instance.position.x*.6)+'px,'+(instance.position.y*.6)+'px, -100px)':'translate('+(instance.position.x*.6)+'px,'+(instance.position.y*.6)+'px)');}
if(item3){setTransformStyle(item3,is3d?'translate3d('+(instance.position.x*.3)+'px,'+(instance.position.y*.3)+'px, -200px)':'translate('+(instance.position.x*.3)+'px,'+(instance.position.y*.3)+'px)');}}};ElastiStack.prototype._onDragEnd=function(instance,event,pointer){if(this._outOfBounds(instance))return;if(this._outOfSight(instance)){this._moveAway(instance);}
else{this._moveBack(instance);}};ElastiStack.prototype._initDragg=function(){this.draggie=new Draggabilly(this.items[this.current]);};ElastiStack.prototype._disableDragg=function(){this.draggie.disable();};ElastiStack.prototype.nextItem=function(val){if(this.isAnimating){return false;}
this.isAnimating=true;var item1=this._firstItem(),item2=this._secondItem(),item3=this._thirdItem();classie.add(item1,'animate');if(item2){classie.add(item2,'animate');}
if(item3){classie.add(item3,'animate');}
setTransformStyle(item1,is3d?val.transform:'translate(0,0)');item1.style.opacity=0;item1.style.zIndex=5;var self=this;onEndTransition(item1,function(){classie.remove(item1,'animate');item1.style.zIndex=-1;setTimeout(function(){setTransformStyle(item1,is3d?'translate3d(0,0,-180px)':'translate(0,0,0)');self.isAnimating=false;},25);});this._disableDragg();this._reset();};ElastiStack.prototype._outOfBounds=function(el){return Math.abs(el.position.x)>this.options.distDragMax||Math.abs(el.position.y)>this.options.distDragMax;};ElastiStack.prototype._outOfSight=function(el){return Math.abs(el.position.x)>this.options.distDragBack||Math.abs(el.position.y)>this.options.distDragBack;};ElastiStack.prototype._getTranslateVal=function(el){var h=Math.sqrt(Math.pow(el.position.x,2)+Math.pow(el.position.y,2)),a=Math.asin(Math.abs(el.position.y)/h)/(Math.PI/180),hL=h+this.options.distDragBack,dx=Math.cos(a*(Math.PI/180))*hL,dy=Math.sin(a*(Math.PI/180))*hL,tx=dx-Math.abs(el.position.x),ty=dy-Math.abs(el.position.y);return{x:el.position.x>0?tx:tx*-1,y:el.position.y>0?ty:ty*-1}};ElastiStack.prototype._firstItem=function(){return this.items[this.current];};ElastiStack.prototype._secondItem=function(){if(this.itemsCount>=2){return this.current+1<this.itemsCount?this.items[this.current+1]:this.items[Math.abs(this.itemsCount-(this.current+1))];}};ElastiStack.prototype._thirdItem=function(){if(this.itemsCount>=3){return this.current+2<this.itemsCount?this.items[this.current+2]:this.items[Math.abs(this.itemsCount-(this.current+2))];}};ElastiStack.prototype._lastItem=function(){if(this.itemsCount>=3){return this._thirdItem();}
else{return this._secondItem();}};window.ElastiStack=ElastiStack;})(window);