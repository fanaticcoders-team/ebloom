<!DOCTYPE html>
<html lang="el">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <title>
    {{__('words.Όροι χρήσης')}}
    {{-- Terms & Conditions --}}

  </title>
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script type="7f68c7e5cf399bdea990487a-text/javascript">
      (window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:false}};(window.NREUM||(NREUM={})).loader_config={xpid:"Ug4GWVVWGwAAV1FQAgcEVA==",licenseKey:"89fe45fbe0",applicationID:"303025632"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var i,o=t("ee"),a=t(24),c={};try{i=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,i.indexOf("dev")!==-1&&(c.dev=!0),i.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&o.on("internal-error",function(t){r(t.stack)}),c.dev&&o.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{p?p-=1:i(c||new UncaughtException(t,e,n),!0)}catch(f){try{o("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function i(t,e){var n=e?null:s.now();o("err",[t,n])}var o=t("handle"),a=t(25),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(9),t(8),"addEventListener"in window&&t(5),s.xhrWrappable&&t(10),d=!0)}c.on("fn-start",function(t,e,n){d&&(p+=1)}),c.on("fn-err",function(t,e,n){d&&!n[l]&&(f(n,l,function(){return!0}),this.thrown=!0,i(n))}),c.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),c.on("internal-error",function(t){o("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var i=t("ee"),o=t("handle"),a=t(9),c=t(8),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(7),"addEventListener"in window&&t(5);var x=NREUM.o.EV;i.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),i.on(w,function(t,e){var n=t[0];n instanceof x&&o("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(w,function(t,e){o(v,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),i.on(g+p,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),i.on(g+h,function(t){o("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){o(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&i(e)}function i(t){c.inPlace(t,[u,d],"-",o)}function o(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(i(window),i(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=o(arguments),e={};i.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return i.emit(n+"start",[t,a],c),c.then(function(t){return i.emit(n+"end",[null,t],c),t},function(t){throw i.emit(n+"end",[t],c),t})})}var i=t("ee").get("fetch"),o=t(25),a=t(24);e.exports=i;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,l=c.Response,p=c.fetch,h="prototype",m="nr@context";d&&l&&p&&(a(u,function(t,e){r(d[h],e,f),r(l[h],e,f)}),r(c,"fetch",s),i.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),i.emit(s+"done",[null,e],n)}else i.emit(s+"done",[t],n)}))},{}],7:[function(t,e,n){var r=t("ee").get("history"),i=t("wrap-function")(r);e.exports=r;var o=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;o&&o.pushState&&o.replaceState&&(a=o),i.inPlace(a,["pushState","replaceState"],"-")},{}],8:[function(t,e,n){var r=t("ee").get("raf"),i=t("wrap-function")(r),o="equestAnimationFrame";e.exports=r,i.inPlace(window,["r"+o,"mozR"+o,"webkitR"+o,"msR"+o],"raf-"),r.on("raf-start",function(t){t[0]=i(t[0],"fn-")})},{}],9:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function i(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var o=t("ee").get("timer"),a=t("wrap-function")(o),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=o,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),o.on(s+u,r),o.on(c+u,i)},{}],10:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function i(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function o(t){y.push(t),h&&(b?b.then(a):w?w(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(5);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(v,i,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(p,x),x.prototype=p.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),o(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!w&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],11:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=p.generateSpanId(),m=p.generateTraceId(),w=Date.now(),v={spanId:h,traceId:m,timestamp:w};return(t.sameOrigin||s(t)&&l())&&(v.traceContextParentHeader=i(h,m),v.traceContextStateHeader=o(h,w,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(v.newrelicHeader=a(h,m,w,n,r,f)),v}function i(t,e){return"00-"+e+"-"+t+"-01"}function o(t,e,n,r,i){var o=0,a="",c=1,s="",f="";return i+"@nr="+o+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,i,o){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:i,id:t,tr:e,ti:n}};return o&&r!==o&&(c.d.tk=o),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var i=h(n.allowed_origins[r]);if(t.hostname===i.hostname&&t.protocol===i.protocol&&t.port===i.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function l(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var p=t(21),h=t(13);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],12:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<l;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):o(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function i(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function o(t,e){t.params.status=e.status;var n=w(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(13),f=t(11).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(17),m=t(16),w=t(14),v=window.XMLHttpRequest;a.features.xhr=!0,t(10),t(6),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){o(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],i=this;if(n&&r){var o=m(r);o&&(n.txSize=o)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||i.loadCaptureCalled||(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<l;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof v&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof v&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=f(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),e(o.headers,i)&&(this.dt=i),t.length>1?t[1]=o:t.push(o)}else t[0]&&t[0].headers&&e(t[0].headers,i)&&(this.dt=i)})}},{}],13:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,i={};e.href=t,i.port=e.port;var o=e.href.split("://");!i.port&&o[1]&&(i.port=o[1].split("../../index.html")[0].split("@").pop().split(":")[1]),i.port&&"0"!==i.port||(i.port="https"===o[0]?"443":"80"),i.hostname=e.hostname||n.hostname,i.pathname=e.pathname,i.protocol=o[0],"/"!==i.pathname.charAt(0)&&(i.pathname="/"+i.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return i.sameOrigin=a&&(!e.hostname||c),"/"===i.pathname&&(r[t]=i),i}},{}],14:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?i(t.response):"text"===n||""===n||void 0===n?i(t.responseText):void 0}var i=t(16);e.exports=r},{}],15:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(24),c=t(25),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,e){u[e]=i(l+e,!0,"api")}),u.addPageAction=i(l+"addPageAction",!0),u.setCurrentRouteName=i(l+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(p+"tracer",[f.now(),t,n],r),function(){if(s.emit((i?"":"no-")+"fn-start",[f.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=i(p+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,f.now(),!1,e])}},{}],16:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],17:[function(t,e,n){var r=0,i=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);i&&(r=+i[1]),e.exports=r},{}],18:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(26);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],19:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],20:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!w){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),w=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[l.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),l=t("loader"),p=t(23),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(i);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(o);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var w=!1,v=["click","keydown","mousedown","pointerdown","touchstart"];v.forEach(function(t){document.addEventListener(t,a,!1)})}p(c)}},{}],21:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var i,o="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<o.length;c++)i=o[c],"x"===i?a+=t().toString(16):"y"===i?(i=3&t()|8,a+=i.toString(16)):a+=i;return a}function i(){return a(16)}function o(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,i=window.crypto||window.msCrypto;i&&i.getRandomValues&&Uint8Array&&(n=i.getRandomValues(new Uint8Array(31)));for(var o=[],a=0;a<t;a++)o.push(e().toString(16));return o.join("")}e.exports={generateUuid:r,generateSpanId:i,generateTraceId:o}},{}],22:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=s[1])}e.exports={agent:i,version:o,match:r}},{}],23:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],24:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],25:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],26:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?f(t,s,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!p.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),s=m(n),f=s.length,u=0;u<f;u++)s[u].apply(c,r);var l=d[y[n]];return l&&l.push([x,n,r,c]),c}}function o(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function w(t){return l[t]=l[t]||i(n)}function v(t,e){u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:o,addEventListener:o,removeEventListener:h,emit:n,get:w,listeners:m,context:e,buffer:v,abort:c,aborted:!1};return x}function o(t){return f(t,s,a)}function a(){return new r}function c(){(d.api||d.feature)&&(p.aborted=!0,d=p.backlog={})}var s="nr@context",f=t("gos"),u=t(24),d={},l={},p=e.exports=i();e.exports.getOrSetContext=o,p.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!E++){var t=b.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(y,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=t(18),c=t("handle"),s=t(24),f=t("ee"),u=t(22),d=t(19),l=window,p=l.document,h="addEventListener",m="attachEvent",w=l.XMLHttpRequest,v=w&&w.prototype;if(d(l.location)){NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:w,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var g=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},x=w&&v&&v[h]&&!/CriOS/.test(navigator.userAgent),b=e.exports={offset:a.getLastTimestamp(),now:a,origin:g,features:{},xhrWrappable:x,userAgent:u};t(15),t(20),p[h]?(p[h]("DOMContentLoaded",o,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",i),l[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,s,f){function nrWrapper(){var o,a,u,l;try{a=this,o=d(arguments),u="function"==typeof r?r(o,a):r||{}}catch(p){i([p,"",[o,a,s],u],t)}c(n+"start",[o,a,s],u,f);try{return l=e.apply(a,o)}catch(h){throw c(n+"err",[o,a,h],u,f),h}finally{c(n+"end",[o,a,l],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[l]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,s,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)s=e[f],c=t[s],a(c)||(t[s]=n(c,u?s+r:r,i,s,o))}function c(n,r,o,a){if(!h||e){var c=h;h=!0;try{t.emit(n,r,o,e,a)}catch(s){i([s,n,r,o],t)}h=c}}return t||(t=u),n.inPlace=r,n.flag=l,n}function i(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)p.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[l])}function c(t,e){var n=e(t);return n[l]=t,o(t,n,u),n}function s(t,e,n){var r=t[e];t[e]=c(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(25),l="nr@original",p=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=s,e.exports.argsToArray=f},{}]},{},["loader",2,12,4,3]);</script>

      <meta name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   
  <link rel="apple-touch-icon" sizes="180x180"
    href="{{asset("frontEnd-assets/site-assets/img/eBloom/apple-touch-icon.png")}}">

  <link rel="icon" type="image/png" sizes="32x32" href="{{asset("frontEnd-assets/images/logo5.png")}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset("frontEnd-assets/images/logo5.png")}}">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#ed2e2e">
  <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico">
  <meta name="theme-color" content="#ffffff">
  <link rel="manifest" href="../../manifest.json">

  <link rel="dns-prefetch" href="http://api.eBloom.gr/">
  <link rel="dns-prefetch" href="http://plus.google.com/">
  <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
  <link rel="dns-prefetch" href="http://connect.facebook.net/">
  <link rel="dns-prefetch" href="http://google-analytics.com/">
  <link rel="dns-prefetch" href="http://v2.zopim.com/">
  <link rel="dns-prefetch" href="http://maps.googleapis.com/">

  <meta property="og:image" content="{{asset("frontEnd-assets/site-assets/img/logos/logo250x250.jpg")}}">
  <meta property="fb:app_id" content="514405861905024">
  <meta name="p:domain_verify" content="6967780c0cfd9d1§90f0ccd144ca32dc8" />
  <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300&subset=greek,latin-ext,latin' rel='stylesheet' type='text/css'> -->
  <link href="https://plus.google.com/107659040805233606039" rel="publisher" />


  <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/ebloom.82387275f940b3ce25dfd6a28b5f69ef.css")}}">

  <script src="{{asset("frontEnd-assets/assets/assets.ebloom.gr/js/ebloom.header.0472098970c1e1314a72.js")}}"
    type="7f68c7e5cf399bdea990487a-text/javascript"></script>

  <script type="7f68c7e5cf399bdea990487a-text/javascript">
    window.lazySizesConfig = window.lazySizesConfig || {};
    lazySizesConfig.loadMode = 1;
</script>

  <script src="{{asset("frontEnd-assets/assets/ajax/libs/lazysizes/5.1.2/lazysizes.min.js")}}" async defer
    type="7f68c7e5cf399bdea990487a-text/javascript"></script>


  <script type="7f68c7e5cf399bdea990487a-text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '514405861905024',
                    xfbml: true,
                    version: 'v3.2'
                });
            };
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s);
                js.id = id;
                js.src = "../../../connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
  <script type="7f68c7e5cf399bdea990487a-text/javascript">
            function googleSignInStart() {
                gapi.load('auth2', function() {
                    auth2 = gapi.auth2.init({
                        client_id: '885097402843-js6hi8niq0qa6s7e1tcm3rlkua8dlfb4.apps.googleusercontent.com'
                    });
                });
            }
        </script>
  <script src="frontEnd-assets/assets/js/client_platform3cb2.js?onload=googleSignInStart"
    type="7f68c7e5cf399bdea990487a-text/javascript"></script>
  <link
    href="http://fonts.googleapis.com/css?family=Roboto&amp;subset=greek&amp;text=%ce%a3%cf%8d%ce%bd%ce%b4%ce%b5%cf%83%ce%b7%ce%bc%ce%b5Google"
    rel="stylesheet" type='text/css'>

  <!--[if lt IE 9]><script src="/site-assets/js/eBloomfl/vendor/html5shiv.js"></script><![endif]-->

  <script defer="defer" src="{{asset("frontEnd-assets/assets/smartbanner/3.0/smartbanner.min.js")}}"
    type="7f68c7e5cf399bdea990487a-text/javascript"></script>
  <script async id="google-map-script"
    src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&amp;language=el&amp;region=gr&amp;client=gme-deliveryheroholding&amp;channel=eBloom_gr"
    type="7f68c7e5cf399bdea990487a-text/javascript"></script>
  <script type="7f68c7e5cf399bdea990487a-text/javascript">
        app.siteVersion = '2.9.29';
        app.sitePlatform = 'web';
        app.enviroment = 'production';
        app.brand = 'eBloom';
        app.locale = 'el';
        app.currency = 'EUR';
        app.ga_currency = 'EUR';
        app.userLoggedIn = false;
        app.userSid = '6bb82e9349e78b64654632375c318ce4';
        app.pageController = 'menu';
        app.latitude = '';
        app.longitude = '';
        app.area_slug = '';
        app.userCartSid = '6bb82e9349e78b64654632375c318ce4';
        app.apiBaseURL = 'https://api.eBloom.gr/api/v1';
        app.apiURL = 'https://api.eBloom.gr/';
        app.apiLocale = 'el';
        app.googleMapsApiKeyString = '//maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=gr&client=gme-deliveryheroholding&channel=eBloom_gr';
        app.savedAddresses = null;
        app.isByArea = false;
        app.isJokerEnabled = true && !(/(iphone|ipod|ipad).* os 8_/.test(navigator.userAgent.toLowerCase()));
        app.loadMaps = false;
        app.isAppboyEnabled = true;

        app.displaySmartBanner = false;
        app.businessDiscountUrl = '../../foodatwork/index.html';
        app.isFoodAtWorkEnabled = true;
        app.addressBusinessSlug = '';
        app.referrerSlug = '';
        app.apiOfflineMessage = "Προέκυψε πρόβλημα κατά την επικοινωνία με τον διακομιστή";
        app.verticalType      = "food";

        app.brandName = "eBloom";

        
        
        app.deliveryPrefix = 'delivery';
        app.chainPrefix = 'menu';

        app.i18n = {
            countryCode: 'GR',
            locale: 'el',
            currency: {
                symbol: '€',
                unit: 'EUR',
            },
            trans: {
                'generic': {
                    'SEE_MORE': 'Δες περισσότερες',
                    'SEE_LESS': 'Δες λιγότερες',
                    'SHOP_LISTING_TOGGLE_LIST': 'Λίστα',
                    'SHOP_LISTING_TOGGLE_IMAGES': 'Με εικόνα',
                    'SHOP_LISTING_TIP': 'Άλλαξε από εδώ τον τρόπο εμφάνισης των καταστημάτων',
                },
                'menu-search': {
                    'search-placeholder': 'Aναζήτηση',
                    'no-results': 'Δε βρέθηκε αποτέλεσμα για',
                    'add': 'Προσθήκη',
                    'max-item-count': 'Μέγιστη ποσότητα %n τεμάχια',
                    'from': 'Από'
                },
                'order-tracking': {
                    'ORDER_TRACKING_INFO_COMPLETE': 'Στην πόρτα σου σε:',
                    'ORDER_TRACKING_INFO_ESTIMATION': 'Εκτιμώμενος Χρόνος:',
                    'ORDER_TRACKING_RECEIVED_TITLE': 'Λάβαμε την παραγγελία σου!',
                    'ORDER_TRACKING_RECEIVED_SUBTITLE': 'Το κατάστημα θα επιβεβαιώσει την παραγγελία σου.',
                    'ORDER_TRACKING_IN_PROGRESS_TITLE': 'Επεξεργασία Παραγγελίας',
                    'ORDER_TRACKING_IN_PROGRESS_SUBTITLE': 'Το κατάστημα θα ξεκινήσει να ετοιμάζει την παραγγελία σου πολύ σύντομα.',
                    'ORDER_TRACKING_PREPARING_TITLE': 'Προετοιμασία Παραγγελίας',
                    'ORDER_TRACKING_PREPARING_SUBTITLE': "Το κατάστημα ετοιμάζει όλα όσα ζήτησες.",
                    'ORDER_TRACKING_READY_FOR_DELIVERY_TITLE': 'Αποστολή Παραγγελίας',
                    'ORDER_TRACKING_READY_FOR_DELIVERY_SUBTITLE': 'Η παραγγελία σου είναι έτοιμη προς παράδοση.',
                    'ORDER_TRACKING_PICKED_UP_TITLE': 'Η παραγγελία σου έρχεται.',
                    'ORDER_TRACKING_PICKED_UP_SUBTITLE': "Έχει φύγει το παιδί και βρίσκεται καθ'οδόν.",
                    'ORDER_TRACKING_ARRIVING_SOON_TITLE': '3,2,1... Φτάνουμε!',
                    'ORDER_TRACKING_ARRIVING_SOON_SUBTITLE': 'Σε πολύ λίγο θα είμαστε στην πόρτα σου.',
                    'ORDER_TRACKING_DELIVERED_TITLE': 'Η παραγγελία σου έφτασε.',
                    'ORDER_TRACKING_DELIVERED_SUBTITLE': "Σου άρεσε; Μην ξεχάσεις να την αξιολογήσεις!",
                    'ORDER_TRACKING_CANCELED_TITLE': 'Η παραγγελία σου ακυρώθηκε',
                    'ORDER_TRACKING_CANCELED_SUBTITLE': "Το κατάστημα δυστυχώς δεν αποδέχτηκε την παραγγελία σου. Μην ανησυχείς, θα επικοινωνήσουμε άμεσα μαζί σου!",
                    'ORDER_TRACKING_IS_DELAYED_TITLE': 'Η παραγγελία σου θα καθυστερήσει λίγο.',
                    'ORDER_TRACKING_IS_DELAYED_SUBTITLE': "Ο χρόνος παράδοσης έχει ανανεωθεί.",
                    'ORDER_TRACKING_DELIVERED_AT': "Παραδόθηκε στις:",
                    'ORDER_TRACKING_LIVE_PROGRESS': "live εξέλιξη παραγγελίας",
                    'ORDER_TRACKING_DELIVERED_BY': "delivered by"
                },
                'swimlanes': {
                    'URL_PREFIX': "/delivery",
                    'MINIMUM_ORDER': 'Ελάχ.',
                    'SEE_ALL': 'Δες τα όλα'
                },
                loaderMessage: 'Παρακαλώ περιμένετε...'
            }
        };

        app.status = {
            isJokerActive: false,
            shopListing: {
                shopCategorySelectedQuantity: null,
                shopCategorySelected: null,
                shopFilteringSelected: null,
                shopSortingSelected: null,
                shopQuantityShown: null,
                shopQuantityTotal: null,
                shopListMessageShown: null,
            },
            cuisineLanding: {
                selectedCuisine: null,
            }
        };

        app.swimlanes = {
            key: null,
        };

        
        
        
        app.address = {"id":0,"latitude":"0","longitude":"0","city":"","county":"","doorbellName":"","floor":"","phone":"","userId":0,"isDefault":false,"country":"GR","street":"","streetNo":"0","notes":"","zip":"","slug":"","area_slug":"","friendly_name":"","scope":"","isComplete":false,"isByArea":false,"isFoodAtWork":false,"isInNoMapArea":false}    </script>

  <meta name="thumbnail" content="" />


  <script async src="{{asset("frontEnd-assets/assets/js/9411b219fc.js")}}"
    type="7f68c7e5cf399bdea990487a-text/javascript"></script>

  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/popup.css")}}">
  <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/productPopup.css")}}">
  <link rel="stylesheet" href="{{asset("frontEnd-assets/assets/css/orders.css")}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script>
    $(document).on('click', '.categoryList', scrollDiv);
    function scrollDiv() {
      // alert('check it');
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
      }, 500);
      return false;
    }
      // $('a').click(function(){
      //   alert('check it');
      //   $('html, body').animate({
      //       scrollTop: $( $(this).attr('href') ).offset().top
      //   }, 500);
      //   return false;
      // });
// alert('slam');
  </script>

</head>

<body data-spy="scroll" data-target="#shop-profile-menu-list-nav" data-offset="122"
  class="page brand-eBloom page-menu page-shop-open page- page-shop-serving page- time-morning date-19-03   logged-out page-with-cover">

  <script type="7f68c7e5cf399bdea990487a-text/javascript">
	dataLayer = [{
    "siteVersion": "2.9.29",
    "isLoggedIn": 0,
   "userAddress": "",
    "userAddressLat": "0",
    "userAddressLon": "0",
    "userAddressZip": "",
    "userAddressCity": "",
    "userAddressCountry": "GR",
    "userCookiePreference": "not selected",
    "userCookiePrivacyLevel": "required",
    "pageUrlPath": "delivery/menumikel",
    "userId": "",
    "userLoggedIn": false,
    "pageType": "shop_chain_hub",
    "appLang": "el",
    "pageBreadcrumb": "home,shop_chain_hub",
    "shopID": 132624,
    "city": "Πάτρα",
    "area": "Πάτρα",
    "zip": "26221",
    "BasicCuisine": "Καφέδες"
}];
	dataLayer[0].pageEnvironment = ('ontouchstart' in window) ? 'mobile' : 'desktop';
</script>

  <!-- Google Tag Manager -->
  <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P44B2X" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <script type="7f68c7e5cf399bdea990487a-text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P44B2X');</script>
  <!-- End Google Tag Manager -->

  <!-- Firebase -->

  <!-- Firebase -->


  <script type="7f68c7e5cf399bdea990487a-text/javascript">
    var preferredView = window.$.cookie('shop_preferred_view');

    if (preferredView === undefined || ((preferredView === 'image') && !document.body.classList.contains('page-with-cover'))) {
        document.body.classList.add('page-with-cover');
    } else if (preferredView !== 'image' && document.body.classList.contains('page-with-cover')) {
        document.body.classList.remove('page-with-cover');
    }
</script>

  @include('layouts.mobile-menu')

  <button type="button" data-toggle-target="m-side-menu" class="btn btn-link mobile-sidemenu-btn--close">
    <span class="fa-stack fa-lg">
      <i class="fas fa-circle fa-stack-2x fa-inverse"></i>
      <i class="fa fa-times fa-stack-1x"></i>
    </span>
  </button>

  <div id="main-container">
    <div id="smartbanner-container" class="d-none"></div>


    @include('layouts.header')
    <script>
      $(document).ready(function () {
        $('.mobile-sidemenu-btn').click(function (e) {
          e.preventDefault();
          // alert('check');
          $("#mobile-side-menu").addClass("active");
        });

        $('.mobile-sidemenu-btn--close').click(function (e) {
          e.preventDefault();
          // alert('check');
          $("#mobile-side-menu").removeClass("active");
        });
      });
    </script>
    <main>

        <section id="notification" class="notification d-none">
          <div class="container">
            <div class="row">
              <p class="notification-content col-md-12">
              </p>
            </div>
          </div>
        </section>
      
    
        <section>
          <div class="static-page-hero-warper position-absolute w-100 bg-white">
            <div class="col-lg-6 px-0 pl-lg-5 pr-lg-0 ml-auto h-100">
              <div class="static-page-hero bg-grey h-100 d-flex align-items-end"
                style="background-image: url('{{asset("frontEnd-assets/images/back4.jpeg")}}');background-size: 100% 100%;">
              </div>
            </div>
          </div>
          <div class="container d-none d-lg-block">
            <div class="row">
              <div class="col-lg-6">
                <div class="static-page-title-wrapper d-flex flex-column justify-content-center">
                  <div class="static-page-title-inner">
                    <h1 class="display-1 font-weight-bold">
                      {{__('words.Όροι χρήσης')}}
                        {{-- Terms & Conditions --}}
                    </h1>
                    {{-- <p class="font-weight-normal h3 text-muted">Εσύ ρωτάς. Εμείς απαντάμε.</p> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="static-page-content-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-3 d-none d-lg-block">
                <aside class="page-sidebar">
                  <nav class="page-sidebar-nav">
                    <ul class="list-unstyled">
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/about')}}"> {{__('words.Ποιοι είμαστε')}}</a>
                      </li>
                      {{-- <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url('pages/blog')}}">Βlog </a>
                      </li> --}}
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/contact')}}"> {{__('words.Επικοινωνία')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/shop')}}"> {{__('words.Έχεις ανθοπωλείο;')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/faqs')}}"> {{__('words.Συχνες Ερωτησεις')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="https://globaltouch.international/el/home/">Meet Our Developers </a>
                      </li>
                      {{-- <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="#">Τρόποι πληρωμής </a>
                      </li> --}}
                      <li class="rounded bg-white font-weight-bold box-shadow">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/terms')}}"> {{__('words.Όροι χρήσης')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/policy')}}"> {{__('words.Πολιτική προστασίας')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/cookies')}}"> {{__('words.Πολιτική cookies')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/evaluation')}}"> {{__('words.Πολιτική αξιολόγησης')}}</a>
                      </li>
                      <li class="rounded ">
                        <a class="px-8 py-5 d-block" href="{{url(app()->getLocale().'/pages/reward')}}"> {{__('words.Σύστημα επιβράβευσης')}}</a>
                      </li>
                    </ul>
                  </nav>
                </aside>
              </div>
      
              <div class="col-12 col-lg-9">
                <section class="page-content page-text rounded py-11 py-lg-0 px-7 px-lg-0 mb-12 mb-lg-0">
                  <div class="d-block d-lg-none d-flex flex-column justify-content-center text-center">
                    <h1 class="display-1 font-weight-bold">
                      {{__('words.Όροι χρήσης')}}
                    </h1>
                    {{-- <p class="font-weight-normal h3 text-muted">Εσύ ρωτάς. Εμείς απαντάμε.</p> --}}
                  </div>
                  <hr class="d-block d-lg-none my-11">
                    <h3>
                      {{__('terms.Εισαγωγή')}}
                    </h3> 
                    <p>
                      {{__('terms.O ιστότοπος «www.ebloom.gr» είναι μία πλατφόρμα προβολής προϊόντων και διευκόλυνσης συναλλαγών μεταξύ τρίτων συνεργαζόμενων επιχειρήσεων και υποψηφίων καταναλωτών μέσω του Διαδικτύου και μέσω εφαρμογής (στο εξής καλούμενη  η  «εταιρεία» ή «πλατφόρμα» ή «εφαρμογή») που δημιούργησε και λειτουργεί η Ιδιωτική  Κεφαλαιουχική Εταιρεία με την επωνυμία «EBLOOM GREECE IKE» και το διακριτικό τίτλο «ΕBLOOM»,  που εδρεύει στην Ηλιούπολη Αττικής, στην οδό Σαρωνικού αρ. 33 και εκπροσωπείται νόμιμα, με Α.Φ.Μ. 801524121 Δ.Ο.Υ. Ηλιούπολης και αριθμό Γ.Ε.Μ.Η 158479901000, ηλεκτρονική διεύθυνση επικοινωνίας info@ebloom.gr, τηλεφωνική γραμμή εξυπηρέτησης του ηλεκτρονικού καταστήματος: 210 9703733.')}}
                    </p>  
                    <p>
                      {{__('terms.Οι κάτωθι όροι και προϋποθέσεις θα εφαρμόζονται για την χρήση της πλατφόρμας και της εφαρμογής με το εμπορικό σήμα “ebloom” το οποίο βρίσκεται στην ηλεκτρονική διεύθυνση www.ebloom.gr. Κάθε χρήστης που εισέρχεται και συναλλάσσεται ή κάνει χρήση των υπηρεσιών της ηλεκτρονικής πλατφόρμας (στο εξής καλούμενος για συντομία «επισκέπτης» ή/και «χρήστης» ή «πελάτης») θεωρείται ότι συναινεί και αποδέχεται ανεπιφύλακτα τους κατωτέρω όρους που εδώ διατυπώνονται, χωρίς καμία εξαίρεση. Το ίδιο ισχύει και για τις κατά καιρούς ενημερώσεις και τροποποιήσεις τους οι οποίες διέπουν την μεταξύ μας σχέση. Εάν κάποιος χρήστης δεν συμφωνεί με αυτούς τους όρους, τότε οφείλει με ευθύνη του να απόσχει από την επίσκεψη, τη χρήση του ιστότοπου, καθώς επίσης και από κάθε συναλλαγή ή χρήση των υπηρεσιών της πλατφόρμας.')}}
                    </p>

                    <h3>
                        1.	{{__('terms.Γενικοί Όροι χρήσης')}}
                    </h3> 
                        
                    {{__('terms.Είναι απαραίτητο να επισκέπτεστε τακτικά αυτή την Ιστοσελίδα για να ενημερώνεστε για τυχόν αλλαγές στους Όρους και τις Προϋποθέσεις. Η εταιρεία μας διατηρεί το δικαίωμα:')}} <br>
                    <p>
                      {{__('terms.α) Να τροποποιεί ή να αναθεωρεί ελεύθερα τους όρους και τις προϋποθέσεις χρήσης και συναλλαγών από την πλατφόρμα, οποτεδήποτε το κρίνει αναγκαίο, αναλαμβάνει δε την υποχρέωση να ενημερώνει τους καταναλωτές για οποιανδήποτε μεταβολή, μέσα από τις σελίδες της παρούσας πλατφόρμας. Οι συμβάσεις μέσω του ηλεκτρονικού καταστήματος καταρτίζονται στην Ελληνική γλώσσα.')}}
                    </p>
                    <p>
                      {{__('terms.β) Να ανανεώσει ή αναβαθμίσει μέρος ή το σύνολο του περιεχομένου της Ιστοσελίδας.')}}
                    </p>
                    <p>
                      {{__('terms.γ) Να ανανεώσει ή αναβαθμίσει μέρος ή το σύνολο της εξωτερικής εμφάνισης (interface), της δομής ή της σύνθεσης (configuration) της Ιστοσελίδας καθώς και των τεχνικών της προδιαγραφών καθώς επίσης και')}}
                    </p>
                    <p>
                      {{__('terms.δ) Να περιορίζει την πρόσβαση στο σύνολο της Ιστοσελίδας ή σε μέρος αυτής.')}}
                    </p>
                    <p>

                    </p>
                    <p>
                      {{__('terms.Επίσης, η εταιρεία διατηρεί το δικαίωμα οποτεδήποτε, αναιτιολόγητα και χωρίς προηγούμενη ενημέρωση του επισκέπτη της Ιστοσελίδας να ματαιώσει, να αναστείλει οριστικά ή προσωρινά ή να τερματίσει τη λειτουργία της. Η πρόσβαση στην παρούσα Ιστοσελίδα επιτρέπεται υπό τους παρόντες όρους και προϋποθέσεις. Υπογραμμίζεται ότι η εταιρεία επιφυλάσσεται του δικαιώματος να τροποποιεί και εναλλάσσει τα προσφερόμενα προς διάθεση προβαλλόμενα προϊόντα και να παύει την προβολή και προώθηση προϊόντων συγκεκριμένων ή όλων των προμηθευτών χωρίς προηγούμενη ενημέρωση.')}}
                    </p>
                    <p>
                      {{__('terms.Η παρούσα Ιστοσελίδα  περιλαμβάνει συνδέσμους σε άλλες Ιστοσελίδες, τις οποίες δεν ελέγχει η εταιρεία (οι «Συνδεδεμένες Ιστοσελίδες»). Η εταιρεία δεν σχετίζεται με τις Συνδεδεμένες Ιστοσελίδες οι οποίες βρίσκονται εκτός της σφαίρας ελέγχου της. Συνεπώς η εταιρεία δεν εγγυάται την ενημερότητα, την ορθότητα, τη νομιμότητα, την πληρότητα ή ποιότητα του περιεχομένου τους και δεν φέρει ευθύνη για αυτές ή για τυχόν απώλεια ή ζημιά που μπορεί να προκληθεί εξαιτίας ή με αφορμή τη χρήση τους.')}}
                    </p>
                    <h3>
                        2. {{__('terms.Περιγραφή συναλλαγών')}}
                    </h3>
                    <p>
                      {{__('terms.Μέσω της ιστοσελίδας της εταιρείας διατίθενται προς προώθηση, προβολή και πώληση σε εσάς προϊόντα τρίτων προμηθευτών ή έτερων καταστημάτων ή τρίτων επιχειρήσεων με τους οποίους η εταιρεία συνεργάζεται (στο εξής «συνεργαζόμενος τρίτος» ή «συνεργαζόμενη επιχείρηση» ή «συνεργαζόμενος τρίτος προμηθευτής/κατάτημα» ).  Η εταιρεία προβάλει μέσω της ιστοσελίδας της τα προϊόντα των συνεργαζόμενων καταστημάτων και επιχειρήσεων  σύμφωνα με τη λίστα διαθέσιμων προϊόντων που θα παρέχει το συνεργαζόμενο τρίτο κατάστημα/προμηθευτής. Η εταιρεία δεν αναλαμβάνει την παράδοση των προϊόντων που θα αγοραστούν από τον πελάτη, υποχρέωση που αναλαμβάνει με δικά του μέσα delivery το συνεργαζόμενο κατάστημα/προμηθευτή και με τους εκάστοτε όρους αποστολής των συνεργαζόμενων καταστημάτων.Η πληρωμή γίνεται στο ασφαλές περιβάλλον πληρωμών  της ιστοσελίδας Viva Wallet (Viva Υπηρεσίες Πληρωμών ΑΕ), ένα Ίδρυμα ηλεκτρονικού χρήματος αδειοδοτημένο από την Τράπεζα της Ελλάδος.')}}
                    </p>
                   <p>
                    {{__('terms.Η εταιρεία διατηρεί το δικαίωμα να επιλέγει κατά την απόλυτη κρίση της τα προϊόντα που διαθέτει προς πώληση και προβολή στην ιστοσελίδα- πλατφόρμα και να τροποποιεί, ανανεώνει ή/και αποσύρει αυτά οποτεδήποτε, αζημίως και χωρίς προηγούμενη ενημέρωση των χρηστών της ιστοσελίδας. Η εταιρεία δεν φέρει ευθύνη στην περίπτωση που κάποιο από τα προβαλλόμενα προϊόντα δεν διατίθεται εν τέλει στο συνεργαζόμενο τρίτο κατάστημα.')}}
                    </p>
                    <p>
                      {{__('terms.Σε κάθε περίπτωση επισημαίνεται ότι η περιγραφή των προϊόντων και των κατ’ ιδίαν ιδιοτήτων και χαρακτηριστικών που αυτά διαθέτουν γίνεται με βάση τις δηλώσεις των τρίτων προμηθευτών- συνεργαζόμενων καταστημάτων. Επίσης, οι αναρτώμενες τιμές κατ’ είδος προσδιορίζονται αποκλειστικά και μόνο από τους τρίτους προμηθευτές – συνεργαζόμενους.')}}
                    </p>
                    <p>
                      {{__('terms.H ΕΤΑΙΡΕΙΑ δεσμεύεται ως προς την ακρίβεια, την αλήθεια και την πληρότητα των πληροφοριών που παρατίθενται στην πλατφόρμα, σε ότι αφορά την ταυτότητα της ΕΤΑΙΡΕΙΑΣ όσο και τις παρεχόμενες μέσω της ιστοσελίδας και της εφαρμογής της, συναλλαγές. Η εταιρία, στα πλαίσια της καλής πίστης, δεν ευθύνεται και δεν δεσμεύεται από καταχωρήσεις ηλεκτρονικών δεδομένων που έγιναν εκ σφάλματος/παραδρομής κατά την κοινή πείρα και δικαιούται να προβαίνει σε διόρθωση αυτών οποτεδήποτε αντιληφθεί την ύπαρξή τους.')}}
                    </p>

                   <h3> 3. {{__('terms.Περιορισμός ευθύνης')}} </h3>
                   {{__('terms.Η εταιρεία δεν οφείλει και ούτε είναι σε θέση να ελέγξει ούτε ευθύνεται για την αλήθεια ή την ακρίβεια αυτών ούτε και για την καταλληλότητα των προϊόντων για τον σκοπό για τον οποίο προορίζονται. Η ΕΤΑΙΡΕΙΑ στα πλαίσια των συναλλαγών της δεν ευθύνεται και δεν υπέχει υποχρέωση αποζημίωσης για οποιαδήποτε τυχόν βλάβη ή ζημία προκύψει από την ακύρωση παραγγελιών, από τη μη εκτέλεση ή από την καθυστέρηση εκτέλεσης τους, για οποιαδήποτε αιτία. Δεν εγγυάται τη διαθεσιμότητα των προϊόντων που εκτίθενται στην ιστοσελίδα, αλλά ενημερώνει τον κατάλογο των προϊόντων με βάση τα στοιχεία που παρέχει ο συνεργαζόμενος τρίτος προμηθευτής/κατάστημα για την διαθεσιμότητα ή μη. Ο συνεργαζόμενος τρίτος αναλαμβάνει την υποχρέωση να ενημερώσει  τον ενδιαφερόμενο πελάτη σε περίπτωση μη διαθεσιμότητας και αναλαμβάνει σε περίπτωση μεταβολής των στοιχείων αυτών, να ενημερώνει έγκαιρα τους πελάτες περί της μη διαθεσιμότητας οπότε και στην περίπτωση αυτή δεν υπέχει καμία περαιτέρω ευθύνη. Η πλατφόρμα παρέχει το περιεχόμενο (λχ πληροφορίες, ονόματα, φωτογραφίες, απεικονίσεις), τα προϊόντα και τις υπηρεσίες που διατίθενται μέσω του διαδικτυακού τόπου "όπως ακριβώς έχουν". Σε καμία περίπτωση η ΕΤΑΙΡΕΙΑ δεν ευθύνεται αστικώς ή ποινικώς για οποιαδήποτε ζημία (θετική, ειδική ή αποθετική, η οποία ενδεικτικά και όχι περιοριστικά, διαζευκτικά ή/και σωρευτικά συνίσταται σε απώλεια κερδών, δεδομένων, διαφυγόντα κέρδη, χρηματική ικανοποίηση κλπ.) που τυχόν θα υποστεί επισκέπτης της πλατφόρμας ή τρίτος από αιτία που έχει σχέση με τη λειτουργία ή μη ή/και τη χρήση του διαδικτυακού τόπου ή/και σε αδυναμία παροχής υπηρεσιών ή/και προϊόντων ή/και πληροφοριών που διατίθενται από αυτόν ή/και από τυχόν μη επιτρεπόμενες παρεμβάσεις τρίτων σε προϊόντα ή/και υπηρεσίες ή/και πληροφορίες που διατίθενται μέσω αυτού. Σύνδεσμοι εντός της ιστοσελίδας: Οι σύνδεσμοι (links) που τυχόν περιλαμβάνονται ή αναφέρονται στην ιστοσελίδα, τυχόν οδηγούν σε σελίδες του τρίτου συνεργαζόμενου καταστήματος ή σε ιστοσελίδες τρίτων παρόχων, επιχειρήσεων κ.λ.π. δεν βρίσκονται υπό τον έλεγχο της εταιρείας και η εταιρεία δεν φέρει ουδεμία ευθύνη για το περιεχόμενο οποιασδήποτε τέτοιας ιστοσελίδας ή οποιουδήποτε συνδέσμου που περιλαμβάνεται σε μία συσχετιζόμενη ιστοσελίδα. Η εταιρεία δεν ευθύνεται για τις εκπομπές του διαδικτύου ή για την οιασδήποτε μορφής μετάδοση που λαμβάνεται από οποιαδήποτε συνδεδεμένη ιστοσελίδα. Η εταιρεία ενδεχομένως να παρέχει και να αναρτά κατά τη διακριτική της ευχέρεια αυτούς τους συνδέσμους στην ιστοσελίδα της αποκλειστικά και μόνο για τη διευκόλυνση των χρηστών και το γεγονός ότι ενδεχομένως διαλαμβάνονται στην ιστοσελίδα δεν υποδηλώνει ότι η εταιρεία εγκρίνει ή αποδέχεται το περιεχόμενό τους.')}}
                   <h3>
                       4. {{__('terms.Πνευματική Ιδιοκτησία, Λογισμικό, Περιεχόμενο και εμπορικά σήματα')}}

                   </h3>
                   <p>

                   
                   {{__('terms.Η ιστοσελίδα www.ebloom.gr είναι ο επίσημος διαδικτυακός τόπος της Εταιρείας. Τα δικαιώματα πνευματικής ιδιοκτησίας σε όλο το λογισμικό και στο περιεχόμενο, στο οποίο έχετε πρόσβαση στην παρούσα Ιστοσελίδα ή μέσω αυτής, αποτελούν ιδιοκτησία της εταιρείας ή/και των νομίμων κατόχων ή παρόχων άδειας αυτής και προστατεύονται από διεθνείς νόμους και συνθήκες για τα πνευματικά δικαιώματα. Σε καμία περίπτωση δεν θα πρέπει η εμφάνιση και προβολή του περιεχομένου της Ιστοσελίδας να εκληφθεί από εσάς ως μεταβίβασή ή/και εκχώρηση άδειας ή/και δικαιώματος χρήσης του. Μπορείτε να αποθηκεύετε, εκτυπώνετε και εμφανίζετε το διαθέσιμο περιεχόμενο αποκλειστικά για προσωπική χρήση. Απαγορεύεται η δημοσίευση, διαχείριση, διανομή, ολική ή μερική αντιγραφή, μεταφορά, μεταποίηση, αποθήκευση, αναδημοσίευση, τροποποίηση ή αναπαραγωγή με άλλο τρόπο, σε οποιαδήποτε μορφή, οποιουδήποτε μέρους του περιεχομένου ή αντιγράφων του περιεχομένου εμφανίζεται στην παρούσα Ιστοσελίδα. Επιπλέον δεν επιτρέπεται να χρησιμοποιείτε το περιεχόμενο αυτό για την ανάπτυξη ή διευκόλυνση οποιαδήποτε επιχειρηματικής ή εμπορικής δραστηριότητας εκτός αν έχετε λάβει έγγραφη άδεια από την εταιρεία. Δεν επιτρέπεται, επίσης, η τροποποίηση, μετάφραση, ανακατασκευή ή δημιουργία παράγωγων έργων με χρήση οποιουδήποτε λογισμικού ή συνοδευτικής τεκμηρίωσης προσφέρει η εταιρεία ή οι πάροχοι άδειας αυτής. Επιπρόσθετα, δεν διαθέτετε καμία άδεια ή συγκατάθεση χρήσης, με κανένα τρόπο, των εμπορικών σημάτων της εταιρείας ή των σημάτων που ανήκουν στους προμηθευτές/καταστήματα των προϊόντων που διαθέτει προς πώληση η εταιρεία. Φωτογραφική απεικόνιση των προϊόντων μας: Έχουμε καταβάλει κάθε δυνατή προσπάθεια ώστε να διασφαλίσουμε ρεαλιστική και ακριβή φωτογραφική απεικόνιση των προϊόντων που πωλούνται μέσω της Ιστοσελίδας μας. Ωστόσο, λόγω τεχνολογικών περιορισμών, οι φωτογραφίες αυτές ενδέχεται να απέχουν από την πραγματική κατάσταση, μορφή και εικόνα των προϊόντων. Αυτό είναι απολύτως φυσικό, δεδομένων των περιορισμένων τεχνολογικών δυνατοτήτων, ακόμα και με χρήση των τελευταίων τεχνολογικών εξελίξεων στον τομέα της φωτογραφικής απεικόνισης. Λάβετε υπόψη ότι, παρόλο που η εταιρεία έχει προσπαθήσει να εμφανίζει με ακρίβεια τα χρώματα των προϊόντων της, τα πραγματικά χρώματα που βλέπετε εξαρτώνται από τις προδιαγραφές της οθόνης σας και, κατά συνέπεια, ενδέχεται να μην είναι ακριβή. Η εταιρεία δεν εγγυάται την ακρίβεια ή αξιοπιστία οποιωνδήποτε πληροφοριών ή περιεχομένου σχετικά με οποιαδήποτε προϊόντα ή υπηρεσίες, λογισμικό ή διαφημίσεις περιέχονται στην παρούσα Ιστοσελίδα, διανέμονται μέσω αυτής, λαμβάνονται από αυτή καθώς επίσης και για το περιεχόμενο τρίτων στο οποίο παραπέμπεστε δια μέσου υπερσυνδέσμων από την Ιστοσελίδα ή που η Ιστοσελίδα σας παρέχει πρόσβαση. Οι φωτογραφίες των προϊόντων αποτελούν προϊόν πνευματικής ιδιοκτησίας των συνεργαζόμενων τρίτων, οι οποίες έχουν διατεθεί στην πλατφόρμα και δημοσιεύονται νόμιμα στην παρούσα ιστοσελίδα με νόμιμη ρητή και έγγραφη άδεια των συνεργαζόμενων τρίτων και γι’ αυτό το λόγο απαγορεύεται η αναδημοσίευσή τους και η χρήση τους χωρίς προηγούμενη έγγραφη άδεια της συνεργαζόμενης επιχείρησης. Άδεια πρόσβασης στην ιστοσελίδα: Με την παρούσα σας παρέχουμε περιορισμένη άδεια πρόσβασης και προσωπικής χρήσης της παρούσας Ιστοσελίδας, αλλά όχι άδεια λήψης ή τροποποίησης αυτής ή οποιουδήποτε μέρους της, η οποία είναι επιτρεπτή μόνο με τη ρητή γραπτή άδεια της Εταιρείας. Η άδεια πρόσβασης που σας παρέχεται δεν επιτρέπει οποιαδήποτε μεταπώληση ή εμπορική χρήση της παρούσας Ιστοσελίδας ή του περιεχομένου της, οποιαδήποτε συλλογή και χρήση οποιωνδήποτε καταλόγων, περιγραφών, φωτογραφιών ή τιμών προϊόντων, οποιαδήποτε παράγωγη χρήση της παρούσας Ιστοσελίδας ή του περιεχομένου της, οποιαδήποτε λήψη ή αντιγραφή πληροφοριών λογαριασμών προς όφελος άλλου εμπόρου ή οποιαδήποτε χρήση εργαλείων εξόρυξης δεδομένων, robot ή παρόμοιων εργαλείων συλλογής και εξαγωγής δεδομένων. Απαγορεύεται η αναπαραγωγή, δημιουργία αντιγράφων, αντιγραφή, πώληση, μεταπώληση, επίσκεψη ή άλλου είδους εκμετάλλευση της παρούσας Ιστοσελίδας ή μέρους αυτής για οποιοδήποτε εμπορικό σκοπό, χωρίς τη ρητή γραπτή άδειά μας. Έχουμε αποκλειστικά δικαιώματα επί του ονόματος τομέα της εταιρείας μας. Επιπλέον όλες οι εμπορικές επωνυμίες που εμφανίζονται στην ιστοσελίδα μας υπόκεινται δεόντως σε νομική προστασία. Δεν επιτρέπεται να χρησιμοποιείτε πλαίσια ή τεχνικές πλαισίου για να περιβάλετε οποιοδήποτε εμπορικό σήμα, λογότυπο ή άλλη ιδιοκτησιακή πληροφορία (συμπεριλαμβανομένων βίντεο, εικόνων, κειμένου, διάταξης σελίδας ή μορφής) της Ιστοσελίδας της εταιρείας και των συνδεδεμένων εταιρειών της χωρίς τη γραπτή μας συναίνεση. Δεν επιτρέπεται να χρησιμοποιείτε οποιεσδήποτε «μετα-ετικέτες» ή οποιοδήποτε άλλο «κρυφό κείμενο» με βάση επωνυμίες ή εμπορικά σήματα της εταιρείας ή συνδεδεμένων εταιρειών της χωρίς τη ρητή γραπτή μας συγκατάθεση. Σε περίπτωση μη εξουσιοδοτημένης χρήσης, η άδεια που έχει παραχωρήσει η εταιρεία παύει να ισχύει.')}}
                </p>
                    <h3>
                       5. {{__('terms.GDPR- Προσωπικά Δεδομένα - Απόρρητο Συναλλαγών')}}
                    </h3>

                   <p>
                    {{__('terms.Ο Γενικός Κανονισμός για την Προστασία των Προσωπικών Δεδομένων GDPR (General Data Protection Regulation ) αποτελεί το νέο ρυθμιστικό πλαίσιο της Ευρωπαϊκή Ένωσης (ΕΕ) στον εξεταζόμενο τομέα. Αντικείμενο του νόμου είναι η θέσπιση των προϋποθέσεων για την επεξεργασία δεδομένων προσωπικού χαρακτήρα, προς προστασία των δικαιωμάτων και των ελευθεριών των φυσικών προσώπων και ιδίως του δικαιώματος προστασίας προσωπικών δεδομένων. Τα προσωπικά δεδομένα που μας παρέχετε δηλαδή το ονοματεπώνυμο, email, κινητό/σταθερό τηλέφωνο, Διεύθυνση κατοικίας και επάγγελμα, τα επεξεργαζόμαστε μόνο όταν έχουμε νόμιμο λόγο να το κάνουμε. Το ζήτημα της προστασίας των προσωπικών σας δεδομένων αντιμετωπίζεται από την εταιρεία μας ως μέγιστη προτεραιότητα. Παρακαλώ δείτε ΕΔΩ την <b> Πολιτική προστασίας δεδομένων προσωπικού χαρακτήρα  –GDPR compliance.')}}

                       </b>
                      

                   </p>
                   <h3>
                       6. {{__('terms.Περιορισμοί κατά την πρόσβαση και χρήση της Ιστοσελίδας με λογαριασμό χρήστη')}}

                   </h3>
                   <p>
                    {{__('terms.Απαγορεύεται η με οποιονδήποτε τρόπο παρεμπόδιση της λειτουργίας της ιστοσελίδας, καθώς και η αντικατάσταση ή μεταβολή του περιεχομένου της από τρίτους μη εξουσιοδοτημένους. Δεν πρέπει να διαπράττετε ή διευκολύνετε αξιόποινες πράξεις, να μεταδίδετε ή διανέμετε ιούς, δούρειους ίππους, ιούς τύπου worm, λογικές βόμβες και γενικά δεν επιτρέπονται ενέργειες που μπορεί να οδηγήσουν σε μη αποδεκτή ή εκτεταμένη επιβάρυνση της υποδομής ή της λειτουργίας της ιστοσελίδας. Επίσης απαγορεύεται η παράβαση της υποχρέωσης τήρησης του απορρήτου ή η χρήση της ιστοσελίδας με οποιονδήποτε τρόπο προσβλητικό, παράνομο ή άσεμνο. Επιπρόσθετα, δεν πρέπει να καταστρέφετε δεδομένα, να προκαλείτε δυσαρέσκεια σε άλλους χρήστες, να παραβιάζετε τα ιδιοκτησιακά δικαιώματα τρίτων προσώπων, να αποστέλλετε αυτόκλητο διαφημιστικό ή προωθητικό υλικό, κοινώς γνωστό ως «ανεπιθύμητο» (spam) ή να προσπαθείτε να επηρεάσετε την επίδοση ή λειτουργικότητα οποιωνδήποτε χαρακτηριστικών της Ιστοσελίδας ή χαρακτηριστικών στα οποία αποκτήσατε πρόσβαση μέσω της Ιστοσελίδας. Η παραβίαση αυτής της διάταξης συνιστά ποινικό αδίκημα βάσει της ελληνικής νομοθεσίας. Σας γνωρίζουμε ότι η εταιρεία θα γνωστοποιήσει οποιαδήποτε τέτοια παραβίαση που τυχόν υποπέσει στην αντίληψή της στις αρμόδιες αρχές. Επιπλέον, θα γνωστοποιεί στις Αρχές τυχόν στοιχεία που θα της ζητηθούν σύμφωνα με τις προϋποθέσεις του νόμου. Πέραν των ανωτέρω, μπορείτε να δημιουργείτε για τη χρήση της ηλεκτρονικής πλατφόρμας ατομικό λογαριασμό χρήστη που υπόκειται στους περιορισμούς που αναφέρονται στην ενότητα ΟΔΗΓΙΕΣ ΤΗΡΗΣΗΣ ΛΟΓΑΡΙΑΣΜΟΥ ΧΡΗΣΤΗ – ΣΥΜΜΕΤΟΧΗ ΣΤΟ ΣΥΣΤΗΜΑ ΑΞΙΟΛΟΓΗΣΗΣ ΚΑΙ ΠΟΛΙΤΙΚΗ ΕΠΙΒΡΑΒΕΥΣΗΣ. Η εγγραφή σας στην ηλεκτρονική πλατφόρμα και η δημιουργία λογαριασμού χρήστη δίνουν τη δυνατότητα πρόσβασης στο σύστημα αξιολόγησης και επιβράβευσης.  Για να δείτε τη σχετική ενότητα πατήστε ΕΔΩ και ΕΔΩ.')}}
                    @if (app()->getLocale() == 'gr')
                    <a href="{{url(app()->getLocale().'/pages/evaluation')}}">ΕΔΩ</a>
                     και 
                    <a href="{{url(app()->getLocale().'/pages/reward')}}">ΕΔΩ</a>
                    
                    @else
                    <a href="{{url(app()->getLocale().'/pages/evaluation')}}">HERE</a>

                     and
                    <a href="{{url(app()->getLocale().'/pages/reward')}}">HERE</a>
                    
                    
                    @endif
                   .
                   </p>
                   <h3>
                       7. {{__('terms.Ασφάλεια συναλλαγών πληρωμών με κάρτα')}}
                    </h3>
                    <p>
                      {{__("terms.Η εταιρεία συνεργάζεται με την εταιρεία τραπεζικών πληρωμών VIVA PAYMENT SERVICES S.A. για την λειτουργία των πληρωμών με κάρτα (χρεωστική ή πιστωτική). Με την αποδοχή των όρων χρήσης ο πελάτης υποχρεούται στην επίδειξη οποιουδήποτε αποδεικτικού στοιχείου του ζητηθεί κατά την παράδοση της παραγγελίας που αφορά το δικαίωμα χρήσης της πιστωτικής ή χρεωστικής κάρτας του. Το στοιχείο αυτό μπορεί να είναι οποιοδήποτε επίσημο κρατικό έγγραφο πιστοποιεί την ταυτότητα του συναλλασσόμενου (π.χ. η αστυνομική ταυτότητα, το διαβατήριο, η κάρτα που χρησιμοποιήθηκε κ.α.) Με την αποδοχή των όρων χρήσης ο χρήστης αποδέχεται τις διατάξεις που υπόκεινται στο Νόμο 2251/1994 περί Προστασίας Καταναλωτών, όπως αυτός τροποποιήθηκε και ισχύει. Στην περίπτωση ακύρωσης της συναλλαγής από το κατάστημα θα γίνει επαναφόρτιση του τραπεζικού σας λογαριασμού στο χρόνο που ορίζει  η εταιρεία τραπεζικών πληρωμών VIVA PAYMENT SERVICES S.A. Στην περίπτωση που υπάρξει οποιοδήποτε πρόβλημα με την επαναφόρτιση του λογαριασμού σας, παρακαλούμε να επικοινωνήσετε …………………………….. Κατά την πληρωμή σας με κάρτα στην ΕΒLOOM το συνεργαζόμενο κατάστημα/προμηθευτής λαμβάνει την παραγγελία στην οποία αναγράφεται με σαφήνεια ότι 'Η ΠΑΡΑΓΓΕΛΙΑ ΕΧΕΙ ΠΛΗΡΩΘΕΙ ΜΕ ΚΑΡΤΑ' και έχει ενημερωθεί ώστε να μην ζητήσει επ' ουδενί χρήματα από τον πελάτη. Σε αντίθετη περίπτωση παρακαλούμε επικοινωνήστε άμεσα με την ΕΒLOOM.")}}
                    </p>
                    <h3>
                        8. {{__('terms.Όροι και στάδια ολοκλήρωσης της πώλησης')}}

                    </h3>
                    <p>
                        {{__('terms.Πραγματοποιώντας μια παραγγελία, συμφωνείτε με την εφαρμογή των παρόντων όρων και προϋποθέσεων. Υπογραμμίζεται ρητώς ότι η παρούσα ιστοσελίδα δεν αποτελεί πρόταση σύναψης σύμβασης προς τον καταναλωτή αλλά πρόσκληση προς υποβολή πρότασης από τον τελευταίο. Τα στάδια της διαδικασίας από την υποβολή της παραγγελίας από τον πελάτη μέχρι την σύναψη της σύμβασης αγοράς μεταξύ του πελάτη και της εταιρείας είναι τα ακόλουθα: Με την ολοκλήρωση του αιτήματος παραγγελίας σας εμφανίζεται η συνολική συγκεντρωτική παραγγελία σας που περιλαμβάνει όλα τα προϊόντα που έχετε επιλέξει. Εφόσον προχωρήσετε στο στάδιο ολοκλήρωσης αγοράς, καλείστε να επιλέξετε το είδος του παραστατικού που επιθυμείτε να εκδοθεί (απόδειξη ή τιμολόγιο), τον χρόνο αποστολής και παράδοσης καθώς και τον τρόπο πληρωμής όπως ειδικότερα αναλύεται κατωτέρω. Εφόσον επιθυμείτε τα προϊόντα αυτά συνεχίζετε πατώντας το κουμπί «ολοκλήρωση Παραγγελίας». Με τον τρόπο αυτό υποβάλλετε πρόταση προς το τρίτο συνεργαζόμενο κατάστημα/προμηθευτή για την σύναψη σύμβασης αγοράς των προϊόντων που έχετε επιλέξει. Εφόσον επιβεβαιώσετε την παραγγελία συνδέεστε με τον τρίτο πάροχο υπηρεσιών πληρωμών προκειμένου να ολοκληρωθεί η δέσμευση του συμφωνηθέντος τιμήματος υπό τους όρους του που ακολουθούν παρακάτω. Η Εταιρεία μας για τη μεγαλύτερη δυνατή διασφάλιση των συναλλαγών δύναται (αλλά δεν υποχρεούται) να διεξάγει έλεγχο δια μέσου των συνεργαζόμενων με αυτή παρόχων υπηρεσιών πληρωμών ως προς την ορθότητα των στοιχείων πληρωμής που μας αποστέλλετε (όταν πρόκειται για πληρωμή με πιστωτική κάρτα) κατά το στάδιο της ολοκλήρωσης της παραγγελίας σας και της σύνδεσης με τον τρίτο πάροχο υπηρεσιών πληρωμών δύναται να απορρίψει την παραγγελία σας εφόσον διαπιστωθεί ή υφίσταται το ενδεχόμενο να υπάρχει οποιοδήποτε πρόβλημα σε σχέση με τα στοιχεία αυτά. Με την επιτυχή ολοκλήρωση της διαδικασίας της πληρωμής λαμβάνετε αυτοματοποιημένο μήνυμα επιβεβαίωσης λήψης της παραγγελίας, το οποίο σας αποστέλλετε στη διεύθυνση ηλεκτρονικού ταχυδρομείου (e-mail) που μας έχετε δηλώσει. Η παραγγελία σας παραλαμβάνεται από το τρίτο συνεργαζόμενο κατάστημα/προμηθευτή και μπαίνει στο στάδιο της επεξεργασίας . Σε περίπτωση μη διαθεσιμότητας του παραγγελθέντος προϊόντος υπάρχουν οι εξής δυνατότητες: α) Το τρίτο συνεργαζόμενο κατάστημα/προμηθευτής διατηρεί το δικαίωμα να σας ενημερώνει για τη μη διαθεσιμότητα του προϊόντος και θέτει υπόψη σας πιθανό εναλλακτικό διαθέσιμο προϊόν και κατόπιν, σε συνεννόηση μαζί σας είτε εκτελείται η τροποποιηθείσα παραγγελία είτε κατόπιν δικής σας εντολής μπορεί να ακυρωθεί από το συγκεκριμένο προμηθευτή . β)  Στην περίπτωση ακύρωσης από τον συγκεκριμένο προμηθευτή, ο πελάτης θα λαμβάνει αυτοματοποιημένο μήνυμα ηλεκτρονικού ταχυδρομείου που θα τον ενημερώνει σχετικά με την δυνατότητα να διεκπεραιώσει η ΕΒLOOM την παραγγελία σας μέσω άλλου ανθοπωλείου, κατόπιν τηλεφωνικής έγκρισης. Στη συνέχεια, όταν θα περάσει η παραγγελία σας στο στάδιο της διεκπεραίωσης θα σας αποσταλεί εκ νέου μήνυμα ηλεκτρονικού ταχυδρομείου (e-mail). Προς τον σκοπό αυτό παρέχετε δια της αποδοχής των παρόντων όρων τη συγκατάθεσή σας για την επεξεργασία των προσωπικών σας δεδομένων (διεύθυνση ηλεκτρονικού ταχυδρομείου και αριθμό κινητού τηλεφώνου) προκειμένου να λάβετε ενημέρωση για την εξέλιξη της παραγγελίας. Για να πραγματοποιήσετε μια συναλλαγή στην ιστοσελίδα πρέπει να είστε άνω των 18 ετών. Οι επισκέπτες που δεν έχουν συμπληρώσει το 18ο έτος της ηλικίας τους δεν επιτρέπεται να ανταλλάσσουν με εμάς δεδομένα και πρέπει να απέχουν από οποιαδήποτε ενέργεια στην ιστοσελίδα μας. Όταν πραγματοποιείτε μια παραγγελία, δεσμεύεστε ότι όλα τα στοιχεία που μας παρέχετε είναι αληθή και ακριβή, ότι είστε εξουσιοδοτημένος χρήστης της πιστωτικής ή χρεωστικής κάρτας που χρησιμοποιήσατε για να πραγματοποιήσετε την παραγγελία σας και ότι υπάρχει επαρκές υπόλοιπο για την κάλυψη του τιμήματος αγοράς των προϊόντων και των εξόδων μεταφοράς. Σε κάθε περίπτωση η Εταιρεία διατηρεί το δικαίωμα να προβεί στους ελέγχους που αναφέρονται στο ανωτέρω. Η εταιρεία δεν ευθύνεται σε περίπτωση που το προϊόν δεν παραληφθεί από τον πελάτη κατά την ημέρα παράδοσής του από δική του υπαιτιότητα (είτε από το κατάστημα είτε από την εταιρεία ταχυμεταφορών) ή σε περιπτώσεις μη έγκαιρης παράδοσης λόγω συνδρομής λόγων ανωτέρας βίας. Μετάθεση κινδύνου Σε περίπτωση που προκύψει οποιοδήποτε εκκρεμότητα ή πρόβλημα κατά τη διεκπεραίωση της παραγγελίας σας, τότε θα σας αποσταλεί αντίστοιχο μήνυμα ηλεκτρονικού ταχυδρομείου (e-mail) ή/και θα επικοινωνήσουμε μαζί σας στα τηλέφωνα που μας έχετε δώσει κατά την εγγραφή ή την καταχώριση της παραγγελίας στην ιστοσελίδα μας. Η παραγγελία σας είναι δυνατόν να τροποποιηθεί από την αποστολή της και μέχρι την επιβεβαίωση αυτής κατά τα προαναφερόμενα με την αποστολή ενός email ή και με τηλεφωνική κλήση στην ηλεκτρονική διεύθυνση INFO@EBLOOM.GR . Μετά την διεκπεραίωση της παραγγελίας σας δεν είναι εφικτή τροποποίηση- διόρθωση της παραγγελίας σας, αλλά μόνον η άσκηση του δικαιώματος υπαναχώρησης που προβλέπει ο νόμος ή η επιστροφή του προϊόντος λόγω τυχόν ελαττώματος.')}}

                    </p>
                   <h3>
                       9. Τιμές
                    </h3>
                    <p>
                      {{__('terms.Οι τιμές των προϊόντων που αναγράφονται στο ηλεκτρονικό κατάστημα συμπεριλαμβάνουν ΦΠΑ, όπως σχετικώς αναγράφεται. Επιπλέον, οι αναγραφόμενες τιμές δεν συμπεριλαμβάνουν τις πρόσθετες απαιτούμενες επιβαρύνσεις αποστολής, οι οποίες υπολογίζονται αναλόγως του επιλεχθέντος τρόπου αποστολής και αναγράφονται κατά την διαδικασία υποβολής της παραγγελίας, πριν την επιβεβαίωση της και πριν τη δέσμευση του καταναλωτή. Η εταιρεία δεν διαμορφώνει τις αναγραφόμενες τιμές, οι οποίες γνωστοποιούνται και αναφέρονται στην ιστοσελίδα κατόπιν υποδείξεως και ενημέρωσης από το συνεργαζόμενο κατάστημα/προμηθευτή. Ο τελευταίος όμως δεσμεύεται να γνωστοποιεί έγκαιρα τυχόν αλλαγές  ή/και αποσύρει τις προσφορές οποτεδήποτε χωρίς προηγούμενη ενημέρωση των χρηστών της ιστοσελίδας, οι οποίοι θα ενημερώνονται για την ισχύουσα κάθε φορά τιμή από την σχετική ανάρτησή της στην ιστοσελίδα. Παρόλο που καταβάλλουμε τη δέουσα επιμέλεια να διασφαλίσουμε ότι όλες οι λεπτομέρειες, οι περιγραφές και οι τιμές που εμφανίζονται στην παρούσα Ιστοσελίδα είναι ακριβείς, ενδέχεται να προκύψουν σφάλματα για τα οποία η εταιρεία δεν φέρει ευθύνη όπως προαναφέρθηκε.')}}
                    </p>
                    <h3>
                        10. {{__('terms.Διευθετήσεις παράδοσης')}}

                    </h3>
                    <p>
                      {{__('terms.Η εταιρεία μας δεν έχει καμία απολύτως δυνατότητα παράδοσης της παραγγελίας. Όλες οι παραδόσεις εκτελούνται από το συνεργαζόμενο κατάστημα/προμηθευτή εντός του χρονικού διαστήματος που έχει ορισθεί κατά τη διαδικασία υποβολής της παραγγελίας και πάντα σύμφωνα με τους όρους αποστολής του συνεργαζόμενου καταστήματος. Η εταιρεία ουδεμία ευθύνη φέρει στην περίπτωση μη εμπρόθεσμης αποστολής του προϊόντος εντός του χρονικού διαστήματος που ορίστηκε από το συνεργαζόμενο κατάστημα . Η Εταιρεία διατηρεί το δικαίωμα να αρνηθεί την εκπλήρωση/εκτέλεση οποιαδήποτε παραγγελίας σε οποιοδήποτε μέλος ή επισκέπτη της κατά την κρίση της και για οποιονδήποτε λόγο. Το ίδιο ισχύει και στην περίπτωση που οποιοδήποτε μέλος ή επισκέπτης έχει προβεί σε οποιαδήποτε τυχόν παράνομη πράξη, παραβίαση των όρων χρήσης της ιστοσελίδας, παραβίαση της συναφθείσας αγοραπωλησίας (όπως ενδεικτικά μη παραλαβή παραγγελίας από το κατάστημα, αναιτιολόγητη άρνηση παραλαβής του προϊόντος από τον ταχυμεταφορέα, άρνηση πληρωμής κλπ). Ιδίως στην τελευταία αυτή περίπτωση ενδέχεται να ισχύσουν ειδικοί όροι για την εκτέλεση της παραγγελίας σας όπως ενδεικτικά η υποχρέωση προπληρωμής του προϊόντος με πιστωτική κάρτα ή κατάθεση σε λογαριασμό, ενώ δεν θα είναι πλέον εφικτή η πληρωμή με αντικαταβολή.')}}

                    </p>
                  <h3>
                      11.  {{__('terms.Διευθετήσεις πληρωμών')}}
                    </h3>
                    <p>
                        
                      {{__('terms.Ο τρόπος πληρωμής ορίζεται μέσω πιστωτικής ή χρεωστικής κάρτας. Στην περίπτωση αυτή  σας γνωρίζουμε ότι για τεχνικούς λόγους που σχετίζονται με τις υπηρεσίες των παρόχων υπηρεσιών πληρωμών, το ποσόν δεσμεύεται προσωρινά με την υποβολή εκ μέρους σας της παραγγελίας και αποδεσμεύεται με την επιβεβαίωση της παραγγελίας σύμφωνα με τα ανωτέρω. Με το τρόπο πληρωμής την πιστωτική κάρτα η διαδικασία θα πραγματοποιείται και θα ολοκληρώνεται δια μέσου έμπιστου συνεργάτη μας, τραπεζικού ιδρύματος που παρέχει κατά δήλωσή του όλα τα εχέγγυα ασφαλείας των ηλεκτρονικών συναλλαγών. Η συλλογή και επεξεργασία και των στοιχείων πληρωμής που μας αποστέλλετε λαμβάνονται μόνον από τους με τους συνεργαζόμενους χρηματοπιστωτικούς οργανισμούς οι οποίοι είναι αποκλειστικά υπεύθυνοι για την επεξεργασία τους για την ολοκλήρωση της πληρωμής.')}}
                    </p>
                    <h3>
                        12. {{__('terms.Υπαναχώρηση  - Πολιτική ακυρώσεων')}}
                    </h3>
                    <p>
                      {{__('terms.Σύμφωνα με το νόμο το δικαίωμα υπαναχώρησης δεν ισχύει στην προμήθεια αγαθών που κατασκευάζονται σύμφωνα με τις προδιαγραφές του καταναλωτή ή σαφώς εξατομικευμένων. Κατ’ εξαίρεση, στην περίπτωση που η παραγγελία έχει προσδιορισθεί σε μεταγενέστερο χρόνο δύναται να υπαναχωρήσει μέχρι ένα 24ωρο πριν την καθορισμένη ώρα παράδοσης.')}}

                    </p>
                   <h3>
                       13. {{__('terms.Αποποίηση ευθύνης')}}
                    </h3>
                    <p>
                        {{__('terms.Σας γνωρίζουμε ότι το σύνολο του περιεχομένου της Ιστοσελίδας παρέχεται «ως έχει» χωρίς προϋποθέσεις ή άλλες εγγυήσεις για την ακρίβειά του. Εκτός αν αναφέρεται ρητώς το αντίθετο, στο μέγιστο βαθμό που το επιτρέπει ο νόμος, η εταιρεία αποκλείει ρητά δια της παρούσας οποιεσδήποτε προϋποθέσεις, εγγυήσεις και άλλους όρους οι οποίοι ενδεχομένως με άλλο τρόπο συνάγονται από την ισχύουσα νομοθεσία και δεν θα είναι υπεύθυνοι για οποιαδήποτε ζημιά, συμπεριλαμβανομένων, αλλά χωρίς περιορισμό, άμεσων, έμμεσων, ειδικών, επακόλουθων, τιμωρούμενων ή τυχαίων βλαβών, ή ζημιών για απώλεια χρήσης, κερδών, δεδομένων ή άλλων περιουσιακών στοιχείων, ζημιάς στη φήμη ή την υπόληψη, ή για το κόστος παροχής υποκατάστατων προϊόντων και υπηρεσιών, τα οποία προκύπτουν από ή σχετίζονται με τη χρήση, αδυναμία χρήσης, λειτουργία ή αστοχίες της παρούσας Ιστοσελίδας και οποιουδήποτε υλικού αναρτάται εκεί, ανεξάρτητα από το αν αυτές οι ζημιές ήταν δυνατό να προβλεφθούν ή προκύπτουν στο πλαίσιο της σύμβασης, της διενέργειας αγοραπωλησίας από την ιστοσελίδα μας, από τα προϊόντα της ιστοσελίδας μας ή εξ αδικοπραξίας, με βάση την ισχύουσα νομοθεσία ή με άλλο τρόπο. Επίσης δεν ευθύνεται σε περίπτωση που δικαιούστε την επιστροφή μέρους ή του συνόλου του τιμήματος για τυχόν καθυστέρηση των συνεργαζόμενων παρόχων υπηρεσιών πληρωμών για την εκτέλεση της σχετικής εντολής που η εταιρεία έχει δώσει εμπροθέσμως. Δεν φέρουμε ευθύνη για τυχόν απώλεια ή ζημιά που μπορεί να προκληθεί από επίθεση που αφορά άρνηση υπηρεσίας, ιούς ή άλλο τεχνολογικά επιβλαβές υλικό που μπορεί να μολύνει το υλικό σας, το λογισμικό σας, τα δεδομένα σας ή άλλο ιδιοκτησιακό υλικό λόγω της χρήσης της παρούσας Ιστοσελίδας ή της λήψης οποιουδήποτε υλικού έχει αναρτηθεί στην παρούσα ή σε οποιαδήποτε Ιστοσελίδα συνδεδεμένη με αυτή. Η εταιρεία και οι συνεργάτες της καταβάλλουν κάθε δυνατή προσπάθεια, στο πλαίσιο του τεχνολογικού ελέγχου που πραγματοποιούν ανά τακτά χρονικά διαστήματα, ώστε οι υπηρεσίες, το περιεχόμενο και οι συναλλαγές να πραγματοποιούνται απρόσκοπτα και χωρίς διακοπή και να διατηρείται το υψηλό επίπεδο ασφαλείας που διαθέτει. Δεν ευθύνεται, όμως, στην περίπτωση που για οιονδήποτε λόγο, συμπεριλαμβανομένης και της περίπτωσης αμέλειας, διακοπεί η λειτουργία της ιστοσελίδας της εταιρείας ή καθίσταται δυσχερής ή/και αδύνατη η πρόσβαση σε αυτή ή/αν, παρά τα τηρούμενα μέτρα ασφαλείας, εντοπιστούν «ιοί» ή άλλο επιβλαβές λογισμικό και μεταδοθούν στα τερματικά των χρηστών/επισκεπτών, ή αν τρίτα μη εξουσιοδοτημένα πρόσωπα παρέμβουν καθ’ οιονδήποτε τρόπο στο περιεχόμενο και στην λειτουργία του site καθιστώντας δυσχερή την χρήση του ή προκαλώντας προβλήματα στην ορθή λειτουργία αυτού ή υποκλέπτοντας στοιχεία που αφορούν προσωπικά δεδομένα των χρηστών. Επίσης δεν ευθυνόμαστε σε περίπτωση διακοπής πρόσβασης στην ιστοσελίδα μας για λόγους που εκφεύγουν της σφαίρας επιρροής μας, καθώς και για λόγους που οφείλονται σε τεχνική ή άλλη αδυναμία του δικτύου ή σε λόγους ανωτέρας βίας ή σε τυχερά γεγονότα.')}}
                    </p>
                        <h3>
                            14.  {{__('terms.Σύνδεση στην παρούσα Ιστοσελίδα')}}

                        </h3>
                    <p>
                      {{__('terms.Απαραίτητη προϋπόθεση για να συνδεθείτε στην ιστοσελίδα μας είναι να ενεργείτε με δίκαιο και νόμιμο τρόπο, χωρίς να βλάπτετε ή να εκμεταλλεύεστε τη φήμη μας. Επιπλέον δεν επιτρέπεται να δημιουργείτε μια σύνδεση που να υπονοεί οποιουδήποτε είδους σχέση με εμάς, ή έγκριση ή υποστήριξη από εμάς όταν δεν υπάρχει. Δεν πρέπει να δημιουργείτε σύνδεση με οποιαδήποτε Ιστοσελίδα δεν είναι υπό την ιδιοκτησία σας. Η παρούσα Ιστοσελίδα δεν επιτρέπεται να τοποθετείται σε πλαίσιο σε οποιαδήποτε άλλη ιστοσελίδα ούτε μπορείτε να δημιουργείτε σύνδεσμο προς οποιοδήποτε μέρος της παρούσας Ιστοσελίδας πλην της αρχικής σελίδας. Επιφυλασσόμαστε του δικαιώματος να αφαιρούμε την άδεια σύνδεσης χωρίς προηγούμενη ειδοποίηση.')}}

                    </p>
                    <h3>
                        15. {{__('terms.Αποποίηση ευθύνης σε σχέση με την ιδιοκτησία εμπορικών σημάτων, εικόνων ατόμων και πνευματικών δικαιωμάτων τρίτων μερών')}}

                    </h3>
                    <p>
                      {{__('terms.Οποιαδήποτε εμπορικά σήματα/επωνυμίες εμφανίζονται στην παρούσα Ιστοσελίδα τελούν υπό την ιδιοκτησία των αντίστοιχων κατόχων των εμπορικών σημάτων. Οποιαδήποτε αναφορά σε εμπορικό σήμα ή επωνυμία χρησιμοποιείται αποκλειστικά για να περιγράψει ή να προσδιορίσει τα προϊόντα και τις υπηρεσίες και δεν βεβαιώνεται με κανένα τρόπο ότι τα συγκεκριμένα προϊόντα και οι υπηρεσίες υποστηρίζονται από ή συνδέονται με την εταιρεία. Δεν επιτρέπεται να εξάγετε ή/και να επαναχρησιμοποιείτε μέρη του περιεχομένου της Ιστοσελίδας χωρίς τη γραπτή συγκατάθεση της εταιρείας. Συγκεκριμένα, δεν επιτρέπεται να χρησιμοποιείτε οποιαδήποτε εργαλεία εξόρυξης δεδομένων, robot ή παρόμοια εργαλεία συλλογής και εξαγωγής δεδομένων για να εξάγετε οποιοδήποτε περιεχόμενο (είτε μία είτε πολλές φορές) ούτε να επαναχρησιμοποιείτε οποιαδήποτε ουσιώδη μέρη της παρούσας Ιστοσελίδας, χωρίς τη ρητή γραπτή συγκατάθεση της εταιρείας.')}}

                    </p>

                    <h3>
                        16. {{__('terms.Τροποποίηση')}}
                    </h3>
                    <p>
                      {{__('terms.Η εταιρεία έχει το δικαίωμα, κατά την απόλυτη διακριτική της ευχέρεια, οποιαδήποτε στιγμή και χωρίς ειδοποίηση, να τροποποιεί, αφαιρεί ή αλλάζει οποιαδήποτε σελίδα της παρούσας Ιστοσελίδας.')}}
                    </p>
                    <h3>
                        17. {{__('terms.Εφαρμοστέο δίκαιο και δικαιοδοσία')}}
                    </h3>
                    <p>
                      {{__('terms.Οι παρόντες όροι διέπονται από και ερμηνεύονται σύμφωνα με τους νόμους της Ελλάδας και της Ευρωπαϊκής Ένωσης (ΕΕ). Συμφωνείτε, όπως και εμείς, ότι υπάγεστε στην αποκλειστική δικαιοδοσία των δικαστηρίων της Αθήνας στην Ελλάδα, Ευρώπη.')}}
                    </p>
                    <h3>
                        18. {{__('terms.Οι ανωτέρω Όροι και Προϋποθέσεις δεσμεύουν συνολικά τα μέρη (την εταιρεία και τους χρήστες) και αποτελούν συνολικά ολόκληρη τη σύμβαση των μερών και υπερισχύουν οποιωνδήποτε και όλων των προηγούμενων και τρεχουσών συμβάσεων ανάμεσα σε εσάς και την εταιρεία.')}}
                    </h3>
                    <p>
                      {{__("terms.Σε περίπτωση που κάποιος όρος της σύμβασης κριθεί ως καταχρηστικός ή ακυρωθεί τούτο δεν συμπαρασύρει και τους λοιπούς όρους της σύμβασης που εξακολουθούν να ισχύουν και να δεσμεύουν τα μέρη. Τυχόν καθυστέρηση άσκησης από τα μέρη μέρους ή του συνόλου των δικαιωμάτων που απορρέουν από τους παρόντες όρους δεν επιφέρει αποδυνάμωση ή παραίτηση από το εν λόγω δικαίωμα το οποίο δύναται να ασκηθεί οποτεδήποτε σε μεταγενέστερο στάδιο και καθ' εύλογη κρίση του δικαιούχου.")}}
                    </p>
                   <h3>
                       19. {{__('terms.Επίλυση Διαφορών')}}
                    </h3> 
                    <p>
                      {{__('terms.Σας ενημερώνουμε ότι σε περίπτωση που προκύψει οποιαδήποτε διαφορά από τη μεταξύ μας συναλλαγή για την επίλυση της οποίας, θα μας έχετε αποστείλει σχετικό έγγραφο αίτημα αλλά δεν καταφέρουμε να καταλήξουμε σε κοινή μεταξύ μας συμφωνία, έχετε δυνατότητα να απευθυνθείτε στην πλατφόρμα Ηλεκτρονικής Επίλυσης Διαφορών μέσω διαδικτύου, στη διεύθυνση webgate.ec.europa.eu/odr/ η οποία συνδέεται απευθείας με την αρμόδια ανεξάρτητη Αρχή «Συνήγορος του Καταναλωτή» (//www.synigoroskatanaloti.gr). Στην πλατφόρμα αυτή μπορείτε να υποβάλλετε αίτημα για την επίλυση της διαφοράς οπότε θα μπορεί να κληθεί ακολούθως η εταιρεία μας από την αρμόδια Αρχή στην ηλεκτρονική διεύθυνση ______________________. Επίσης θέτουμε υπόψιν σας ότι η Εταιρεία μας αναγνωρίζει στα πλαίσια της καλής πίστης το συμβουλευτικό χαρακτήρα των αποφάσεων της Αρχής που θα επιληφθεί και δεν έχει δεσμευθεί για την εκτελεστότητα των αποφάσεων αυτών. Σε κάθε περίπτωση μη συμβιβαστικής επίλυσης της διαφοράς μέσω της πλατφόρμας ΗΕΔ, αρμόδια είναι τα πολιτικά δικαστήρια.')}}
                    </p>   

                                       

                                        


                         

                
                
                </section>
              </div>
            </div>
          </div>
      
        </section>
    </main>
    @include('layouts.footer')

  </div>

  <div id="ef-loader" style="display:none;">
    <div class="ef-loader-inner">
      <div class="spinner"></div>
      <div class="spinner-msg"></div>
    </div>
  </div>
  <div class="dynamic-notification" data-placement="popup" data-quantity="2" data-order="3"></div>
  <div class="re-mp"></div>
  <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"></div>
    </div>
  </div>

  <div id="footer-scripts">
    <script src="{{asset("frontEnd-assets/assets/assets.ebloom.gr/js/ebloom.footer.ea8f79f56d2a02646c11.js")}}"
      type="7f68c7e5cf399bdea990487a-text/javascript"></script>


    <script
      type="application/ld+json">{"@context":"https://schema.org/","@type":"Organization","address":{"@type":"PostalAddress","addressLocality":"Heraklion, Greece","postalCode":"14122","streetAddress":"Ηρακλείου 409"},"email":"info@eBloom.gr","logo":"https://www.eBloom.gr/site-assets/img/logos/schema/ebloom.png","name":"eBloom","alternateName":"eBloom Delivery","brand":"eBloom","telephone":"( 00 30  ) 211 311 0700","url":"https://www.eBloom.gr","sameAs":["https://www.facebook.com/ebloom.gr","https://twitter.com/eBloomgr","https://www.youtube.com/user/eBloomgr","https://www.instagram.com/eBloomgr","https://www.linkedin.com/company/eBloom-gr"]}</script>

  </div>

  <script
    type="7f68c7e5cf399bdea990487a-text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","licenseKey":"89fe45fbe0","applicationID":"303025632","transactionName":"ZgYBMEIDWBdWBxYIDV9MIgdEC1kKGCkHDxceEA8RVw==","queueTime":0,"applicationTime":144,"atts":"SkECRgoZSxk=","errorBeacon":"bam-cell.nr-data.net","agent":""}</script>
  <script src="{{asset("frontEnd-assets/assets/scripts/7089c43e/cloudflare-static/rocket-loader.min.js")}}"
    data-cf-settings="7f68c7e5cf399bdea990487a-|49" defer=""></script>
</body>

</html>