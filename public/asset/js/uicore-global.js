!function(r){var n=window.uicoreJsonp;window.uicoreJsonp=function(o,u,c){for(var i,f,l,p=0,a=[];p<o.length;p++)f=o[p],e[f]&&a.push(e[f][0]),e[f]=0;for(i in u)Object.prototype.hasOwnProperty.call(u,i)&&(r[i]=u[i]);for(n&&n(o,u,c);a.length;)a.shift()();if(c)for(p=0;p<c.length;p++)l=t(t.s=c[p]);return l};var o={},e={19:0};function t(n){if(o[n])return o[n].exports;var e=o[n]={i:n,l:!1,exports:{}};return r[n].call(e.exports,e,e.exports,t),e.l=!0,e.exports}t.m=r,t.c=o,t.d=function(r,n,o){t.o(r,n)||Object.defineProperty(r,n,{configurable:!1,enumerable:!0,get:o})},t.n=function(r){var n=r&&r.__esModule?function(){return r.default}:function(){return r};return t.d(n,"a",n),n},t.o=function(r,n){return Object.prototype.hasOwnProperty.call(r,n)},t.p="",t.oe=function(r){throw console.error(r),r}}([]);uicoreJsonp([6],{241:function(e,i,o){"use strict";o(242),o(243),o(244),o(245)},242:function(e,i){},243:function(e,i,o){"use strict";jQuery(document).ready(function(){if(jQuery(".uicore-sticky").length||jQuery(".uicore-will-be-sticky").length){var e=function(){var e=window.matchMedia("(max-width: 1025px)").matches,o=jQuery(window).scrollTop(),n=jQuery(".uicore-top-bar").innerHeight(),r=120;jQuery(".uicore-transparent .ui-header-row1").length?r=19:jQuery(".ui-header-row1").length&&(r=400),null==n&&(n=e?25:r),o>n?setTimeout(function(){jQuery(".uicore-navbar").addClass("uicore-scrolled")},10):jQuery(".uicore-navbar").removeClass("uicore-scrolled"),o>i&&i>0&&o>n-.85*n?jQuery(".ui-smart-sticky").addClass("ui-hide"):jQuery(".ui-smart-sticky").removeClass("ui-hide"),o+jQuery(window).height()>jQuery(document).height()-50&&jQuery(".ui-smart-sticky").removeClass("ui-hide"),i=o},i=0;e();var o=function(e,i){var o;return function(){var n=this,r=arguments;clearTimeout(o),o=setTimeout(function(){o=null,e.apply(n,r)},i)}}(e,500);jQuery(window).on("scroll",e),jQuery(document.body).on("touchmove",o)}}),-1!=navigator.appVersion.indexOf("Win")&&jQuery("body").addClass("win"),jQuery(function(e){e(".uicore-search-btn").click(function(){e("body").addClass("uicore-search-active"),e(".uicore-search .search-field").focus()}),e(".uicore-search .uicore-close").click(function(){e("body").removeClass("uicore-search-active")}),e(".uicore-search-btn").click(function(){e("body").addClass("uicore-search-active"),e(".uicore-search .search-field").focus()}),e(document).keydown(function(i){27===i.keyCode&&e("body").removeClass("uicore-search-active")}),e(".uicore-h-classic .menu-item-has-children:not(.menu-item-has-megamenu.custom-width)").on("mouseenter mouseleave",function(i){if(e("ul",this).length){var o=e(".sub-menu",this);o.offset().left+o.width()>e("body").width()&&e(this).addClass("uicore-edge")}});var i=e("#uicore-back-to-top");jQuery(window).scroll(function(){jQuery(window).scrollTop()>300?i.addClass("uicore-visible"):i.removeClass("uicore-visible")}),i.on("click",function(e){e.preventDefault(),jQuery("html").animate({scrollTop:0},"300"),jQuery("body").animate({scrollTop:0},"300")})}),jQuery(function(e){e(document).ready(function(){if(jQuery(".uicore-progress-bar").length){var i,o,n=function(){var e=document.body.scrollHeight-window.innerHeight,i=jQuery(".uicore-post-content article");return i.length&&(e=i.height()+i.offset().top-window.innerHeight),e},r=jQuery(".uicore-progress-bar"),u=n(),c=function(){return i=jQuery(window).scrollTop(),(o=i/u*100)>100&&(o=100),o+="%"},t=function(){r.css({width:c()})};jQuery(window).scroll(t),e(window).on("resize",function(){u=n(),t()})}})}),jQuery(function(e){e(document).ready(function(){var i=e(".menu-item-has-megamenu.custom-width");i.on("mouseenter mouseleave",function(i){o(e(this))});var o=function(i){var o=window.matchMedia("(max-width: 1025px)").matches,n=i.find("ul.uicore-megamenu");if(n.css({left:"auto"}),!o){n.css({left:0});var r=n.outerWidth(),u=n.offset(),c=e(window).width();if(!r||!u)return;if(u.left+r>=c){var t=u.left+r-c;n.css({left:-t-0})}}};i.each(function(){o(e(this)),e(this).addClass("with-offsets")})})})},244:function(e,i,o){"use strict";jQuery(function(e){e(document).ready(function(){var i=window.matchMedia("(max-width: "+window.uicore_frontend.mobile_br+"px)").matches;function o(){e(".uicore-mobile-menu-wrapper .menu-item-has-children > a").unbind("click",r),e(".uicore-mobile-menu-wrapper .uicore-menu-container .sub-menu .back > a").unbind("click",u),e(".uicore-mobile-menu-wrapper .menu-item-has-children > a:not(.ui-custom-tap)").unbind("click",n),e(".uicore-mobile-menu-wrapper li:not(.menu-item-has-children):not(.back) > a").unbind("click",d),e(".uicore-mobile-menu-wrapper .uicore-extra a").unbind("click",d),e(".uicore-mobile-menu-wrapper.uicore-ham-classic .menu-item-has-children").unbind("mouseenter",c),e(".uicore-mobile-menu-wrapper.uicore-ham-classic .menu-item-has-children").unbind("mouseleave",t),e(".uicore-mobile-menu-wrapper.uicore-ham-center .menu-item-has-children a, .uicore-mobile-menu-wrapper.uicore-ham-creative .menu-item-has-children a").unbind("click",a),e(".uicore-menu-focus .uicore-menu li").unbind("mouseenter",l),e(".uicore-menu-focus .uicore-menu li").unbind("mouseleave",m),i?document.body.classList.contains("ui-a-dsmm-slide")?(!function(){if(!window.uicoreBackLinks){for(var i=jQuery(".menu-item-has-children"),o=0;o<i.length;o++){var n=uicore_frontend.back;n||(n=i[o].children[0].innerText);var r=i[o],u=e("<a>",{href:"#",text:n}),c=e("<li>",{class:"menu-item back"});c.append(u).prependTo(r.children[1])}window.uicoreBackLinks=!0}}(),e(".uicore-mobile-menu-wrapper .menu-item-has-children > a:not(.ui-custom-tap)").bind("click",r),e(".uicore-mobile-menu-wrapper .uicore-menu-container .sub-menu .back > a").bind("click",u)):e(".uicore-mobile-menu-wrapper .menu-item-has-children > a:not(.ui-custom-tap)").bind("click",n):(e(".uicore-mobile-menu-wrapper.uicore-ham-classic .menu-item-has-children").bind("mouseenter",c),e(".uicore-mobile-menu-wrapper.uicore-ham-classic .menu-item-has-children").bind("mouseleave",t),e(".uicore-mobile-menu-wrapper.uicore-ham-center .menu-item-has-children > a, .uicore-mobile-menu-wrapper.uicore-ham-creative .menu-item-has-children > a").bind("click",a),e(".uicore-mobile-menu-wrapper.uicore-ham-center .menu-item-has-children > a, .uicore-mobile-menu-wrapper.uicore-ham-creative .menu-item-has-children > a").bind("click",s),e(".uicore-menu-focus .uicore-menu li").bind("mouseenter",l),e(".uicore-menu-focus .uicore-menu li").bind("mouseleave",m)),e(".uicore-mobile-menu-wrapper li:not(.menu-item-has-children):not(.back) > a").bind("click",d),e(".uicore-mobile-menu-wrapper .uicore-extra a").bind("click",d)}function n(i){if(i.preventDefault(),window.closeOtherSubMenus){var o=e(this).parent().siblings().find(".ui-expanded");o.removeClass("ui-expanded"),o.siblings(".sub-menu").slideUp()}e(this).siblings(".sub-menu").slideToggle(),e(this).toggleClass("ui-expanded"),e(this).siblings().toggleClass("uicore-active"),"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow(),h()}function r(i){i.preventDefault();var o="";e(".uicore-mobile-menu-wrapper .uicore-menu ").addClass("uicore-animating"),e(this).siblings().addClass("uicore-active"),"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow();var n=e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu")[0].style.left;"0"==n||"0%"==n||""==n?o="-100%":(n=n.replace("-","").replace("%",""),o="-"+(parseInt(n)+100)+"%"),"1"===uicore_frontend.rtl&&(o=o.replace("-","+")),"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow(),e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu").delay(100).animate({left:o},150,function(){h(),e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu ").removeClass("uicore-animating")})}function u(i){i.preventDefault();var o="";e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu").addClass("uicore-animating");var n=e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu")[0].style.left;"-100%"==n||"0%"==n||""==n||"+100%"==n||"100%"==n?o="0%":(n=n.replace("-","").replace("%",""),o="-"+(parseInt(n)-100)+"%"),"1"===uicore_frontend.rtl&&(o=o.replace("-","+"));var r=this;setTimeout(function(){e(r).parent().parent().removeClass("uicore-active"),"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow()},300),e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu").delay(100).animate({left:o},150,function(){e(".uicore-mobile-menu-wrapper .uicore-menu .sub-menu:not(.uicore-active) li").removeClass("uicore-visible"),h(),e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu ").removeClass("uicore-animating")})}function c(i){"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow(),e(this).find(".sub-menu:first").addClass("uicore-active"),h()}function t(i){e(this).children(".sub-menu:last").removeClass("uicore-active"),e(this).find("li").removeClass("uicore-visible"),"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow()}function a(i){e(this).parent().find(".sub-menu:first").toggleClass("uicore-active"),e(this).parent().find(".sub-menu:first").slideToggle(),e(this).parent().find(".sub-menu:first").hasClass("uicore-active")?h():e(this).parent().find("li").removeClass("uicore-visible")}function s(o){o.preventDefault();var n=e(this).attr("href");/^#.+$/.test(n)&&document.body.classList.contains("uicore-overflow-hidden")&&(e(".uicore-mobile-menu-overflow").removeClass("uicore-overflow-hidden"),e("body").removeClass("uicore-overflow-hidden"),e("body").removeClass("uicore-mobile-nav-show"),i?e(".uicore-animate-fade").length>0?e(".uicore-navigation-wrapper").animate({opacity:0},100):setTimeout(function(){e(".uicore-navigation-wrapper").animate({opacity:0},50)},50):e(".uicore-navigation-wrapper").animate({opacity:0},100),e(location).attr("href",n))}function l(){e(this).siblings("li").stop().fadeTo(300,.4),e(this).parent().siblings("li").stop().fadeTo(300,.3)}function m(){e(this).siblings("li").stop().fadeTo(300,1),e(this).parent().siblings("li").stop().fadeTo(300,1)}function d(o){var n=e(this).attr("href");if(n){var r=n.split("#");if(r[0]&&r[0]!=window.location.pathname&&r[0]!=window.location.href.split("#")[0])return}if(!window.uicoreAnimation){window.uicoreAnimation=!0;var u=e(".uicore-ham-reveal");if(e(".uicore-mobile-menu-wrapper .uicore-menu-container .uicore-menu").toggleClass("uicore-active"),document.body.classList.contains("uicore-overflow-hidden"))"function"==typeof window.uicoreBeforeMobileMenuHide&&window.uicoreBeforeMobileMenuHide(),e(".uicore-mobile-menu-overflow").removeClass("uicore-overflow-hidden"),e("body").removeClass("uicore-overflow-hidden"),e("html").removeClass("uicore-overflow-hidden"),e("body").removeClass("uicore-mobile-nav-show"),i?e(".uicore-animate-fade").length>0?e(".uicore-navigation-wrapper").animate({opacity:0},100):setTimeout(function(){e(".uicore-navigation-wrapper").animate({opacity:0},50)},50):e(".uicore-navigation-wrapper").animate({opacity:0},100),e(".uicore-mobile-menu-wrapper li").removeClass("uicore-visible"),e(".uicore-ham-reveal").css("animation-name","none");else{"function"==typeof window.uicoreBeforeMobileMenuShow&&window.uicoreBeforeMobileMenuShow();var c=0;u.length?(i||(e(".uicore-ham-reveal").css("animation-name","uiCoreAnimationsHamReveal"),c=100),setTimeout(function(){e(".uicore-navigation-wrapper").css("opacity",1)},0+c)):(c=50,setTimeout(function(){e(".uicore-navigation-wrapper").animate({opacity:1},100)},c)),e("body").addClass("uicore-overflow-hidden"),e("html").addClass("uicore-overflow-hidden"),e("body").addClass("uicore-mobile-nav-show"),setTimeout(function(){e(".uicore-mobile-menu-overflow").addClass("uicore-overflow-hidden"),e(".uicore-mobile-menu-wrapper .uicore-menu-container").css("left","0%"),h()},c)}e(this).toggleClass("collapsed"),setTimeout(function(){window.uicoreAnimation=!1},50)}}function h(){var i=e("ul.uicore-active > li:not(.uicore-visible):first");i.length>0&&(i.addClass("uicore-visible"),setTimeout(function(){h(),i.hasClass("menu-item-has-children")&&function(i){(i||e(".uicore-mobile-menu-wrapper .uicore-menu-container .menu-item-has-children")).each(function(i,o){var n=e(this).find(">a").attr("href");if(e(this).children(".ui-custom-tap").remove(),"#"!=n){var r=e("<a>",{href:n,text:"",class:"ui-custom-tap",style:"min-height:"+e(this).height()+"px;transform:translate3d(0,-"+e(this).height()+"px,0)"});e(this).children("a").after(r)}})}(i)},30))}o(),window.onresize=o,e(".uicore-toggle").click(function(){d()})})})},245:function(e,i,o){"use strict";jQuery(document).ready(function(){jQuery(".menu-item-object-uicore-tb").on("mouseenter mouseleave",function(){jQuery(this).find(".elementor-element").each(function(){elementorFrontend.elementsHandler.runReadyTrigger(jQuery(this))})})})}},[241]);/*!
Waypoints - 4.0.1
Copyright Â© 2011-2016 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blob/master/licenses.txt
*/
(function(){'use strict'
var keyCounter=0
var allWaypoints={}
function Waypoint(options){if(!options){throw new Error('No options passed to Waypoint constructor')}
if(!options.element){throw new Error('No element option passed to Waypoint constructor')}
if(!options.handler){throw new Error('No handler option passed to Waypoint constructor')}
this.key='waypoint-'+keyCounter
this.options=Waypoint.Adapter.extend({},Waypoint.defaults,options)
this.element=this.options.element
this.adapter=new Waypoint.Adapter(this.element)
this.callback=options.handler
this.axis=this.options.horizontal?'horizontal':'vertical'
this.enabled=this.options.enabled
this.triggerPoint=null
this.group=Waypoint.Group.findOrCreate({name:this.options.group,axis:this.axis})
this.context=Waypoint.Context.findOrCreateByElement(this.options.context)
if(Waypoint.offsetAliases[this.options.offset]){this.options.offset=Waypoint.offsetAliases[this.options.offset]}
this.group.add(this)
this.context.add(this)
allWaypoints[this.key]=this
keyCounter+=1}
Waypoint.prototype.queueTrigger=function(direction){this.group.queueTrigger(this,direction)}
Waypoint.prototype.trigger=function(args){if(!this.enabled){return}
if(this.callback){this.callback.apply(this,args)}}
Waypoint.prototype.destroy=function(){this.context.remove(this)
this.group.remove(this)
delete allWaypoints[this.key]}
Waypoint.prototype.disable=function(){this.enabled=!1
return this}
Waypoint.prototype.enable=function(){this.context.refresh()
this.enabled=!0
return this}
Waypoint.prototype.next=function(){return this.group.next(this)}
Waypoint.prototype.previous=function(){return this.group.previous(this)}
Waypoint.invokeAll=function(method){var allWaypointsArray=[]
for(var waypointKey in allWaypoints){allWaypointsArray.push(allWaypoints[waypointKey])}
for(var i=0,end=allWaypointsArray.length;i<end;i++){allWaypointsArray[i][method]()}}
Waypoint.destroyAll=function(){Waypoint.invokeAll('destroy')}
Waypoint.disableAll=function(){Waypoint.invokeAll('disable')}
Waypoint.enableAll=function(){Waypoint.Context.refreshAll()
for(var waypointKey in allWaypoints){allWaypoints[waypointKey].enabled=!0}
return this}
Waypoint.refreshAll=function(){Waypoint.Context.refreshAll()}
Waypoint.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight}
Waypoint.viewportWidth=function(){return document.documentElement.clientWidth}
Waypoint.adapters=[]
Waypoint.defaults={context:window,continuous:!0,enabled:!0,group:'default',horizontal:!1,offset:0}
Waypoint.offsetAliases={'bottom-in-view':function(){return this.context.innerHeight()-this.adapter.outerHeight()},'right-in-view':function(){return this.context.innerWidth()-this.adapter.outerWidth()}}
window.Waypoint=Waypoint}());(function(){'use strict'
function requestAnimationFrameShim(callback){window.setTimeout(callback,1000/60)}
var keyCounter=0
var contexts={}
var Waypoint=window.Waypoint
var oldWindowLoad=window.onload
function Context(element){this.element=element
this.Adapter=Waypoint.Adapter
this.adapter=new this.Adapter(element)
this.key='waypoint-context-'+keyCounter
this.didScroll=!1
this.didResize=!1
this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()}
this.waypoints={vertical:{},horizontal:{}}
element.waypointContextKey=this.key
contexts[element.waypointContextKey]=this
keyCounter+=1
if(!Waypoint.windowContext){Waypoint.windowContext=!0
Waypoint.windowContext=new Context(window)}
this.createThrottledScrollHandler()
this.createThrottledResizeHandler()}
Context.prototype.add=function(waypoint){var axis=waypoint.options.horizontal?'horizontal':'vertical'
this.waypoints[axis][waypoint.key]=waypoint
this.refresh()}
Context.prototype.checkEmpty=function(){var horizontalEmpty=this.Adapter.isEmptyObject(this.waypoints.horizontal)
var verticalEmpty=this.Adapter.isEmptyObject(this.waypoints.vertical)
var isWindow=this.element==this.element.window
if(horizontalEmpty&&verticalEmpty&&!isWindow){this.adapter.off('.waypoints')
delete contexts[this.key]}}
Context.prototype.createThrottledResizeHandler=function(){var self=this
function resizeHandler(){self.handleResize()
self.didResize=!1}
this.adapter.on('resize.waypoints',function(){if(!self.didResize){self.didResize=!0
Waypoint.requestAnimationFrame(resizeHandler)}})}
Context.prototype.createThrottledScrollHandler=function(){var self=this
function scrollHandler(){self.handleScroll()
self.didScroll=!1}
this.adapter.on('scroll.waypoints',function(){if(!self.didScroll||Waypoint.isTouch){self.didScroll=!0
Waypoint.requestAnimationFrame(scrollHandler)}})}
Context.prototype.handleResize=function(){Waypoint.Context.refreshAll()}
Context.prototype.handleScroll=function(){var triggeredGroups={}
var axes={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:'right',backward:'left'},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:'down',backward:'up'}}
for(var axisKey in axes){var axis=axes[axisKey]
var isForward=axis.newScroll>axis.oldScroll
var direction=isForward?axis.forward:axis.backward
for(var waypointKey in this.waypoints[axisKey]){var waypoint=this.waypoints[axisKey][waypointKey]
if(waypoint.triggerPoint===null){continue}
var wasBeforeTriggerPoint=axis.oldScroll<waypoint.triggerPoint
var nowAfterTriggerPoint=axis.newScroll>=waypoint.triggerPoint
var crossedForward=wasBeforeTriggerPoint&&nowAfterTriggerPoint
var crossedBackward=!wasBeforeTriggerPoint&&!nowAfterTriggerPoint
if(crossedForward||crossedBackward){waypoint.queueTrigger(direction)
triggeredGroups[waypoint.group.id]=waypoint.group}}}
for(var groupKey in triggeredGroups){triggeredGroups[groupKey].flushTriggers()}
this.oldScroll={x:axes.horizontal.newScroll,y:axes.vertical.newScroll}}
Context.prototype.innerHeight=function(){if(this.element==this.element.window){return Waypoint.viewportHeight()}
return this.adapter.innerHeight()}
Context.prototype.remove=function(waypoint){delete this.waypoints[waypoint.axis][waypoint.key]
this.checkEmpty()}
Context.prototype.innerWidth=function(){if(this.element==this.element.window){return Waypoint.viewportWidth()}
return this.adapter.innerWidth()}
Context.prototype.destroy=function(){var allWaypoints=[]
for(var axis in this.waypoints){for(var waypointKey in this.waypoints[axis]){allWaypoints.push(this.waypoints[axis][waypointKey])}}
for(var i=0,end=allWaypoints.length;i<end;i++){allWaypoints[i].destroy()}}
Context.prototype.refresh=function(){var isWindow=this.element==this.element.window
var contextOffset=isWindow?undefined:this.adapter.offset()
var triggeredGroups={}
var axes
this.handleScroll()
axes={horizontal:{contextOffset:isWindow?0:contextOffset.left,contextScroll:isWindow?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:'right',backward:'left',offsetProp:'left'},vertical:{contextOffset:isWindow?0:contextOffset.top,contextScroll:isWindow?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:'down',backward:'up',offsetProp:'top'}}
for(var axisKey in axes){var axis=axes[axisKey]
for(var waypointKey in this.waypoints[axisKey]){var waypoint=this.waypoints[axisKey][waypointKey]
var adjustment=waypoint.options.offset
var oldTriggerPoint=waypoint.triggerPoint
var elementOffset=0
var freshWaypoint=oldTriggerPoint==null
var contextModifier,wasBeforeScroll,nowAfterScroll
var triggeredBackward,triggeredForward
if(waypoint.element!==waypoint.element.window){elementOffset=waypoint.adapter.offset()[axis.offsetProp]}
if(typeof adjustment==='function'){adjustment=adjustment.apply(waypoint)}else if(typeof adjustment==='string'){adjustment=parseFloat(adjustment)
if(waypoint.options.offset.indexOf('%')>-1){adjustment=Math.ceil(axis.contextDimension*adjustment/100)}}
contextModifier=axis.contextScroll-axis.contextOffset
waypoint.triggerPoint=Math.floor(elementOffset+contextModifier-adjustment)
wasBeforeScroll=oldTriggerPoint<axis.oldScroll
nowAfterScroll=waypoint.triggerPoint>=axis.oldScroll
triggeredBackward=wasBeforeScroll&&nowAfterScroll
triggeredForward=!wasBeforeScroll&&!nowAfterScroll
if(!freshWaypoint&&triggeredBackward){waypoint.queueTrigger(axis.backward)
triggeredGroups[waypoint.group.id]=waypoint.group}else if(!freshWaypoint&&triggeredForward){waypoint.queueTrigger(axis.forward)
triggeredGroups[waypoint.group.id]=waypoint.group}else if(freshWaypoint&&axis.oldScroll>=waypoint.triggerPoint){waypoint.queueTrigger(axis.forward)
triggeredGroups[waypoint.group.id]=waypoint.group}}}
Waypoint.requestAnimationFrame(function(){for(var groupKey in triggeredGroups){triggeredGroups[groupKey].flushTriggers()}})
return this}
Context.findOrCreateByElement=function(element){return Context.findByElement(element)||new Context(element)}
Context.refreshAll=function(){for(var contextId in contexts){contexts[contextId].refresh()}}
Context.findByElement=function(element){return contexts[element.waypointContextKey]}
window.onload=function(){if(oldWindowLoad){oldWindowLoad()}
Context.refreshAll()}
Waypoint.requestAnimationFrame=function(callback){var requestFn=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||requestAnimationFrameShim
requestFn.call(window,callback)}
Waypoint.Context=Context}());(function(){'use strict'
function byTriggerPoint(a,b){return a.triggerPoint-b.triggerPoint}
function byReverseTriggerPoint(a,b){return b.triggerPoint-a.triggerPoint}
var groups={vertical:{},horizontal:{}}
var Waypoint=window.Waypoint
function Group(options){this.name=options.name
this.axis=options.axis
this.id=this.name+'-'+this.axis
this.waypoints=[]
this.clearTriggerQueues()
groups[this.axis][this.name]=this}
Group.prototype.add=function(waypoint){this.waypoints.push(waypoint)}
Group.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}}
Group.prototype.flushTriggers=function(){for(var direction in this.triggerQueues){var waypoints=this.triggerQueues[direction]
var reverse=direction==='up'||direction==='left'
waypoints.sort(reverse?byReverseTriggerPoint:byTriggerPoint)
for(var i=0,end=waypoints.length;i<end;i+=1){var waypoint=waypoints[i]
if(waypoint.options.continuous||i===waypoints.length-1){waypoint.trigger([direction])}}}
this.clearTriggerQueues()}
Group.prototype.next=function(waypoint){this.waypoints.sort(byTriggerPoint)
var index=Waypoint.Adapter.inArray(waypoint,this.waypoints)
var isLast=index===this.waypoints.length-1
return isLast?null:this.waypoints[index+1]}
Group.prototype.previous=function(waypoint){this.waypoints.sort(byTriggerPoint)
var index=Waypoint.Adapter.inArray(waypoint,this.waypoints)
return index?this.waypoints[index-1]:null}
Group.prototype.queueTrigger=function(waypoint,direction){this.triggerQueues[direction].push(waypoint)}
Group.prototype.remove=function(waypoint){var index=Waypoint.Adapter.inArray(waypoint,this.waypoints)
if(index>-1){this.waypoints.splice(index,1)}}
Group.prototype.first=function(){return this.waypoints[0]}
Group.prototype.last=function(){return this.waypoints[this.waypoints.length-1]}
Group.findOrCreate=function(options){return groups[options.axis][options.name]||new Group(options)}
Waypoint.Group=Group}());(function(){'use strict'
var Waypoint=window.Waypoint
function isWindow(element){return element===element.window}
function getWindow(element){if(isWindow(element)){return element}
return element.defaultView}
function NoFrameworkAdapter(element){this.element=element
this.handlers={}}
NoFrameworkAdapter.prototype.innerHeight=function(){var isWin=isWindow(this.element)
return isWin?this.element.innerHeight:this.element.clientHeight}
NoFrameworkAdapter.prototype.innerWidth=function(){var isWin=isWindow(this.element)
return isWin?this.element.innerWidth:this.element.clientWidth}
NoFrameworkAdapter.prototype.off=function(event,handler){function removeListeners(element,listeners,handler){for(var i=0,end=listeners.length-1;i<end;i++){var listener=listeners[i]
if(!handler||handler===listener){element.removeEventListener(listener)}}}
var eventParts=event.split('.')
var eventType=eventParts[0]
var namespace=eventParts[1]
var element=this.element
if(namespace&&this.handlers[namespace]&&eventType){removeListeners(element,this.handlers[namespace][eventType],handler)
this.handlers[namespace][eventType]=[]}else if(eventType){for(var ns in this.handlers){removeListeners(element,this.handlers[ns][eventType]||[],handler)
this.handlers[ns][eventType]=[]}}else if(namespace&&this.handlers[namespace]){for(var type in this.handlers[namespace]){removeListeners(element,this.handlers[namespace][type],handler)}
this.handlers[namespace]={}}}
NoFrameworkAdapter.prototype.offset=function(){if(!this.element.ownerDocument){return null}
var documentElement=this.element.ownerDocument.documentElement
var win=getWindow(this.element.ownerDocument)
var rect={top:0,left:0}
if(this.element.getBoundingClientRect){rect=this.element.getBoundingClientRect()}
return{top:rect.top+win.pageYOffset-documentElement.clientTop,left:rect.left+win.pageXOffset-documentElement.clientLeft}}
NoFrameworkAdapter.prototype.on=function(event,handler){var eventParts=event.split('.')
var eventType=eventParts[0]
var namespace=eventParts[1]||'__default'
var nsHandlers=this.handlers[namespace]=this.handlers[namespace]||{}
var nsTypeList=nsHandlers[eventType]=nsHandlers[eventType]||[]
nsTypeList.push(handler)
this.element.addEventListener(eventType,handler)}
NoFrameworkAdapter.prototype.outerHeight=function(includeMargin){var height=this.innerHeight()
var computedStyle
if(includeMargin&&!isWindow(this.element)){computedStyle=window.getComputedStyle(this.element)
height+=parseInt(computedStyle.marginTop,10)
height+=parseInt(computedStyle.marginBottom,10)}
return height}
NoFrameworkAdapter.prototype.outerWidth=function(includeMargin){var width=this.innerWidth()
var computedStyle
if(includeMargin&&!isWindow(this.element)){computedStyle=window.getComputedStyle(this.element)
width+=parseInt(computedStyle.marginLeft,10)
width+=parseInt(computedStyle.marginRight,10)}
return width}
NoFrameworkAdapter.prototype.scrollLeft=function(){var win=getWindow(this.element)
return win?win.pageXOffset:this.element.scrollLeft}
NoFrameworkAdapter.prototype.scrollTop=function(){var win=getWindow(this.element)
return win?win.pageYOffset:this.element.scrollTop}
NoFrameworkAdapter.extend=function(){var args=Array.prototype.slice.call(arguments)
function merge(target,obj){if(typeof target==='object'&&typeof obj==='object'){for(var key in obj){if(obj.hasOwnProperty(key)){target[key]=obj[key]}}}
return target}
for(var i=1,end=args.length;i<end;i++){merge(args[0],args[i])}
return args[0]}
NoFrameworkAdapter.inArray=function(element,array,i){return array==null?-1:array.indexOf(element,i)}
NoFrameworkAdapter.isEmptyObject=function(obj){for(var name in obj){return!1}
return!0}
Waypoint.adapters.push({name:'noframework',Adapter:NoFrameworkAdapter})
Waypoint.Adapter=NoFrameworkAdapter}());function _defineProperty(t,e,i){return(e=_toPropertyKey(e))in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t}function _classCallCheck(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function _defineProperties(t,e){for(var i=0;i<e.length;i++){var o=e[i];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,_toPropertyKey(o.key),o)}}function _createClass(t,e,i){return e&&_defineProperties(t.prototype,e),i&&_defineProperties(t,i),Object.defineProperty(t,"prototype",{writable:!1}),t}function _toPropertyKey(t){t=_toPrimitive(t,"string");return"symbol"==_typeof(t)?t:t+""}function _toPrimitive(t,e){if("object"!=_typeof(t)||!t)return t;var i=t[Symbol.toPrimitive];if(void 0===i)return("string"===e?String:Number)(t);i=i.call(t,e||"default");if("object"!=_typeof(i))return i;throw new TypeError("@@toPrimitive must return a primitive value.")}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}(t=>{"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):("undefined"!=typeof globalThis?globalThis:self).Lenis=t()})(function(){function p(t,e,i){return Math.max(t,Math.min(e,i))}var w=(()=>_createClass(function t(){_classCallCheck(this,t)},[{key:"advance",value:function(t){var e,i,o,n,s;this.isRunning&&(e=!1,this.lerp?(this.value=(i=this.value,o=this.to,n=60*this.lerp,s=t,i=i,o=o,(1-(n=1-Math.exp(-n*s)))*i+n*o),Math.round(this.value)===this.to&&(this.value=this.to,e=!0)):(this.currentTime+=t,i=(e=1<=(s=p(0,this.currentTime/this.duration,1)))?1:this.easing(s),this.value=this.from+(this.to-this.from)*i),null!=(n=this.onUpdate)&&n.call(this,this.value,e),e)&&this.stop()}},{key:"stop",value:function(){this.isRunning=!1}},{key:"fromTo",value:function(t,e,i){var o=i.lerp,o=void 0===o?.1:o,n=i.duration,n=void 0===n?1:n,s=i.easing,s=void 0===s?function(t){return t}:s,r=i.onStart,i=i.onUpdate;this.from=this.value=t,this.to=e,this.lerp=o,this.duration=n,this.easing=s,this.currentTime=0,this.isRunning=!0,null!=r&&r(),this.onUpdate=i}}]))();var k=(()=>_createClass(function t(){var i,o,n,e=this,s=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{},r=s.wrapper,l=s.content,a=s.autoResize,a=void 0===a||a,s=s.debounce,s=void 0===s?250:s;_classCallCheck(this,t),_defineProperty(this,"resize",function(){e.onWrapperResize(),e.onContentResize()}),_defineProperty(this,"onWrapperResize",function(){e.wrapper===window?(e.width=window.innerWidth,e.height=window.innerHeight):(e.width=e.wrapper.clientWidth,e.height=e.wrapper.clientHeight)}),_defineProperty(this,"onContentResize",function(){e.wrapper===window?(e.scrollHeight=e.content.scrollHeight,e.scrollWidth=e.content.scrollWidth):(e.scrollHeight=e.wrapper.scrollHeight,e.scrollWidth=e.wrapper.scrollWidth)}),this.wrapper=r,this.content=l,a&&(this.debouncedResize=(i=this.resize,o=s,function(){var t=arguments,e=this;clearTimeout(n),n=setTimeout(function(){i.apply(e,t)},o)}),this.wrapper===window?window.addEventListener("resize",this.debouncedResize,!1):(this.wrapperResizeObserver=new ResizeObserver(this.debouncedResize),this.wrapperResizeObserver.observe(this.wrapper)),this.contentResizeObserver=new ResizeObserver(this.debouncedResize),this.contentResizeObserver.observe(this.content)),this.resize()},[{key:"destroy",value:function(){var t;null!=(t=this.wrapperResizeObserver)&&t.disconnect(),null!=(t=this.contentResizeObserver)&&t.disconnect(),window.removeEventListener("resize",this.debouncedResize,!1)}},{key:"limit",get:function(){return{x:this.scrollWidth-this.width,y:this.scrollHeight-this.height}}}]))(),b=(()=>_createClass(function t(){_classCallCheck(this,t),this.events={}},[{key:"emit",value:function(t){for(var e=this.events[t]||[],i=arguments.length,o=new Array(1<i?i-1:0),n=1;n<i;n++)o[n-1]=arguments[n];for(var s=0,r=e.length;s<r;s++)e[s].apply(e,o)}},{key:"on",value:function(e,i){var t,o=this;return null!=(t=this.events[e])&&t.push(i)||(this.events[e]=[i]),function(){var t;o.events[e]=null==(t=o.events[e])?void 0:t.filter(function(t){return i!==t})}}},{key:"off",value:function(t,e){this.events[t]=null==(t=this.events[t])?void 0:t.filter(function(t){return e!==t})}},{key:"destroy",value:function(){this.events={}}}]))(),z=(()=>_createClass(function t(e,i){var s=this,o=i.wheelMultiplier,o=void 0===o?1:o,n=i.touchMultiplier,n=void 0===n?2:n,i=i.normalizeWheel,i=void 0!==i&&i;_classCallCheck(this,t),_defineProperty(this,"onTouchStart",function(t){var e=(i=t.targetTouches?t.targetTouches[0]:t).clientX,i=i.clientY;s.touchStart.x=e,s.touchStart.y=i,s.lastDelta={x:0,y:0},s.emitter.emit("scroll",{deltaX:0,deltaY:0,event:t})}),_defineProperty(this,"onTouchMove",function(t){var e=(i=t.targetTouches?t.targetTouches[0]:t).clientX,i=i.clientY,o=-(e-s.touchStart.x)*s.touchMultiplier,n=-(i-s.touchStart.y)*s.touchMultiplier;s.touchStart.x=e,s.touchStart.y=i,s.lastDelta={x:o,y:n},s.emitter.emit("scroll",{deltaX:o,deltaY:n,event:t})}),_defineProperty(this,"onTouchEnd",function(t){s.emitter.emit("scroll",{deltaX:s.lastDelta.x,deltaY:s.lastDelta.y,event:t})}),_defineProperty(this,"onWheel",function(t){var e=t.deltaX,i=t.deltaY;s.normalizeWheel&&(e=p(-100,e,100),i=p(-100,i,100)),e*=s.wheelMultiplier,i*=s.wheelMultiplier,s.emitter.emit("scroll",{deltaX:e,deltaY:i,event:t})}),this.element=e,this.wheelMultiplier=o,this.touchMultiplier=n,this.normalizeWheel=i,this.touchStart={x:null,y:null},this.emitter=new b,this.element.addEventListener("wheel",this.onWheel,{passive:!1}),this.element.addEventListener("touchstart",this.onTouchStart,{passive:!1}),this.element.addEventListener("touchmove",this.onTouchMove,{passive:!1}),this.element.addEventListener("touchend",this.onTouchEnd,{passive:!1})},[{key:"on",value:function(t,e){return this.emitter.on(t,e)}},{key:"destroy",value:function(){this.emitter.destroy(),this.element.removeEventListener("wheel",this.onWheel,{passive:!1}),this.element.removeEventListener("touchstart",this.onTouchStart,{passive:!1}),this.element.removeEventListener("touchmove",this.onTouchMove,{passive:!1}),this.element.removeEventListener("touchend",this.onTouchEnd,{passive:!1})}}]))();return(()=>_createClass(function t(){var r=this,e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{},i=e.wrapper,i=void 0===i?window:i,o=e.content,o=void 0===o?document.documentElement:o,n=e.wheelEventsTarget,n=void 0===n?i:n,s=e.eventsTarget,s=void 0===s?n:s,l=e.smoothWheel,l=void 0===l||l,a=e.syncTouch,a=void 0!==a&&a,h=e.syncTouchLerp,h=void 0===h?.075:h,c=e.touchInertiaMultiplier,c=void 0===c?35:c,u=e.duration,d=e.easing,d=void 0===d?function(t){return Math.min(1,1.001-Math.pow(2,-10*t))}:d,p=e.lerp,p=void 0===p?!u&&.1:p,v=e.infinite,v=void 0!==v&&v,m=e.orientation,m=void 0===m?"vertical":m,f=e.gestureOrientation,f=void 0===f?"vertical":f,g=e.touchMultiplier,g=void 0===g?1:g,y=e.wheelMultiplier,y=void 0===y?1:y,S=e.normalizeWheel,S=void 0!==S&&S,_=e.autoResize,_=void 0===_||_,e=e.__experimental__naiveDimensions,e=void 0!==e&&e;_classCallCheck(this,t),this.__isSmooth=!1,this.__isScrolling=!1,this.__isStopped=!1,this.__isLocked=!1,this.onVirtualScroll=function(t){var i,o,e,n=t.deltaX,s=t.deltaY;(t=t.event).ctrlKey||(i=t.type.includes("touch"),o=t.type.includes("wheel"),r.options.syncTouch&&i&&"touchstart"===t.type?r.reset():(e="vertical"===r.options.gestureOrientation&&0===s||"horizontal"===r.options.gestureOrientation&&0===n,0===n&&0===s||e||(e=(e=t.composedPath()).slice(0,e.indexOf(r.rootElement))).find(function(t){var e;return(null==(e=t.hasAttribute)?void 0:e.call(t,"data-lenis-prevent"))||i&&(null==(e=t.hasAttribute)?void 0:e.call(t,"data-lenis-prevent-touch"))||o&&(null==(e=t.hasAttribute)?void 0:e.call(t,"data-lenis-prevent-wheel"))||(null==(e=t.classList)?void 0:e.contains("lenis"))&&!(null!=(e=t.classList)&&e.contains("lenis-stopped"))})||(r.isStopped||r.isLocked?t.preventDefault():(r.isSmooth=r.options.syncTouch&&i||r.options.smoothWheel&&o,r.isSmooth?(t.preventDefault(),e=s,"both"===r.options.gestureOrientation?e=Math.abs(s)>Math.abs(n)?s:n:"horizontal"===r.options.gestureOrientation&&(e=n),s=i&&r.options.syncTouch,(n=i&&"touchend"===t.type&&5<Math.abs(e))&&(e=r.velocity*r.options.touchInertiaMultiplier),r.scrollTo(r.targetScroll+e,Object.assign({programmatic:!1},s?{lerp:n?r.options.syncTouchLerp:1}:{lerp:r.options.lerp,duration:r.options.duration,easing:r.options.easing}))):(r.isScrolling=!1,r.animate.stop())))))},this.onNativeScroll=function(){var t;r.__preventNextScrollEvent||r.isScrolling||(t=r.animatedScroll,r.animatedScroll=r.targetScroll=r.actualScroll,r.velocity=0,r.direction=Math.sign(r.animatedScroll-t),r.emit())},window.lenisVersion="1.0.39",i!==document.documentElement&&i!==document.body||(i=window),this.options={wrapper:i,content:o,wheelEventsTarget:n,eventsTarget:s,smoothWheel:l,syncTouch:a,syncTouchLerp:h,touchInertiaMultiplier:c,duration:u,easing:d,lerp:p,infinite:v,gestureOrientation:f,orientation:m,touchMultiplier:g,wheelMultiplier:y,normalizeWheel:S,autoResize:_,__experimental__naiveDimensions:e},this.animate=new w,this.emitter=new b,this.dimensions=new k({wrapper:i,content:o,autoResize:_}),this.toggleClassName("lenis",!0),this.velocity=0,this.isLocked=!1,this.isStopped=!1,this.isSmooth=a||l,this.isScrolling=!1,this.targetScroll=this.animatedScroll=this.actualScroll,this.options.wrapper.addEventListener("scroll",this.onNativeScroll,!1),this.virtualScroll=new z(s,{touchMultiplier:g,wheelMultiplier:y,normalizeWheel:S}),this.virtualScroll.on("scroll",this.onVirtualScroll)},[{key:"destroy",value:function(){this.emitter.destroy(),this.options.wrapper.removeEventListener("scroll",this.onNativeScroll,!1),this.virtualScroll.destroy(),this.dimensions.destroy(),this.toggleClassName("lenis",!1),this.toggleClassName("lenis-smooth",!1),this.toggleClassName("lenis-scrolling",!1),this.toggleClassName("lenis-stopped",!1),this.toggleClassName("lenis-locked",!1)}},{key:"on",value:function(t,e){return this.emitter.on(t,e)}},{key:"off",value:function(t,e){return this.emitter.off(t,e)}},{key:"setScroll",value:function(t){this.isHorizontal?this.rootElement.scrollLeft=t:this.rootElement.scrollTop=t}},{key:"resize",value:function(){this.dimensions.resize()}},{key:"emit",value:function(){this.emitter.emit("scroll",this)}},{key:"reset",value:function(){this.isLocked=!1,this.isScrolling=!1,this.animatedScroll=this.targetScroll=this.actualScroll,this.velocity=0,this.animate.stop()}},{key:"start",value:function(){this.isStopped&&(this.isStopped=!1,this.reset())}},{key:"stop",value:function(){this.isStopped||(this.isStopped=!0,this.animate.stop(),this.reset())}},{key:"raf",value:function(t){var e=t-(this.time||t);this.time=t,this.animate.advance(.001*e)}},{key:"scrollTo",value:function(t){var e,i=this,o=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},n=o.offset,n=void 0===n?0:n,s=o.immediate,s=void 0!==s&&s,r=o.lock,l=void 0!==r&&r,r=o.duration,r=void 0===r?this.options.duration:r,a=o.easing,a=void 0===a?this.options.easing:a,h=o.lerp,h=void 0===h?!r&&this.options.lerp:h,c=o.onComplete,u=o.force,u=void 0!==u&&u,o=o.programmatic,d=void 0===o||o;if((!this.isStopped&&!this.isLocked||u)&&(["top","left","start"].includes(t)?t=0:["bottom","right","end"].includes(t)?t=this.limit:("string"==typeof t?e=document.querySelector(t):null!=t&&t.nodeType&&(e=t),e&&(this.options.wrapper!==window&&(o=this.options.wrapper.getBoundingClientRect(),n-=this.isHorizontal?o.left:o.top),u=e.getBoundingClientRect(),t=(this.isHorizontal?u.left:u.top)+this.animatedScroll)),"number"==typeof t))if(t+=n,t=Math.round(t),this.options.infinite?d&&(this.targetScroll=this.animatedScroll=this.scroll):t=p(0,t,this.limit),s)this.animatedScroll=this.targetScroll=t,this.setScroll(this.scroll),this.reset(),null!=c&&c(this);else{if(!d){if(t===this.targetScroll)return;this.targetScroll=t}this.animate.fromTo(this.animatedScroll,t,{duration:r,easing:a,lerp:h,onStart:function(){l&&(i.isLocked=!0),i.isScrolling=!0},onUpdate:function(t,e){i.isScrolling=!0,i.velocity=t-i.animatedScroll,i.direction=Math.sign(i.velocity),i.animatedScroll=t,i.setScroll(i.scroll),d&&(i.targetScroll=t),e||i.emit(),e&&(i.reset(),i.emit(),null!=c&&c(i),i.__preventNextScrollEvent=!0,requestAnimationFrame(function(){delete i.__preventNextScrollEvent}))}})}}},{key:"rootElement",get:function(){return this.options.wrapper===window?document.documentElement:this.options.wrapper}},{key:"limit",get:function(){return this.options.__experimental__naiveDimensions?this.isHorizontal?this.rootElement.scrollWidth-this.rootElement.clientWidth:this.rootElement.scrollHeight-this.rootElement.clientHeight:this.dimensions.limit[this.isHorizontal?"x":"y"]}},{key:"isHorizontal",get:function(){return"horizontal"===this.options.orientation}},{key:"actualScroll",get:function(){return this.isHorizontal?this.rootElement.scrollLeft:this.rootElement.scrollTop}},{key:"scroll",get:function(){return this.options.infinite?(t=this.animatedScroll,e=this.limit,(t%e+e)%e):this.animatedScroll;var t,e}},{key:"progress",get:function(){return 0===this.limit?1:this.scroll/this.limit}},{key:"isSmooth",get:function(){return this.__isSmooth},set:function(t){this.__isSmooth!==t&&(this.__isSmooth=t,this.toggleClassName("lenis-smooth",t))}},{key:"isScrolling",get:function(){return this.__isScrolling},set:function(t){this.__isScrolling!==t&&(this.__isScrolling=t,this.toggleClassName("lenis-scrolling",t))}},{key:"isStopped",get:function(){return this.__isStopped},set:function(t){this.__isStopped!==t&&(this.__isStopped=t,this.toggleClassName("lenis-stopped",t))}},{key:"isLocked",get:function(){return this.__isLocked},set:function(t){this.__isLocked!==t&&(this.__isLocked=t,this.toggleClassName("lenis-locked",t))}},{key:"className",get:function(){var t="lenis";return this.isStopped&&(t+=" lenis-stopped"),this.isLocked&&(t+=" lenis-locked"),this.isScrolling&&(t+=" lenis-scrolling"),this.isSmooth&&(t+=" lenis-smooth"),t}},{key:"toggleClassName",value:function(t,e){this.rootElement.classList.toggle(t,e),this.emitter.emit("className change",this)}}]))()});var lenis=new Lenis;function raf(t){lenis.raf(t),requestAnimationFrame(raf)}requestAnimationFrame(raf),document.addEventListener("DOMContentLoaded",function(){var t=document.createElement("style");t.textContent="\n    html {\n      height: auto;\n      scroll-behavior: auto !important;\n    }\n    [data-ui-a-scroll-prevent],\n    .ui-a-scroll-prevent {\n      overscroll-behavior: contain;\n    }\n    .ui-a-scroll-stopped {\n      overflow: hidden;\n    }\n    .ui-a-scroll-scrolling iframe {\n      pointer-events: none;\n    }\n  ",document.head.appendChild(t)});window.addEventListener('DOMContentLoaded',()=>{jQuery(' input[type="button"], input[type="submit"], .elementor-button.elementor-button, .elementor-button:not(.bdt-offcanvas-button), .bdt-button-primary, .bdt-ep-button,button.metform-btn,button.metform-btn:not(.toggle), .bdt-callout a.bdt-callout-button, [type="submit"], .tutor-button, .tutor-login-form-wrap input[type="submit"], .wp-block-button__link,.uicore-mobile-menu-wrapper .uicore-cta-wrapper a,.uicore-left-menu .uicore-cta-wrapper a,.wc-block-components-button:not(.is-link),.uicore-navbar a.uicore-btn, .bdt-contact-form .elementor-button,.ui-attract').on('mousemove',function(e){const pos=this.getBoundingClientRect();const mx=e.clientX-pos.left-pos.width/2;const my=e.clientY-pos.top-pos.height/2;this.style.transform='translate('+mx*0.15+'px, '+my*0.3+'px)';this.style.transform+='rotate3d('+mx*-0.1+', '+my*-0.3+', 0, 12deg)';if(this.children[0]){this.children[0].style.transition='all .2s linear';this.children[0].style.transform='translate('+mx*0.07+'px, '+my*0.14+'px)'}}).on('mouseleave',function(){this.style.transform='translate3d(0px, 0px, 0px)';this.style.transform+='rotate3d(0, 0, 0, 0deg)';if(this.children[0])
this.children[0].style.transform='translate3d(0px, 0px, 0px)'})},!1)