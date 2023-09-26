!function(r){"function"==typeof define&&define.amd?define(["jquery"],r):"object"==typeof module&&module.exports?module.exports=function(e,t){return void 0===t&&(t="undefined"!=typeof window?require("jquery"):require("jquery")(e)),r(t),t}:r(jQuery)}(function(O){"use strict";var d=/\r?\n/g,v={};v.fileapi=void 0!==O('<input type="file">').get(0).files,v.formdata=void 0!==window.FormData;var X=!!O.fn.prop;function o(e){var t=e.data;e.isDefaultPrevented()||(e.preventDefault(),O(e.target).closest("form").ajaxSubmit(t))}function i(e){var t=e.target,r=O(t);if(!r.is("[type=submit],[type=image]")){var a=r.closest("[type=submit]");if(0===a.length)return;t=a[0]}var n=t.form;"image"===(n.clk=t).type&&(void 0!==e.offsetX?(n.clk_x=e.offsetX,n.clk_y=e.offsetY):"function"==typeof O.fn.offset?(r=r.offset(),n.clk_x=e.pageX-r.left,n.clk_y=e.pageY-r.top):(n.clk_x=e.pageX-t.offsetLeft,n.clk_y=e.pageY-t.offsetTop)),setTimeout(function(){n.clk=n.clk_x=n.clk_y=null},100)}function C(){var e;O.fn.ajaxSubmit.debug&&(e="[jquery.form] "+Array.prototype.join.call(arguments,""),window.console&&window.console.log?window.console.log(e):window.opera&&window.opera.postError&&window.opera.postError(e))}O.fn.attr2=function(){if(!X)return this.attr.apply(this,arguments);var e=this.prop.apply(this,arguments);return e&&e.jquery||"string"==typeof e?e:this.attr.apply(this,arguments)},O.fn.ajaxSubmit=function(F,e,t,r){if(!this.length)return C("ajaxSubmit: skipping submit process - no element selected"),this;var L,E=this;"function"==typeof F?F={success:F}:"string"==typeof F||!1===F&&0<arguments.length?(F={url:F,data:e,dataType:t},"function"==typeof r&&(F.success=r)):void 0===F&&(F={}),L=F.method||F.type||this.attr2("method"),r=(r=(r="string"==typeof(t=F.url||this.attr2("action"))?O.trim(t):"")||window.location.href||"")&&(r.match(/^([^#]+)/)||[])[1],F=O.extend(!0,{url:r,success:O.ajaxSettings.success,type:L||O.ajaxSettings.type,iframeSrc:/^https/i.test(window.location.href||"")?"javascript:false":"about:blank"},F);t={};if(this.trigger("form-pre-serialize",[this,F,t]),t.veto)return C("ajaxSubmit: submit vetoed via form-pre-serialize trigger"),this;if(F.beforeSerialize&&!1===F.beforeSerialize(this,F))return C("ajaxSubmit: submit aborted via beforeSerialize callback"),this;r=F.traditional;void 0===r&&(r=O.ajaxSettings.traditional);var M=[],a=this.formToArray(F.semantic,M,F.filtering);if(F.data&&(n=O.isFunction(F.data)?F.data(a):F.data,F.extraData=n,c=O.param(n,r)),F.beforeSubmit&&!1===F.beforeSubmit(a,this,F))return C("ajaxSubmit: submit aborted via beforeSubmit callback"),this;if(this.trigger("form-submit-validate",[a,this,F,t]),t.veto)return C("ajaxSubmit: submit vetoed via form-submit-validate trigger"),this;var n=O.param(a,r);c&&(n=n?n+"&"+c:c),"GET"===F.type.toUpperCase()?(F.url+=(0<=F.url.indexOf("?")?"&":"?")+n,F.data=null):F.data=n;var o,i,s,u=[];F.resetForm&&u.push(function(){E.resetForm()}),F.clearForm&&u.push(function(){E.clearForm(F.includeHidden)}),!F.dataType&&F.target?(o=F.success||function(){},u.push(function(e,t,r){var a=arguments,n=F.replaceTarget?"replaceWith":"html";O(F.target)[n](e).each(function(){o.apply(this,a)})})):F.success&&(O.isArray(F.success)?O.merge(u,F.success):u.push(F.success)),F.success=function(e,t,r){for(var a=F.context||this,n=0,o=u.length;n<o;n++)u[n].apply(a,[e,t,r||E,E])},F.error&&(i=F.error,F.error=function(e,t,r){var a=F.context||this;i.apply(a,[e,t,r,E])}),F.complete&&(s=F.complete,F.complete=function(e,t){var r=F.context||this;s.apply(r,[e,t,E])});var t=0<O("input[type=file]:enabled",this).filter(function(){return""!==O(this).val()}).length,r="multipart/form-data",c=E.attr("enctype")===r||E.attr("encoding")===r,n=v.fileapi&&v.formdata;C("fileAPI :"+n);var l,r=(t||c)&&!n;!1!==F.iframe&&(F.iframe||r)?F.closeKeepAlive?O.get(F.closeKeepAlive,function(){l=d(a)}):l=d(a):l=(t||c)&&n?function(e){for(var r=new FormData,t=0;t<e.length;t++)r.append(e[t].name,e[t].value);if(F.extraData){var a=function(e){var t,r,a=O.param(e,F.traditional).split("&"),n=a.length,o=[];for(t=0;t<n;t++)a[t]=a[t].replace(/\+/g," "),r=a[t].split("="),o.push([decodeURIComponent(r[0]),decodeURIComponent(r[1])]);return o}(F.extraData);for(t=0;t<a.length;t++)a[t]&&r.append(a[t][0],a[t][1])}F.data=null;var n=O.extend(!0,{},O.ajaxSettings,F,{contentType:!1,processData:!1,cache:!1,type:L||"POST"});F.uploadProgress&&(n.xhr=function(){var e=O.ajaxSettings.xhr();return e.upload&&e.upload.addEventListener("progress",function(e){var t=0,r=e.loaded||e.position,a=e.total;e.lengthComputable&&(t=Math.ceil(r/a*100)),F.uploadProgress(e,r,a,t)},!1),e});n.data=null;var o=n.beforeSend;return n.beforeSend=function(e,t){F.formData?t.data=F.formData:t.data=r,o&&o.call(this,e,t)},O.ajax(n)}(a):O.ajax(F),E.removeData("jqxhr").data("jqxhr",l);for(var f=0;f<M.length;f++)M[f]=null;return this.trigger("form-submit-notify",[this,F]),this;function d(e){var t,r,i,s,u,c,l,f,d,o=E[0],p=O.Deferred();if(p.abort=function(e){l.abort(e)},e)for(r=0;r<M.length;r++)t=O(M[r]),X?t.prop("disabled",!1):t.removeAttr("disabled");(i=O.extend(!0,{},O.ajaxSettings,F)).context=i.context||i;var m="jqFormIO"+(new Date).getTime(),h=o.ownerDocument,v=E.closest("body");if(i.iframeTarget?(a=(u=O(i.iframeTarget,h)).attr2("name"))?m=a:u.attr2("name",m):(u=O('<iframe name="'+m+'" src="'+i.iframeSrc+'" />',h)).css({position:"absolute",top:"-1000px",left:"-1000px"}),c=u[0],l={aborted:0,responseText:null,responseXML:null,status:0,statusText:"n/a",getAllResponseHeaders:function(){},getResponseHeader:function(){},setRequestHeader:function(){},abort:function(e){var t="timeout"===e?"timeout":"aborted";C("aborting upload... "+t),this.aborted=1;try{c.contentWindow.document.execCommand&&c.contentWindow.document.execCommand("Stop")}catch(e){}u.attr("src",i.iframeSrc),l.error=t,i.error&&i.error.call(i.context,l,t,e),s&&O.event.trigger("ajaxError",[l,i,t]),i.complete&&i.complete.call(i.context,l,t)}},(s=i.global)&&0==O.active++&&O.event.trigger("ajaxStart"),s&&O.event.trigger("ajaxSend",[l,i]),i.beforeSend&&!1===i.beforeSend.call(i.context,l,i))return i.global&&O.active--,p.reject(),p;if(l.aborted)return p.reject(),p;(e=o.clk)&&(a=e.name)&&!e.disabled&&(i.extraData=i.extraData||{},i.extraData[a]=e.value,"image"===e.type&&(i.extraData[a+".x"]=o.clk_x,i.extraData[a+".y"]=o.clk_y));var g=1,x=2;function y(t){var r=null;try{t.contentWindow&&(r=t.contentWindow.document)}catch(e){C("cannot get iframe.contentWindow document: "+e)}if(r)return r;try{r=t.contentDocument||t.document}catch(e){C("cannot get iframe.contentDocument: "+e),r=t.document}return r}var e=O("meta[name=csrf-token]").attr("content"),a=O("meta[name=csrf-param]").attr("content");function n(){var e=E.attr2("target"),t=E.attr2("action"),r=E.attr("enctype")||E.attr("encoding")||"multipart/form-data";o.setAttribute("target",m),L&&!/post/i.test(L)||o.setAttribute("method","POST"),t!==i.url&&o.setAttribute("action",i.url),i.skipEncodingOverride||L&&!/post/i.test(L)||E.attr({encoding:"multipart/form-data",enctype:"multipart/form-data"}),i.timeout&&(d=setTimeout(function(){f=!0,S(g)},i.timeout));var a=[];try{if(i.extraData)for(var n in i.extraData)i.extraData.hasOwnProperty(n)&&(O.isPlainObject(i.extraData[n])&&i.extraData[n].hasOwnProperty("name")&&i.extraData[n].hasOwnProperty("value")?a.push(O('<input type="hidden" name="'+i.extraData[n].name+'">',h).val(i.extraData[n].value).appendTo(o)[0]):a.push(O('<input type="hidden" name="'+n+'">',h).val(i.extraData[n]).appendTo(o)[0]));i.iframeTarget||u.appendTo(v),c.attachEvent?c.attachEvent("onload",S):c.addEventListener("load",S,!1),setTimeout(function e(){try{var t=y(c).readyState;C("state = "+t),t&&"uninitialized"===t.toLowerCase()&&setTimeout(e,50)}catch(e){C("Server abort: ",e," (",e.name,")"),S(x),d&&clearTimeout(d),d=void 0}},15);try{o.submit()}catch(e){document.createElement("form").submit.apply(o)}}finally{o.setAttribute("action",t),o.setAttribute("enctype",r),e?o.setAttribute("target",e):E.removeAttr("target"),O(a).remove()}}a&&e&&(i.extraData=i.extraData||{},i.extraData[a]=e),i.forceSync?n():setTimeout(n,10);var b,T,j,w=50;function S(e){if(!l.aborted&&!j){if((T=y(c))||(C("cannot access response document"),e=x),e===g&&l)return l.abort("timeout"),void p.reject(l,"timeout");if(e===x&&l)return l.abort("server abort"),void p.reject(l,"error","server abort");if(T&&T.location.href!==i.iframeSrc||f){c.detachEvent?c.detachEvent("onload",S):c.removeEventListener("load",S,!1);var t,r="success";try{if(f)throw"timeout";var a="xml"===i.dataType||T.XMLDocument||O.isXMLDoc(T);if(C("isXml="+a),!a&&window.opera&&(null===T.body||!T.body.innerHTML)&&--w)return C("requeing onLoad callback, DOM not available"),void setTimeout(S,250);var n=T.body||T.documentElement;l.responseText=n?n.innerHTML:null,l.responseXML=T.XMLDocument||T,a&&(i.dataType="xml"),l.getResponseHeader=function(e){return{"content-type":i.dataType}[e.toLowerCase()]},n&&(l.status=Number(n.getAttribute("status"))||l.status,l.statusText=n.getAttribute("statusText")||l.statusText);var o=(i.dataType||"").toLowerCase(),a=/(json|script|text)/.test(o);a||i.textarea?(n=T.getElementsByTagName("textarea")[0])?(l.responseText=n.value,l.status=Number(n.getAttribute("status"))||l.status,l.statusText=n.getAttribute("statusText")||l.statusText):a&&(n=T.getElementsByTagName("pre")[0],a=T.getElementsByTagName("body")[0],n?l.responseText=n.textContent||n.innerText:a&&(l.responseText=a.textContent||a.innerText)):"xml"===o&&!l.responseXML&&l.responseText&&(l.responseXML=k(l.responseText));try{b=A(l,o,i)}catch(e){r="parsererror",l.error=t=e||r}}catch(e){C("error caught: ",e),r="error",l.error=t=e||r}l.aborted&&(C("upload aborted"),r=null),"success"===(r=l.status?200<=l.status&&l.status<300||304===l.status?"success":"error":r)?(i.success&&i.success.call(i.context,b,"success",l),p.resolve(l.responseText,"success",l),s&&O.event.trigger("ajaxSuccess",[l,i])):r&&(void 0===t&&(t=l.statusText),i.error&&i.error.call(i.context,l,r,t),p.reject(l,"error",t),s&&O.event.trigger("ajaxError",[l,i,t])),s&&O.event.trigger("ajaxComplete",[l,i]),s&&!--O.active&&O.event.trigger("ajaxStop"),i.complete&&i.complete.call(i.context,l,r),j=!0,i.timeout&&clearTimeout(d),setTimeout(function(){i.iframeTarget?u.attr("src",i.iframeSrc):u.remove(),l.responseXML=null},100)}}}var k=O.parseXML||function(e,t){return window.ActiveXObject?((t=new ActiveXObject("Microsoft.XMLDOM")).async="false",t.loadXML(e)):t=(new DOMParser).parseFromString(e,"text/xml"),t&&t.documentElement&&"parsererror"!==t.documentElement.nodeName?t:null},D=O.parseJSON||function(e){return window.eval("("+e+")")},A=function(e,t,r){var a=e.getResponseHeader("content-type")||"",n=("xml"===t||!t)&&0<=a.indexOf("xml"),e=n?e.responseXML:e.responseText;return n&&"parsererror"===e.documentElement.nodeName&&O.error&&O.error("parsererror"),"string"==typeof(e=r&&r.dataFilter?r.dataFilter(e,t):e)&&(("json"===t||!t)&&0<=a.indexOf("json")?e=D(e):("script"===t||!t)&&0<=a.indexOf("javascript")&&O.globalEval(e)),e};return p}},O.fn.ajaxForm=function(e,t,r,a){if(("string"==typeof e||!1===e&&0<arguments.length)&&(e={url:e,data:t,dataType:r},"function"==typeof a&&(e.success=a)),(e=e||{}).delegation=e.delegation&&O.isFunction(O.fn.on),e.delegation||0!==this.length)return e.delegation?(O(document).off("submit.form-plugin",this.selector,o).off("click.form-plugin",this.selector,i).on("submit.form-plugin",this.selector,e,o).on("click.form-plugin",this.selector,e,i),this):this.ajaxFormUnbind().on("submit.form-plugin",e,o).on("click.form-plugin",e,i);var n={s:this.selector,c:this.context};return!O.isReady&&n.s?(C("DOM not ready, queuing ajaxForm"),O(function(){O(n.s,n.c).ajaxForm(e)})):C("terminating; zero elements found by selector"+(O.isReady?"":" (DOM not ready)")),this},O.fn.ajaxFormUnbind=function(){return this.off("submit.form-plugin click.form-plugin")},O.fn.formToArray=function(e,t,r){var a=[];if(0===this.length)return a;var n,o,i,s,u,c,l,f,d=this[0],p=this.attr("id"),m=(m=e||void 0===d.elements?d.getElementsByTagName("*"):d.elements)&&O.makeArray(m);if(!(m=p&&(e||/(Edge|Trident)\//.test(navigator.userAgent))&&(l=O(':input[form="'+p+'"]').get()).length?(m||[]).concat(l):m)||!m.length)return a;for(n=0,u=(m=O.isFunction(r)?O.map(m,r):m).length;n<u;n++)if((f=(s=m[n]).name)&&!s.disabled)if(e&&d.clk&&"image"===s.type)d.clk===s&&(a.push({name:f,value:O(s).val(),type:s.type}),a.push({name:f+".x",value:d.clk_x},{name:f+".y",value:d.clk_y}));else if((i=O.fieldValue(s,!0))&&i.constructor===Array)for(t&&t.push(s),o=0,c=i.length;o<c;o++)a.push({name:f,value:i[o]});else if(v.fileapi&&"file"===s.type){t&&t.push(s);var h=s.files;if(h.length)for(o=0;o<h.length;o++)a.push({name:f,value:h[o],type:s.type});else a.push({name:f,value:"",type:s.type})}else null!=i&&(t&&t.push(s),a.push({name:f,value:i,type:s.type,required:s.required}));return e||!d.clk||(f=(r=(l=O(d.clk))[0]).name)&&!r.disabled&&"image"===r.type&&(a.push({name:f,value:l.val()}),a.push({name:f+".x",value:d.clk_x},{name:f+".y",value:d.clk_y})),a},O.fn.formSerialize=function(e){return O.param(this.formToArray(e))},O.fn.fieldSerialize=function(n){var o=[];return this.each(function(){var e=this.name;if(e){var t=O.fieldValue(this,n);if(t&&t.constructor===Array)for(var r=0,a=t.length;r<a;r++)o.push({name:e,value:t[r]});else null!=t&&o.push({name:this.name,value:t})}}),O.param(o)},O.fn.fieldValue=function(e){for(var t=[],r=0,a=this.length;r<a;r++){var n=this[r],n=O.fieldValue(n,e);null==n||n.constructor===Array&&!n.length||(n.constructor===Array?O.merge(t,n):t.push(n))}return t},O.fieldValue=function(e,t){var r=e.name,a=e.type,n=e.tagName.toLowerCase();if((t=void 0===t?!0:t)&&(!r||e.disabled||"reset"===a||"button"===a||("checkbox"===a||"radio"===a)&&!e.checked||("submit"===a||"image"===a)&&e.form&&e.form.clk!==e||"select"===n&&-1===e.selectedIndex))return null;if("select"!==n)return O(e).val().replace(d,"\r\n");n=e.selectedIndex;if(n<0)return null;for(var o=[],i=e.options,s="select-one"===a,u=s?n+1:i.length,c=s?n:0;c<u;c++){var l=i[c];if(l.selected&&!l.disabled){var f=(f=l.value)||(l.attributes&&l.attributes.value&&!l.attributes.value.specified?l.text:l.value);if(s)return f;o.push(f)}}return o},O.fn.clearForm=function(e){return this.each(function(){O("input,select,textarea",this).clearFields(e)})},O.fn.clearFields=O.fn.clearInputs=function(r){var a=/^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;return this.each(function(){var e=this.type,t=this.tagName.toLowerCase();a.test(e)||"textarea"===t?this.value="":"checkbox"===e||"radio"===e?this.checked=!1:"select"===t?this.selectedIndex=-1:"file"===e?/MSIE/.test(navigator.userAgent)?O(this).replaceWith(O(this).clone(!0)):O(this).val(""):r&&(!0===r&&/hidden/.test(e)||"string"==typeof r&&O(this).is(r))&&(this.value="")})},O.fn.resetForm=function(){return this.each(function(){var t=O(this),e=this.tagName.toLowerCase();switch(e){case"input":this.checked=this.defaultChecked;case"textarea":return this.value=this.defaultValue,!0;case"option":case"optgroup":var r=t.parents("select");return r.length&&r[0].multiple?"option"===e?this.selected=this.defaultSelected:t.find("option").resetForm():r.resetForm(),!0;case"select":return t.find("option").each(function(e){if(this.selected=this.defaultSelected,this.defaultSelected&&!t[0].multiple)return t[0].selectedIndex=e,!1}),!0;case"label":var a=O(t.attr("for")),r=t.find("input,select,textarea");return a[0]&&r.unshift(a[0]),r.resetForm(),!0;case"form":return"function"!=typeof this.reset&&("object"!=typeof this.reset||this.reset.nodeType)||this.reset(),!0;default:return t.find("form,input,label,select,textarea").resetForm(),!0}})},O.fn.enable=function(e){return void 0===e&&(e=!0),this.each(function(){this.disabled=!e})},O.fn.selected=function(t){return void 0===t&&(t=!0),this.each(function(){var e=this.type;"checkbox"===e||"radio"===e?this.checked=t:"option"===this.tagName.toLowerCase()&&(e=O(this).parent("select"),t&&e[0]&&"select-one"===e[0].type&&e.find("option").selected(!1),this.selected=t)})},O.fn.ajaxSubmit.debug=!1});;/**
 * jquery.Jcrop.min.js v0.9.12 (build:20130202)
 * jQuery Image Cropping Plugin - released under MIT License
 * Copyright (c) 2008-2013 Tapmodo Interactive LLC
 * https://github.com/tapmodo/Jcrop
 */
(function(a){a.Jcrop=function(b,c){function i(a){return Math.round(a)+"px"}function j(a){return d.baseClass+"-"+a}function k(){return a.fx.step.hasOwnProperty("backgroundColor")}function l(b){var c=a(b).offset();return[c.left,c.top]}function m(a){return[a.pageX-e[0],a.pageY-e[1]]}function n(b){typeof b!="object"&&(b={}),d=a.extend(d,b),a.each(["onChange","onSelect","onRelease","onDblClick"],function(a,b){typeof d[b]!="function"&&(d[b]=function(){})})}function o(a,b,c){e=l(D),bc.setCursor(a==="move"?a:a+"-resize");if(a==="move")return bc.activateHandlers(q(b),v,c);var d=_.getFixed(),f=r(a),g=_.getCorner(r(f));_.setPressed(_.getCorner(f)),_.setCurrent(g),bc.activateHandlers(p(a,d),v,c)}function p(a,b){return function(c){if(!d.aspectRatio)switch(a){case"e":c[1]=b.y2;break;case"w":c[1]=b.y2;break;case"n":c[0]=b.x2;break;case"s":c[0]=b.x2}else switch(a){case"e":c[1]=b.y+1;break;case"w":c[1]=b.y+1;break;case"n":c[0]=b.x+1;break;case"s":c[0]=b.x+1}_.setCurrent(c),bb.update()}}function q(a){var b=a;return bd.watchKeys
(),function(a){_.moveOffset([a[0]-b[0],a[1]-b[1]]),b=a,bb.update()}}function r(a){switch(a){case"n":return"sw";case"s":return"nw";case"e":return"nw";case"w":return"ne";case"ne":return"sw";case"nw":return"se";case"se":return"nw";case"sw":return"ne"}}function s(a){return function(b){return d.disabled?!1:a==="move"&&!d.allowMove?!1:(e=l(D),W=!0,o(a,m(b)),b.stopPropagation(),b.preventDefault(),!1)}}function t(a,b,c){var d=a.width(),e=a.height();d>b&&b>0&&(d=b,e=b/a.width()*a.height()),e>c&&c>0&&(e=c,d=c/a.height()*a.width()),T=a.width()/d,U=a.height()/e,a.width(d).height(e)}function u(a){return{x:a.x*T,y:a.y*U,x2:a.x2*T,y2:a.y2*U,w:a.w*T,h:a.h*U}}function v(a){var b=_.getFixed();b.w>d.minSelect[0]&&b.h>d.minSelect[1]?(bb.enableHandles(),bb.done()):bb.release(),bc.setCursor(d.allowSelect?"crosshair":"default")}function w(a){if(d.disabled)return!1;if(!d.allowSelect)return!1;W=!0,e=l(D),bb.disableHandles(),bc.setCursor("crosshair");var b=m(a);return _.setPressed(b),bb.update(),bc.activateHandlers(x,v,a.type.substring
(0,5)==="touch"),bd.watchKeys(),a.stopPropagation(),a.preventDefault(),!1}function x(a){_.setCurrent(a),bb.update()}function y(){var b=a("<div></div>").addClass(j("tracker"));return g&&b.css({opacity:0,backgroundColor:"white"}),b}function be(a){G.removeClass().addClass(j("holder")).addClass(a)}function bf(a,b){function t(){window.setTimeout(u,l)}var c=a[0]/T,e=a[1]/U,f=a[2]/T,g=a[3]/U;if(X)return;var h=_.flipCoords(c,e,f,g),i=_.getFixed(),j=[i.x,i.y,i.x2,i.y2],k=j,l=d.animationDelay,m=h[0]-j[0],n=h[1]-j[1],o=h[2]-j[2],p=h[3]-j[3],q=0,r=d.swingSpeed;c=k[0],e=k[1],f=k[2],g=k[3],bb.animMode(!0);var s,u=function(){return function(){q+=(100-q)/r,k[0]=Math.round(c+q/100*m),k[1]=Math.round(e+q/100*n),k[2]=Math.round(f+q/100*o),k[3]=Math.round(g+q/100*p),q>=99.8&&(q=100),q<100?(bh(k),t()):(bb.done(),bb.animMode(!1),typeof b=="function"&&b.call(bs))}}();t()}function bg(a){bh([a[0]/T,a[1]/U,a[2]/T,a[3]/U]),d.onSelect.call(bs,u(_.getFixed())),bb.enableHandles()}function bh(a){_.setPressed([a[0],a[1]]),_.setCurrent([a[2],
a[3]]),bb.update()}function bi(){return u(_.getFixed())}function bj(){return _.getFixed()}function bk(a){n(a),br()}function bl(){d.disabled=!0,bb.disableHandles(),bb.setCursor("default"),bc.setCursor("default")}function bm(){d.disabled=!1,br()}function bn(){bb.done(),bc.activateHandlers(null,null)}function bo(){G.remove(),A.show(),A.css("visibility","visible"),a(b).removeData("Jcrop")}function bp(a,b){bb.release(),bl();var c=new Image;c.onload=function(){var e=c.width,f=c.height,g=d.boxWidth,h=d.boxHeight;D.width(e).height(f),D.attr("src",a),H.attr("src",a),t(D,g,h),E=D.width(),F=D.height(),H.width(E).height(F),M.width(E+L*2).height(F+L*2),G.width(E).height(F),ba.resize(E,F),bm(),typeof b=="function"&&b.call(bs)},c.src=a}function bq(a,b,c){var e=b||d.bgColor;d.bgFade&&k()&&d.fadeTime&&!c?a.animate({backgroundColor:e},{queue:!1,duration:d.fadeTime}):a.css("backgroundColor",e)}function br(a){d.allowResize?a?bb.enableOnly():bb.enableHandles():bb.disableHandles(),bc.setCursor(d.allowSelect?"crosshair":"default"),bb
.setCursor(d.allowMove?"move":"default"),d.hasOwnProperty("trueSize")&&(T=d.trueSize[0]/E,U=d.trueSize[1]/F),d.hasOwnProperty("setSelect")&&(bg(d.setSelect),bb.done(),delete d.setSelect),ba.refresh(),d.bgColor!=N&&(bq(d.shade?ba.getShades():G,d.shade?d.shadeColor||d.bgColor:d.bgColor),N=d.bgColor),O!=d.bgOpacity&&(O=d.bgOpacity,d.shade?ba.refresh():bb.setBgOpacity(O)),P=d.maxSize[0]||0,Q=d.maxSize[1]||0,R=d.minSize[0]||0,S=d.minSize[1]||0,d.hasOwnProperty("outerImage")&&(D.attr("src",d.outerImage),delete d.outerImage),bb.refresh()}var d=a.extend({},a.Jcrop.defaults),e,f=navigator.userAgent.toLowerCase(),g=/msie/.test(f),h=/msie [1-6]\./.test(f);typeof b!="object"&&(b=a(b)[0]),typeof c!="object"&&(c={}),n(c);var z={border:"none",visibility:"visible",margin:0,padding:0,position:"absolute",top:0,left:0},A=a(b),B=!0;if(b.tagName=="IMG"){if(A[0].width!=0&&A[0].height!=0)A.width(A[0].width),A.height(A[0].height);else{var C=new Image;C.src=A[0].src,A.width(C.width),A.height(C.height)}var D=A.clone().removeAttr("id").
css(z).show();D.width(A.width()),D.height(A.height()),A.after(D).hide()}else D=A.css(z).show(),B=!1,d.shade===null&&(d.shade=!0);t(D,d.boxWidth,d.boxHeight);var E=D.width(),F=D.height(),G=a("<div />").width(E).height(F).addClass(j("holder")).css({position:"relative",backgroundColor:d.bgColor}).insertAfter(A).append(D);d.addClass&&G.addClass(d.addClass);var H=a("<div />"),I=a("<div />").width("100%").height("100%").css({zIndex:310,position:"absolute",overflow:"hidden"}),J=a("<div />").width("100%").height("100%").css("zIndex",320),K=a("<div />").css({position:"absolute",zIndex:600}).dblclick(function(){var a=_.getFixed();d.onDblClick.call(bs,a)}).insertBefore(D).append(I,J);B&&(H=a("<img />").attr("src",D.attr("src")).css(z).width(E).height(F),I.append(H)),h&&K.css({overflowY:"hidden"});var L=d.boundary,M=y().width(E+L*2).height(F+L*2).css({position:"absolute",top:i(-L),left:i(-L),zIndex:290}).mousedown(w),N=d.bgColor,O=d.bgOpacity,P,Q,R,S,T,U,V=!0,W,X,Y;e=l(D);var Z=function(){function a(){var a={},b=["touchstart"
,"touchmove","touchend"],c=document.createElement("div"),d;try{for(d=0;d<b.length;d++){var e=b[d];e="on"+e;var f=e in c;f||(c.setAttribute(e,"return;"),f=typeof c[e]=="function"),a[b[d]]=f}return a.touchstart&&a.touchend&&a.touchmove}catch(g){return!1}}function b(){return d.touchSupport===!0||d.touchSupport===!1?d.touchSupport:a()}return{createDragger:function(a){return function(b){return d.disabled?!1:a==="move"&&!d.allowMove?!1:(e=l(D),W=!0,o(a,m(Z.cfilter(b)),!0),b.stopPropagation(),b.preventDefault(),!1)}},newSelection:function(a){return w(Z.cfilter(a))},cfilter:function(a){return a.pageX=a.originalEvent.changedTouches[0].pageX,a.pageY=a.originalEvent.changedTouches[0].pageY,a},isSupported:a,support:b()}}(),_=function(){function h(d){d=n(d),c=a=d[0],e=b=d[1]}function i(a){a=n(a),f=a[0]-c,g=a[1]-e,c=a[0],e=a[1]}function j(){return[f,g]}function k(d){var f=d[0],g=d[1];0>a+f&&(f-=f+a),0>b+g&&(g-=g+b),F<e+g&&(g+=F-(e+g)),E<c+f&&(f+=E-(c+f)),a+=f,c+=f,b+=g,e+=g}function l(a){var b=m();switch(a){case"ne":return[
b.x2,b.y];case"nw":return[b.x,b.y];case"se":return[b.x2,b.y2];case"sw":return[b.x,b.y2]}}function m(){if(!d.aspectRatio)return p();var f=d.aspectRatio,g=d.minSize[0]/T,h=d.maxSize[0]/T,i=d.maxSize[1]/U,j=c-a,k=e-b,l=Math.abs(j),m=Math.abs(k),n=l/m,r,s,t,u;return h===0&&(h=E*10),i===0&&(i=F*10),n<f?(s=e,t=m*f,r=j<0?a-t:t+a,r<0?(r=0,u=Math.abs((r-a)/f),s=k<0?b-u:u+b):r>E&&(r=E,u=Math.abs((r-a)/f),s=k<0?b-u:u+b)):(r=c,u=l/f,s=k<0?b-u:b+u,s<0?(s=0,t=Math.abs((s-b)*f),r=j<0?a-t:t+a):s>F&&(s=F,t=Math.abs(s-b)*f,r=j<0?a-t:t+a)),r>a?(r-a<g?r=a+g:r-a>h&&(r=a+h),s>b?s=b+(r-a)/f:s=b-(r-a)/f):r<a&&(a-r<g?r=a-g:a-r>h&&(r=a-h),s>b?s=b+(a-r)/f:s=b-(a-r)/f),r<0?(a-=r,r=0):r>E&&(a-=r-E,r=E),s<0?(b-=s,s=0):s>F&&(b-=s-F,s=F),q(o(a,b,r,s))}function n(a){return a[0]<0&&(a[0]=0),a[1]<0&&(a[1]=0),a[0]>E&&(a[0]=E),a[1]>F&&(a[1]=F),[Math.round(a[0]),Math.round(a[1])]}function o(a,b,c,d){var e=a,f=c,g=b,h=d;return c<a&&(e=c,f=a),d<b&&(g=d,h=b),[e,g,f,h]}function p(){var d=c-a,f=e-b,g;return P&&Math.abs(d)>P&&(c=d>0?a+P:a-P),Q&&Math.abs
(f)>Q&&(e=f>0?b+Q:b-Q),S/U&&Math.abs(f)<S/U&&(e=f>0?b+S/U:b-S/U),R/T&&Math.abs(d)<R/T&&(c=d>0?a+R/T:a-R/T),a<0&&(c-=a,a-=a),b<0&&(e-=b,b-=b),c<0&&(a-=c,c-=c),e<0&&(b-=e,e-=e),c>E&&(g=c-E,a-=g,c-=g),e>F&&(g=e-F,b-=g,e-=g),a>E&&(g=a-F,e-=g,b-=g),b>F&&(g=b-F,e-=g,b-=g),q(o(a,b,c,e))}function q(a){return{x:a[0],y:a[1],x2:a[2],y2:a[3],w:a[2]-a[0],h:a[3]-a[1]}}var a=0,b=0,c=0,e=0,f,g;return{flipCoords:o,setPressed:h,setCurrent:i,getOffset:j,moveOffset:k,getCorner:l,getFixed:m}}(),ba=function(){function f(a,b){e.left.css({height:i(b)}),e.right.css({height:i(b)})}function g(){return h(_.getFixed())}function h(a){e.top.css({left:i(a.x),width:i(a.w),height:i(a.y)}),e.bottom.css({top:i(a.y2),left:i(a.x),width:i(a.w),height:i(F-a.y2)}),e.right.css({left:i(a.x2),width:i(E-a.x2)}),e.left.css({width:i(a.x)})}function j(){return a("<div />").css({position:"absolute",backgroundColor:d.shadeColor||d.bgColor}).appendTo(c)}function k(){b||(b=!0,c.insertBefore(D),g(),bb.setBgOpacity(1,0,1),H.hide(),l(d.shadeColor||d.bgColor,1),bb.
isAwake()?n(d.bgOpacity,1):n(1,1))}function l(a,b){bq(p(),a,b)}function m(){b&&(c.remove(),H.show(),b=!1,bb.isAwake()?bb.setBgOpacity(d.bgOpacity,1,1):(bb.setBgOpacity(1,1,1),bb.disableHandles()),bq(G,0,1))}function n(a,e){b&&(d.bgFade&&!e?c.animate({opacity:1-a},{queue:!1,duration:d.fadeTime}):c.css({opacity:1-a}))}function o(){d.shade?k():m(),bb.isAwake()&&n(d.bgOpacity)}function p(){return c.children()}var b=!1,c=a("<div />").css({position:"absolute",zIndex:240,opacity:0}),e={top:j(),left:j().height(F),right:j().height(F),bottom:j()};return{update:g,updateRaw:h,getShades:p,setBgColor:l,enable:k,disable:m,resize:f,refresh:o,opacity:n}}(),bb=function(){function k(b){var c=a("<div />").css({position:"absolute",opacity:d.borderOpacity}).addClass(j(b));return I.append(c),c}function l(b,c){var d=a("<div />").mousedown(s(b)).css({cursor:b+"-resize",position:"absolute",zIndex:c}).addClass("ord-"+b);return Z.support&&d.bind("touchstart.jcrop",Z.createDragger(b)),J.append(d),d}function m(a){var b=d.handleSize,e=l(a,c++
).css({opacity:d.handleOpacity}).addClass(j("handle"));return b&&e.width(b).height(b),e}function n(a){return l(a,c++).addClass("jcrop-dragbar")}function o(a){var b;for(b=0;b<a.length;b++)g[a[b]]=n(a[b])}function p(a){var b,c;for(c=0;c<a.length;c++){switch(a[c]){case"n":b="hline";break;case"s":b="hline bottom";break;case"e":b="vline right";break;case"w":b="vline"}e[a[c]]=k(b)}}function q(a){var b;for(b=0;b<a.length;b++)f[a[b]]=m(a[b])}function r(a,b){d.shade||H.css({top:i(-b),left:i(-a)}),K.css({top:i(b),left:i(a)})}function t(a,b){K.width(Math.round(a)).height(Math.round(b))}function v(){var a=_.getFixed();_.setPressed([a.x,a.y]),_.setCurrent([a.x2,a.y2]),w()}function w(a){if(b)return x(a)}function x(a){var c=_.getFixed();t(c.w,c.h),r(c.x,c.y),d.shade&&ba.updateRaw(c),b||A(),a?d.onSelect.call(bs,u(c)):d.onChange.call(bs,u(c))}function z(a,c,e){if(!b&&!c)return;d.bgFade&&!e?D.animate({opacity:a},{queue:!1,duration:d.fadeTime}):D.css("opacity",a)}function A(){K.show(),d.shade?ba.opacity(O):z(O,!0),b=!0}function B
(){F(),K.hide(),d.shade?ba.opacity(1):z(1),b=!1,d.onRelease.call(bs)}function C(){h&&J.show()}function E(){h=!0;if(d.allowResize)return J.show(),!0}function F(){h=!1,J.hide()}function G(a){a?(X=!0,F()):(X=!1,E())}function L(){G(!1),v()}var b,c=370,e={},f={},g={},h=!1;d.dragEdges&&a.isArray(d.createDragbars)&&o(d.createDragbars),a.isArray(d.createHandles)&&q(d.createHandles),d.drawBorders&&a.isArray(d.createBorders)&&p(d.createBorders),a(document).bind("touchstart.jcrop-ios",function(b){a(b.currentTarget).hasClass("jcrop-tracker")&&b.stopPropagation()});var M=y().mousedown(s("move")).css({cursor:"move",position:"absolute",zIndex:360});return Z.support&&M.bind("touchstart.jcrop",Z.createDragger("move")),I.append(M),F(),{updateVisible:w,update:x,release:B,refresh:v,isAwake:function(){return b},setCursor:function(a){M.css("cursor",a)},enableHandles:E,enableOnly:function(){h=!0},showHandles:C,disableHandles:F,animMode:G,setBgOpacity:z,done:L}}(),bc=function(){function f(b){M.css({zIndex:450}),b?a(document).bind("touchmove.jcrop"
,k).bind("touchend.jcrop",l):e&&a(document).bind("mousemove.jcrop",h).bind("mouseup.jcrop",i)}function g(){M.css({zIndex:290}),a(document).unbind(".jcrop")}function h(a){return b(m(a)),!1}function i(a){return a.preventDefault(),a.stopPropagation(),W&&(W=!1,c(m(a)),bb.isAwake()&&d.onSelect.call(bs,u(_.getFixed())),g(),b=function(){},c=function(){}),!1}function j(a,d,e){return W=!0,b=a,c=d,f(e),!1}function k(a){return b(m(Z.cfilter(a))),!1}function l(a){return i(Z.cfilter(a))}function n(a){M.css("cursor",a)}var b=function(){},c=function(){},e=d.trackDocument;return e||M.mousemove(h).mouseup(i).mouseout(i),D.before(M),{activateHandlers:j,setCursor:n}}(),bd=function(){function e(){d.keySupport&&(b.show(),b.focus())}function f(a){b.hide()}function g(a,b,c){d.allowMove&&(_.moveOffset([b,c]),bb.updateVisible(!0)),a.preventDefault(),a.stopPropagation()}function i(a){if(a.ctrlKey||a.metaKey)return!0;Y=a.shiftKey?!0:!1;var b=Y?10:1;switch(a.keyCode){case 37:g(a,-b,0);break;case 39:g(a,b,0);break;case 38:g(a,0,-b);break;
case 40:g(a,0,b);break;case 27:d.allowSelect&&bb.release();break;case 9:return!0}return!1}var b=a('<input type="radio" />').css({position:"fixed",left:"-120px",width:"12px"}).addClass("jcrop-keymgr"),c=a("<div />").css({position:"absolute",overflow:"hidden"}).append(b);return d.keySupport&&(b.keydown(i).blur(f),h||!d.fixedSupport?(b.css({position:"absolute",left:"-20px"}),c.append(b).insertBefore(D)):b.insertBefore(D)),{watchKeys:e}}();Z.support&&M.bind("touchstart.jcrop",Z.newSelection),J.hide(),br(!0);var bs={setImage:bp,animateTo:bf,setSelect:bg,setOptions:bk,tellSelect:bi,tellScaled:bj,setClass:be,disable:bl,enable:bm,cancel:bn,release:bb.release,destroy:bo,focus:bd.watchKeys,getBounds:function(){return[E*T,F*U]},getWidgetSize:function(){return[E,F]},getScaleFactor:function(){return[T,U]},getOptions:function(){return d},ui:{holder:G,selection:K}};return g&&G.bind("selectstart",function(){return!1}),A.data("Jcrop",bs),bs},a.fn.Jcrop=function(b,c){var d;return this.each(function(){if(a(this).data("Jcrop")){if(
b==="api")return a(this).data("Jcrop");a(this).data("Jcrop").setOptions(b)}else this.tagName=="IMG"?a.Jcrop.Loader(this,function(){a(this).css({display:"block",visibility:"hidden"}),d=a.Jcrop(this,b),a.isFunction(c)&&c.call(d)}):(a(this).css({display:"block",visibility:"hidden"}),d=a.Jcrop(this,b),a.isFunction(c)&&c.call(d))}),this},a.Jcrop.Loader=function(b,c,d){function g(){f.complete?(e.unbind(".jcloader"),a.isFunction(c)&&c.call(f)):window.setTimeout(g,50)}var e=a(b),f=e[0];e.bind("load.jcloader",g).bind("error.jcloader",function(b){e.unbind(".jcloader"),a.isFunction(d)&&d.call(f)}),f.complete&&a.isFunction(c)&&(e.unbind(".jcloader"),c.call(f))},a.Jcrop.defaults={allowSelect:!0,allowMove:!0,allowResize:!0,trackDocument:!0,baseClass:"jcrop",addClass:null,bgColor:"black",bgOpacity:.6,bgFade:!1,borderOpacity:.4,handleOpacity:.5,handleSize:null,aspectRatio:0,keySupport:!0,createHandles:["n","s","e","w","nw","ne","se","sw"],createDragbars:["n","s","e","w"],createBorders:["n","s","e","w"],drawBorders:!0,dragEdges
:!0,fixedSupport:!0,touchSupport:null,shade:null,boxWidth:0,boxHeight:0,boundary:2,fadeTime:400,animationDelay:20,swingSpeed:3,minSelect:[0,0],maxSize:[0,0],minSize:[0,0],onChange:function(){},onSelect:function(){},onDblClick:function(){},onRelease:function(){}}})(jQuery);
;/*!
 * jQuery UI Effects 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t(jQuery)}(function(u){u.ui=u.ui||{},u.ui.version="1.12.1";var l,d,a,p,t,h,g,m,s,e,b,o,i,c,f,v,n,r,y,x,C,w="ui-effects-",k="ui-effects-style",_="ui-effects-animated",S=u;function M(t,e,n){var r=m[e.type]||{};return null==t?n||!e.def?null:e.def:(t=r.floor?~~t:parseFloat(t),isNaN(t)?e.def:r.mod?(t+r.mod)%r.mod:t<0?0:r.max<t?r.max:t)}function B(r){var i=h(),o=i._rgba=[];return r=r.toLowerCase(),b(t,function(t,e){var n=e.re.exec(r),n=n&&e.parse(n),e=e.space||"rgba";if(n)return n=i[e](n),i[g[e].cache]=n[g[e].cache],o=i._rgba=n._rgba,!1}),o.length?("0,0,0,0"===o.join()&&l.extend(o,a.transparent),i):a[r]}function H(t,e,n){return 6*(n=(n+1)%1)<1?t+(e-t)*n*6:2*n<1?e:3*n<2?t+(e-t)*(2/3-n)*6:t}function I(t){var e,n,r=t.ownerDocument.defaultView?t.ownerDocument.defaultView.getComputedStyle(t,null):t.currentStyle,i={};if(r&&r.length&&r[0]&&r[r[0]])for(n=r.length;n--;)"string"==typeof r[e=r[n]]&&(i[u.camelCase(e)]=r[e]);else for(e in r)"string"==typeof r[e]&&(i[e]=r[e]);return i}function T(t,e,n,r){return t={effect:t=u.isPlainObject(t)?(e=t).effect:t},null==e&&(e={}),u.isFunction(e)&&(r=e,n=null,e={}),"number"!=typeof e&&!u.fx.speeds[e]||(r=n,n=e,e={}),u.isFunction(n)&&(r=n,n=null),e&&u.extend(t,e),n=n||e.duration,t.duration=u.fx.off?0:"number"==typeof n?n:n in u.fx.speeds?u.fx.speeds[n]:u.fx.speeds._default,t.complete=r||e.complete,t}function F(t){return!t||"number"==typeof t||u.fx.speeds[t]||("string"==typeof t&&!u.effects.effect[t]||(u.isFunction(t)||"object"==typeof t&&!t.effect))}function W(t,e){var n=e.outerWidth(),e=e.outerHeight(),t=/^rect\((-?\d*\.?\d*px|-?\d+%|auto),?\s*(-?\d*\.?\d*px|-?\d+%|auto),?\s*(-?\d*\.?\d*px|-?\d+%|auto),?\s*(-?\d*\.?\d*px|-?\d+%|auto)\)$/.exec(t)||["",0,n,e,0];return{top:parseFloat(t[1])||0,right:"auto"===t[2]?n:parseFloat(t[2]),bottom:"auto"===t[3]?e:parseFloat(t[3]),left:parseFloat(t[4])||0}}return u.effects={effect:{}},
/*!
 * jQuery Color Animations v2.1.2
 * https://github.com/jquery/jquery-color
 *
 * Copyright 2014 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * Date: Wed Jan 16 08:47:09 2013 -0600
 */
p=/^([\-+])=\s*(\d+\.?\d*)/,t=[{re:/rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,parse:function(t){return[t[1],t[2],t[3],t[4]]}},{re:/rgba?\(\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,parse:function(t){return[2.55*t[1],2.55*t[2],2.55*t[3],t[4]]}},{re:/#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,parse:function(t){return[parseInt(t[1],16),parseInt(t[2],16),parseInt(t[3],16)]}},{re:/#([a-f0-9])([a-f0-9])([a-f0-9])/,parse:function(t){return[parseInt(t[1]+t[1],16),parseInt(t[2]+t[2],16),parseInt(t[3]+t[3],16)]}},{re:/hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)\%\s*,\s*(\d+(?:\.\d+)?)\%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,space:"hsla",parse:function(t){return[t[1],t[2]/100,t[3]/100,t[4]]}}],h=(l=S).Color=function(t,e,n,r){return new l.Color.fn.parse(t,e,n,r)},g={rgba:{props:{red:{idx:0,type:"byte"},green:{idx:1,type:"byte"},blue:{idx:2,type:"byte"}}},hsla:{props:{hue:{idx:0,type:"degrees"},saturation:{idx:1,type:"percent"},lightness:{idx:2,type:"percent"}}}},m={byte:{floor:!0,max:255},percent:{max:1},degrees:{mod:360,floor:!0}},s=h.support={},e=l("<p>")[0],b=l.each,e.style.cssText="background-color:rgba(1,1,1,.5)",s.rgba=-1<e.style.backgroundColor.indexOf("rgba"),b(g,function(t,e){e.cache="_"+t,e.props.alpha={idx:3,type:"percent",def:1}}),h.fn=l.extend(h.prototype,{parse:function(i,t,e,n){if(i===d)return this._rgba=[null,null,null,null],this;(i.jquery||i.nodeType)&&(i=l(i).css(t),t=d);var o=this,r=l.type(i),s=this._rgba=[];return t!==d&&(i=[i,t,e,n],r="array"),"string"===r?this.parse(B(i)||a._default):"array"===r?(b(g.rgba.props,function(t,e){s[e.idx]=M(i[e.idx],e)}),this):"object"===r?(b(g,i instanceof h?function(t,e){i[e.cache]&&(o[e.cache]=i[e.cache].slice())}:function(t,n){var r=n.cache;b(n.props,function(t,e){if(!o[r]&&n.to){if("alpha"===t||null==i[t])return;o[r]=n.to(o._rgba)}o[r][e.idx]=M(i[t],e,!0)}),o[r]&&l.inArray(null,o[r].slice(0,3))<0&&(o[r][3]=1,n.from&&(o._rgba=n.from(o[r])))}),this):void 0},is:function(t){var i=h(t),o=!0,s=this;return b(g,function(t,e){var n,r=i[e.cache];return r&&(n=s[e.cache]||e.to&&e.to(s._rgba)||[],b(e.props,function(t,e){if(null!=r[e.idx])return o=r[e.idx]===n[e.idx]})),o}),o},_space:function(){var n=[],r=this;return b(g,function(t,e){r[e.cache]&&n.push(t)}),n.pop()},transition:function(t,s){var e=(f=h(t))._space(),n=g[e],t=0===this.alpha()?h("transparent"):this,a=t[n.cache]||n.to(t._rgba),c=a.slice(),f=f[n.cache];return b(n.props,function(t,e){var n=e.idx,r=a[n],i=f[n],o=m[e.type]||{};null!==i&&(null===r?c[n]=i:(o.mod&&(o.mod/2<i-r?r+=o.mod:o.mod/2<r-i&&(r-=o.mod)),c[n]=M((i-r)*s+r,e)))}),this[e](c)},blend:function(t){if(1===this._rgba[3])return this;var e=this._rgba.slice(),n=e.pop(),r=h(t)._rgba;return h(l.map(e,function(t,e){return(1-n)*r[e]+n*t}))},toRgbaString:function(){var t="rgba(",e=l.map(this._rgba,function(t,e){return null==t?2<e?1:0:t});return 1===e[3]&&(e.pop(),t="rgb("),t+e.join()+")"},toHslaString:function(){var t="hsla(",e=l.map(this.hsla(),function(t,e){return null==t&&(t=2<e?1:0),t=e&&e<3?Math.round(100*t)+"%":t});return 1===e[3]&&(e.pop(),t="hsl("),t+e.join()+")"},toHexString:function(t){var e=this._rgba.slice(),n=e.pop();return t&&e.push(~~(255*n)),"#"+l.map(e,function(t){return 1===(t=(t||0).toString(16)).length?"0"+t:t}).join("")},toString:function(){return 0===this._rgba[3]?"transparent":this.toRgbaString()}}),h.fn.parse.prototype=h.fn,g.hsla.to=function(t){if(null==t[0]||null==t[1]||null==t[2])return[null,null,null,t[3]];var e=t[0]/255,n=t[1]/255,r=t[2]/255,i=t[3],o=Math.max(e,n,r),s=Math.min(e,n,r),a=o-s,c=o+s,t=.5*c,n=s===o?0:e===o?60*(n-r)/a+360:n===o?60*(r-e)/a+120:60*(e-n)/a+240,c=0==a?0:t<=.5?a/c:a/(2-c);return[Math.round(n)%360,c,t,null==i?1:i]},g.hsla.from=function(t){if(null==t[0]||null==t[1]||null==t[2])return[null,null,null,t[3]];var e=t[0]/360,n=t[1],r=t[2],t=t[3],n=r<=.5?r*(1+n):r+n-r*n,r=2*r-n;return[Math.round(255*H(r,n,e+1/3)),Math.round(255*H(r,n,e)),Math.round(255*H(r,n,e-1/3)),t]},b(g,function(c,t){var o=t.props,s=t.cache,a=t.to,f=t.from;h.fn[c]=function(t){if(a&&!this[s]&&(this[s]=a(this._rgba)),t===d)return this[s].slice();var e,n=l.type(t),r="array"===n||"object"===n?t:arguments,i=this[s].slice();return b(o,function(t,e){t=r["object"===n?t:e.idx];null==t&&(t=i[e.idx]),i[e.idx]=M(t,e)}),f?((e=h(f(i)))[s]=i,e):h(i)},b(o,function(s,a){h.fn[s]||(h.fn[s]=function(t){var e,n=l.type(t),r="alpha"===s?this._hsla?"hsla":"rgba":c,i=this[r](),o=i[a.idx];return"undefined"===n?o:("function"===n&&(t=t.call(this,o),n=l.type(t)),null==t&&a.empty?this:("string"===n&&(e=p.exec(t))&&(t=o+parseFloat(e[2])*("+"===e[1]?1:-1)),i[a.idx]=t,this[r](i)))})})}),h.hook=function(t){t=t.split(" ");b(t,function(t,o){l.cssHooks[o]={set:function(t,e){var n,r,i="";if("transparent"!==e&&("string"!==l.type(e)||(n=B(e)))){if(e=h(n||e),!s.rgba&&1!==e._rgba[3]){for(r="backgroundColor"===o?t.parentNode:t;(""===i||"transparent"===i)&&r&&r.style;)try{i=l.css(r,"backgroundColor"),r=r.parentNode}catch(t){}e=e.blend(i&&"transparent"!==i?i:"_default")}e=e.toRgbaString()}try{t.style[o]=e}catch(t){}}},l.fx.step[o]=function(t){t.colorInit||(t.start=h(t.elem,o),t.end=h(t.end),t.colorInit=!0),l.cssHooks[o].set(t.elem,t.start.transition(t.end,t.pos))}})},h.hook("backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor"),l.cssHooks.borderColor={expand:function(n){var r={};return b(["Top","Right","Bottom","Left"],function(t,e){r["border"+e+"Color"]=n}),r}},a=l.Color.names={aqua:"#00ffff",black:"#000000",blue:"#0000ff",fuchsia:"#ff00ff",gray:"#808080",green:"#008000",lime:"#00ff00",maroon:"#800000",navy:"#000080",olive:"#808000",purple:"#800080",red:"#ff0000",silver:"#c0c0c0",teal:"#008080",white:"#ffffff",yellow:"#ffff00",transparent:[null,null,null,0],_default:"#ffffff"},f=["add","remove","toggle"],v={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1},u.each(["borderLeftStyle","borderRightStyle","borderBottomStyle","borderTopStyle"],function(t,e){u.fx.step[e]=function(t){("none"!==t.end&&!t.setAttr||1===t.pos&&!t.setAttr)&&(S.style(t.elem,e,t.end),t.setAttr=!0)}}),u.fn.addBack||(u.fn.addBack=function(t){return this.add(null==t?this.prevObject:this.prevObject.filter(t))}),u.effects.animateClass=function(i,t,e,n){var o=u.speed(t,e,n);return this.queue(function(){var n=u(this),t=n.attr("class")||"",e=(e=o.children?n.find("*").addBack():n).map(function(){return{el:u(this),start:I(this)}}),r=function(){u.each(f,function(t,e){i[e]&&n[e+"Class"](i[e])})};r(),e=e.map(function(){return this.end=I(this.el[0]),this.diff=function(t,e){var n,r,i={};for(n in e)r=e[n],t[n]!==r&&(v[n]||!u.fx.step[n]&&isNaN(parseFloat(r))||(i[n]=r));return i}(this.start,this.end),this}),n.attr("class",t),e=e.map(function(){var t=this,e=u.Deferred(),n=u.extend({},o,{queue:!1,complete:function(){e.resolve(t)}});return this.el.animate(this.diff,n),e.promise()}),u.when.apply(u,e.get()).done(function(){r(),u.each(arguments,function(){var e=this.el;u.each(this.diff,function(t){e.css(t,"")})}),o.complete.call(n[0])})})},u.fn.extend({addClass:(c=u.fn.addClass,function(t,e,n,r){return e?u.effects.animateClass.call(this,{add:t},e,n,r):c.apply(this,arguments)}),removeClass:(i=u.fn.removeClass,function(t,e,n,r){return 1<arguments.length?u.effects.animateClass.call(this,{remove:t},e,n,r):i.apply(this,arguments)}),toggleClass:(o=u.fn.toggleClass,function(t,e,n,r,i){return"boolean"==typeof e||void 0===e?n?u.effects.animateClass.call(this,e?{add:t}:{remove:t},n,r,i):o.apply(this,arguments):u.effects.animateClass.call(this,{toggle:t},e,n,r)}),switchClass:function(t,e,n,r,i){return u.effects.animateClass.call(this,{add:e,remove:t},n,r,i)}}),u.expr&&u.expr.filters&&u.expr.filters.animated&&(u.expr.filters.animated=(n=u.expr.filters.animated,function(t){return!!u(t).data(_)||n(t)})),!1!==u.uiBackCompat&&u.extend(u.effects,{save:function(t,e){for(var n=0,r=e.length;n<r;n++)null!==e[n]&&t.data(w+e[n],t[0].style[e[n]])},restore:function(t,e){for(var n,r=0,i=e.length;r<i;r++)null!==e[r]&&(n=t.data(w+e[r]),t.css(e[r],n))},setMode:function(t,e){return e="toggle"===e?t.is(":hidden")?"show":"hide":e},createWrapper:function(n){if(n.parent().is(".ui-effects-wrapper"))return n.parent();var r={width:n.outerWidth(!0),height:n.outerHeight(!0),float:n.css("float")},t=u("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0}),e={width:n.width(),height:n.height()},i=document.activeElement;try{i.id}catch(t){i=document.body}return n.wrap(t),n[0]!==i&&!u.contains(n[0],i)||u(i).trigger("focus"),t=n.parent(),"static"===n.css("position")?(t.css({position:"relative"}),n.css({position:"relative"})):(u.extend(r,{position:n.css("position"),zIndex:n.css("z-index")}),u.each(["top","left","bottom","right"],function(t,e){r[e]=n.css(e),isNaN(parseInt(r[e],10))&&(r[e]="auto")}),n.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"})),n.css(e),t.css(r).show()},removeWrapper:function(t){var e=document.activeElement;return t.parent().is(".ui-effects-wrapper")&&(t.parent().replaceWith(t),t[0]!==e&&!u.contains(t[0],e)||u(e).trigger("focus")),t}}),u.extend(u.effects,{version:"1.12.1",define:function(t,e,n){return n||(n=e,e="effect"),u.effects.effect[t]=n,u.effects.effect[t].mode=e,n},scaledDimensions:function(t,e,n){if(0===e)return{height:0,width:0,outerHeight:0,outerWidth:0};var r="horizontal"!==n?(e||100)/100:1,e="vertical"!==n?(e||100)/100:1;return{height:t.height()*e,width:t.width()*r,outerHeight:t.outerHeight()*e,outerWidth:t.outerWidth()*r}},clipToBox:function(t){return{width:t.clip.right-t.clip.left,height:t.clip.bottom-t.clip.top,left:t.clip.left,top:t.clip.top}},unshift:function(t,e,n){var r=t.queue();1<e&&r.splice.apply(r,[1,0].concat(r.splice(e,n))),t.dequeue()},saveStyle:function(t){t.data(k,t[0].style.cssText)},restoreStyle:function(t){t[0].style.cssText=t.data(k)||"",t.removeData(k)},mode:function(t,e){t=t.is(":hidden");return"toggle"===e&&(e=t?"show":"hide"),e=(t?"hide"===e:"show"===e)?"none":e},getBaseline:function(t,e){var n,r;switch(t[0]){case"top":n=0;break;case"middle":n=.5;break;case"bottom":n=1;break;default:n=t[0]/e.height}switch(t[1]){case"left":r=0;break;case"center":r=.5;break;case"right":r=1;break;default:r=t[1]/e.width}return{x:r,y:n}},createPlaceholder:function(t){var e,n=t.css("position"),r=t.position();return t.css({marginTop:t.css("marginTop"),marginBottom:t.css("marginBottom"),marginLeft:t.css("marginLeft"),marginRight:t.css("marginRight")}).outerWidth(t.outerWidth()).outerHeight(t.outerHeight()),/^(static|relative)/.test(n)&&(n="absolute",e=u("<"+t[0].nodeName+">").insertAfter(t).css({display:/^(inline|ruby)/.test(t.css("display"))?"inline-block":"block",visibility:"hidden",marginTop:t.css("marginTop"),marginBottom:t.css("marginBottom"),marginLeft:t.css("marginLeft"),marginRight:t.css("marginRight"),float:t.css("float")}).outerWidth(t.outerWidth()).outerHeight(t.outerHeight()).addClass("ui-effects-placeholder"),t.data(w+"placeholder",e)),t.css({position:n,left:r.left,top:r.top}),e},removePlaceholder:function(t){var e=w+"placeholder",n=t.data(e);n&&(n.remove(),t.removeData(e))},cleanUp:function(t){u.effects.restoreStyle(t),u.effects.removePlaceholder(t)},setTransition:function(r,t,i,o){return o=o||{},u.each(t,function(t,e){var n=r.cssUnit(e);0<n[0]&&(o[e]=n[0]*i+n[1])}),o}}),u.fn.extend({effect:function(){function t(t){var e=u(this),n=u.effects.mode(e,a)||o;e.data(_,!0),c.push(n),o&&("show"===n||n===o&&"hide"===n)&&e.show(),o&&"none"===n||u.effects.saveStyle(e),u.isFunction(t)&&t()}var r=T.apply(this,arguments),i=u.effects.effect[r.effect],o=i.mode,e=r.queue,n=e||"fx",s=r.complete,a=r.mode,c=[];return u.fx.off||!i?a?this[a](r.duration,s):this.each(function(){s&&s.call(this)}):!1===e?this.each(t).each(f):this.queue(n,t).queue(n,f);function f(t){var e=u(this);function n(){u.isFunction(s)&&s.call(e[0]),u.isFunction(t)&&t()}r.mode=c.shift(),!1===u.uiBackCompat||o?"none"===r.mode?(e[a](),n()):i.call(e[0],r,function(){e.removeData(_),u.effects.cleanUp(e),"hide"===r.mode&&e.hide(),n()}):(e.is(":hidden")?"hide"===a:"show"===a)?(e[a](),n()):i.call(e[0],r,n)}},show:(x=u.fn.show,function(t){if(F(t))return x.apply(this,arguments);var e=T.apply(this,arguments);return e.mode="show",this.effect.call(this,e)}),hide:(y=u.fn.hide,function(t){if(F(t))return y.apply(this,arguments);var e=T.apply(this,arguments);return e.mode="hide",this.effect.call(this,e)}),toggle:(r=u.fn.toggle,function(t){if(F(t)||"boolean"==typeof t)return r.apply(this,arguments);var e=T.apply(this,arguments);return e.mode="toggle",this.effect.call(this,e)}),cssUnit:function(t){var n=this.css(t),r=[];return u.each(["em","px","%","pt"],function(t,e){0<n.indexOf(e)&&(r=[parseFloat(n),e])}),r},cssClip:function(t){return t?this.css("clip","rect("+t.top+"px "+t.right+"px "+t.bottom+"px "+t.left+"px)"):W(this.css("clip"),this)},transfer:function(t,e){var n=u(this),r=u(t.to),i="fixed"===r.css("position"),o=u("body"),s=i?o.scrollTop():0,a=i?o.scrollLeft():0,o=r.offset(),o={top:o.top-s,left:o.left-a,height:r.innerHeight(),width:r.innerWidth()},r=n.offset(),c=u("<div class='ui-effects-transfer'></div>").appendTo("body").addClass(t.className).css({top:r.top-s,left:r.left-a,height:n.innerHeight(),width:n.innerWidth(),position:i?"fixed":"absolute"}).animate(o,t.duration,t.easing,function(){c.remove(),u.isFunction(e)&&e()})}}),u.fx.step.clip=function(t){t.clipInit||(t.start=u(t.elem).cssClip(),"string"==typeof t.end&&(t.end=W(t.end,t.elem)),t.clipInit=!0),u(t.elem).cssClip({top:t.pos*(t.end.top-t.start.top)+t.start.top,right:t.pos*(t.end.right-t.start.right)+t.start.right,bottom:t.pos*(t.end.bottom-t.start.bottom)+t.start.bottom,left:t.pos*(t.end.left-t.start.left)+t.start.left})},C={},u.each(["Quad","Cubic","Quart","Quint","Expo"],function(e,t){C[t]=function(t){return Math.pow(t,e+2)}}),u.extend(C,{Sine:function(t){return 1-Math.cos(t*Math.PI/2)},Circ:function(t){return 1-Math.sqrt(1-t*t)},Elastic:function(t){return 0===t||1===t?t:-Math.pow(2,8*(t-1))*Math.sin((80*(t-1)-7.5)*Math.PI/15)},Back:function(t){return t*t*(3*t-2)},Bounce:function(t){for(var e,n=4;t<((e=Math.pow(2,--n))-1)/11;);return 1/Math.pow(4,3-n)-7.5625*Math.pow((3*e-2)/22-t,2)}}),u.each(C,function(t,e){u.easing["easeIn"+t]=e,u.easing["easeOut"+t]=function(t){return 1-e(1-t)},u.easing["easeInOut"+t]=function(t){return t<.5?e(2*t)/2:1-e(-2*t+2)/2}}),u.effects});;(function( $ ) {
$.fn.PGresponsiveMenu = function () {
	$(this).each(function () {
		$(this).addClass("pg-horizontal-responsive-menu");
		alignMenu(this);
		var robj = this;
		$(window).resize(function () {
			$(robj).append($($($(robj).children("li.hideshow")).children("ul")).html());
			$(robj).children("li.hideshow").remove();
			alignMenu(robj);
		});

		function alignMenu(obj) {
		  
		    
			var w = 0;
			var mw = $(obj).width() + 210;
			var i = -1;
			var menuhtml = '';
			$.each($(obj).children(), function () {
				i++;
				w += $(this).outerWidth(true);
				if (mw < w) {
					menuhtml += $('<div>').append($(this).clone()).html();
					$(this).remove();
				}
			});
                        if(menuhtml!='')
                        {
                            $(obj).append('<li  style="position:relative;" href="#" class="hideshow">' + '<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> ' + '</a><ul>' + menuhtml + '</ul></li>');
                            $(obj).children("li.hideshow ul").css("top", $(obj).children("li.hideshow").outerHeight(true) + "px");
                        }
			$(obj).children("li.hideshow").click(function () {
				$(this).children("ul").toggle();
			});  
			
                        $('li.hideshow ul li.pm-profile-tab a').click(function(){
                            var t = $(this).attr('href');
                            $('li.pm-profile-tab a').removeClass('active');         
                            $(this).addClass('active');
                            $('.pg-profile-tab-content').hide();
                            $(t).find('.pm-section-content:first').show();
                            $('li.hideshow ul').hide();
                            $(t).fadeIn('slow');
                            return false;
                        });
		}
	});
        
        setTimeout(function(){
        $(".pg-horizontal-responsive-menu li.hideshow ul:empty").closest('.pg-horizontal-responsive-menu li.hideshow').hide();
            var pmDomColor = $(".pmagic").find("a").css('color');
            $(".pg-horizontal-responsive-menu li.hideshow").css('fill', pmDomColor);
            
            },1000);
}

})(jQuery);
;var pm_ajax_object = {"ajax_url":"http:\/\/localhost\/profilegrid\/wp-admin\/admin-ajax.php","plugin_emoji_url":"http:\/\/localhost\/profilegrid\/wp-content\/plugins\/profilegrid-optimization\/public\/partials\/images\/img"};
var pm_error_object = {"valid_email":"Please enter a valid e-mail address.","valid_number":"Please enter a valid number.","valid_date":"Please enter a valid date(yyyy-mm-dd format).","required_field":"This is a required field.","required_comman_field":"Please fill all the required fields.","file_type":"This file type is not allowed.","short_password":"Your password should be at least 7 characters long.","pass_not_match":"Password and confirm password do not match.","user_exist":"Sorry, username already exists.","email_exist":"Sorry, email already exists.","show_more":"More...","show_less":"Show less","user_not_exit":"Username does not exists.","password_change_successfully":"Password changed Successfully","allow_file_ext":"jpg|jpeg|png|gif","valid_phone_number":"Please enter a valid phone number.","valid_mobile_number":"Please enter a valid mobile number.","valid_facebook_url":"Please enter a valid Facebook url.","valid_twitter_url":"Please enter a Twitter url.","valid_google_url":"Please enter a valid Google url.","valid_linked_in_url":"Please enter a Linked In url.","valid_youtube_url":"Please enter a valid Youtube url.","valid_mixcloud_url":"Please enter a valid Mixcloud url.","valid_soundcloud_url":"Please enter a valid SoundCloud url.","valid_instagram_url":"Please enter a valid Instagram url.","crop_alert_error":"Please select a crop region then press submit.","admin_note_error":"Unable to add an empty note. Please write something and try again.","empty_message_error":"Unable to send an empty message. Please type something.","invite_limit_error":"Only ten users can be invited at a time.","no_more_result":"No More Result Found","delete_friend_request":"This will delete friend request from selected user(s). Do you wish to continue?","remove_friend":"This will remove selected user(s) from your friends list. Do you wish to continue?","accept_friend_request_conf":"This will accept request from selected user(s). Do you wish to continue?","cancel_friend_request":"This will cancel request from selected user(s). Do you wish to continue?","next":"Next","back":"Back","submit":"Submit","empty_chat_message":"I am sorry, I can't send an empty message. Please write something and try sending it again.","login_url":"http:\/\/localhost\/profilegrid\/login\/?password=changed"};;function pm_change_search_field(a)
{
    var group = a;
    var data ={'action':'pm_advance_search_get_search_fields_by_gid', 'gid' : group, 'match_fields': ' '};
    jQuery.post(pm_ajax_object.ajax_url, data, function (response){
       if(response){
           jQuery('#advance_seach_ul').empty();
         jQuery('#advance_seach_ul').append(response);
         pm_advance_user_search('');

     }else{
           //console.log("err");
       }

    });
}
function pm_remove_attachment(obj,key,value)
{
    jQuery('#pm-edit-group-popup, .pm-popup-mask, .pg-blog-dialog-mask').toggle();
    ( function($) {
        $( "#pg-remove-attachment-dialog" ).dialog({
          resizable: false,
          height: "auto",
          width: 400,
          modal: true,
          buttons: {
            "Yes": function() {
                
                var data = {
                        'action': 'pm_remove_attachment',
                        'key': key,
                        'value':value
                };
                $.post(pm_ajax_object.ajax_url, data, function(response) {
                    if(response)
                    {
                        $(obj).parent('a').parent('span.pm_frontend_attachment').remove();
                    }
                });

                $( this ).dialog( "close" );
            },
            "No": function() {
              $( this ).dialog( "close" );
            }
          }
        });
    } )(jQuery);
}

function pm_expand_all_conent()
{
	jQuery("#pm-accordion .pm-accordian-content").show();	
}

function pm_collapse_all_conent()
{
	jQuery("#pm-accordion .pm-accordian-content").hide();	
}
 
function pm_show_hide(obj,primary,secondary,trinary)
{	
	a = jQuery(obj).is(':checked');
	if (a == true)
	 {
		jQuery('#'+primary).show(500);
		if(secondary!='')
		{
			jQuery('#'+secondary).hide(500);
		}
		if(trinary!='')
		{
			jQuery('#'+trinary).hide(500);
		}		
	}
	else 
	{
		jQuery('#'+primary).hide(500);
		if(secondary!='')
		{
			jQuery('#'+secondary).show(500);
		}
		if(trinary!='')
		{
			jQuery('#'+trinary).show(500);
		}
	}
	
}

function pm_add_repeat(obj)
{
	a= jQuery(obj).parent('a').parent('div.pm_repeat').clone();
	jQuery(a).children('input').val('');
	jQuery(obj).parent('a').parent('div.pm_repeat').parent('div.pm-field-input').append(a);
}

function pm_remove_repeat(obj)
{
	jQuery(obj).parent('a').parent('div.pm_repeat').remove();
}

function validate_phone_number2(number)
{
    var isnumber = jQuery.isNumeric(number);
    var regex = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
    var phone_num = number.replace(/[^\d]/g, '');
    if ( number != "")
    {
//        if(isnumber == false )
//        return false;
    
    if(phone_num.length <10 || phone_num.length > 13)
        return false;
    
//    if(!regex.test(number))
//        return false;
    
    return true;
    }else
    {
        return true;
    }
   

}

function validate_phone_number(number) {
    if(number!=""){
    var phone_num = number.replace(/[^\d]/g, '');
    var a = number;
       var phone_num = number.replace(/[^\d]/g, '');
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)&&(phone_num.length >=10 && phone_num.length <= 13)) {
        //console.log(phone_num);
        return true;
    }
    else {
        return false;
    }
    }else{
        return true;
    }
}

function validate_facebook_url(val)
{
    if (val != "") {
        if (/(?:https?:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*?(\/)?([\w\-\.]*)/i.test(val))
        {
            return true;
        } else
        {
            return false;
        }
    } else {
        return true;
    }

}

function validate_twitter_url(val)
{
    if (val != '') {
        if (/(ftp|http|https):\/\/?((www|\w\w)\.)?twitter.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(val)) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

function validate_google_url(val)
{
    if (val != '') {
        if (/((http:\/\/(plus\.google\.com\/.*|www\.google\.com\/profiles\/.*|google\.com\/profiles\/.*))|(https:\/\/(plus\.google\.com\/.*)))/i.test(val)) {
            return true;
        } else {
            return false;
        }

    } else {
        return true;
    }
}

function validate_linked_in_url(val)
{
    if (val != '') {
        if (/(ftp|http|https):\/\/?((www|\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(val)) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

function validate_youtube_url(val)
{
    if (val != '') {
        if (/(ftp|http|https):\/\/?((www|\w\w)\.)?youtube.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(val)) {
            return true;
        } else {
            return false;
        }

    } else {
        return true;
    }
}

function validate_soundcloud_url(val)
{
    if (val != '') {
        if (/(ftp|http|https):\/\/?((www|\w\w)\.)?soundcloud.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(val)) {
            return true;
        } else {
            return false;
        }

    } else {
        return true;
    }
}

function validate_mixcloud_url(val)
{
    if (val != '') {
        if (/(ftp|http|https):\/\/?((www|\w\w)\.)?mixcloud.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/i.test(val)) {
            return true;
        } else {
            return false;
        }

    } else {
        return true;
    }
}

function validate_instagram_url(val)
{
    if (val != '') {
        var regex = /(?:(?:http|https):\/\/)?(?:www.)?(?:instagram.com|instagr.am)\/([A-Za-z0-9-_]+)/;
        if (val.match(regex)) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

function profile_magic_frontend_validation(form)
{
	
	var email_val = "";
	var formid = form.id;
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	jQuery('.errortext').html('');
	jQuery('.errortext').hide();
	jQuery('.all_errors').html('');
	jQuery('.warning').removeClass('warning');

        jQuery('#'+formid+' .pm_email').each(function (index, element) {
		var email = jQuery(this).children('input').val();
		var isemail = regex.test(email);
		if (isemail == false && email != "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_email);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_number').each(function (index, element) {
		var number = jQuery(this).children('input').val();
		var isnumber = jQuery.isNumeric(number);
		if (isnumber == false && number != "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_number);
			jQuery(this).children('.errortext').show();
		}
	});
	
        	
	jQuery('#'+formid+' .pm_phone_number').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_phone_number(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_phone_number);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_mobile_number').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_phone_number(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_mobile_number);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_facebook_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_facebook_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_facebook_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_twitter_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_twitter_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_twitter_url);
			jQuery(this).children('.errortext').show();
		}
	});

            
        jQuery('#'+formid+' .pm_google_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_google_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_google_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
                
        jQuery('#'+formid+' .pm_linked_in_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_linked_in_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_linked_in_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
                
        jQuery('#'+formid+' .pm_youtube_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_youtube_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_youtube_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_mixcloud_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_mixcloud_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_mixcloud_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_soundcloud_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_soundcloud_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_soundcloud_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
                
        jQuery('#'+formid+' .pm_instagram_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_instagram_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_instagram_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
	jQuery('#'+formid+' .pm_datepicker').each(function (index, element) {
		var date = jQuery(this).children('input').val();
		var pattern = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/;
                if (date != "" && !pattern.test(date)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_date);
			jQuery(this).children('.errortext').show();
		}
            
	});
	
	jQuery('#'+formid+' .pm_required').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_select_required').each(function (index, element) {
		var value = jQuery(this).children('select').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('select').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
        
	jQuery('#'+formid+' .pm_rich_editor_required').each(function (index, element) {
           
	});
        
	jQuery('#'+formid+' .pm_textarearequired').each(function (index, element) {
		var value = jQuery(this).children('textarea').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('textarea').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_checkboxrequired').each(function (index, element) {
		var checkboxlenght = jQuery(this).children('.pmradio').children('.pm-radio-option').children('input[type="checkbox"]:checked');
		var atLeastOneIsChecked = checkboxlenght.length > 0;
		if (atLeastOneIsChecked == true) {
		}else{
			//jQuery(this).children('textarea').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_radiorequired').each(function (index, element) {
		var checkboxlenght = jQuery(this).children('.pmradio').children('.pm-radio-option').children('input[type="radio"]:checked');
		var atLeastOneIsChecked = checkboxlenght.length > 0;
		if (atLeastOneIsChecked == true) {
		}else{
			//jQuery(this).children('textarea').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_fileinput .pm_repeat').each(function (index, element) {
		var val = jQuery(this).children('input').val().toLowerCase();
		var allowextensions = jQuery(this).children('input').attr('data-filter-placeholder');
		if(allowextensions=='')
		{
			allowextensions = pm_error_object.allow_file_ext;
		}
		
		allowextensions = allowextensions.toLowerCase();
		var regex = new RegExp("(.*?)\.(" + allowextensions + ")$");
		if(!(regex.test(val)) && val!="") {
		
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.file_type);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_repeat_required .pm_repeat').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_user_pass').each(function (index, element) {
		var password = jQuery(this).children('input').val();
		var passwordlength = password.length;
		if(password !="")
		{
			if(passwordlength < 7)
			{
				jQuery(this).children('input').addClass('warning');
				jQuery(this).children('.errortext').html(pm_error_object.short_password);
				jQuery(this).children('.errortext').show();
			}
		}
	});
	
	jQuery('#'+formid+' .pm_confirm_pass').each(function (index, element) {
		var confirm_pass = jQuery(this).children('input').val();
		var password = password = jQuery('#'+formid+' .pm_user_pass').children('input').val();
		if(password != confirm_pass)
		{
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.pass_not_match);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_recaptcha').each(function (index, element) {
		var response = grecaptcha.getResponse();
				//recaptcha failed validation
		if (response.length == 0) {
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	var b = '';
	 jQuery('#'+formid+' .errortext').each(function () {
		var a = jQuery(this).html();
		b = a + b;
	});
	
	if (jQuery('#'+formid+' .usernameerror').length > 0) 
		{
			c = jQuery('.usernameerror').html();
			b = c + b;
		}
		
		if (jQuery('#'+formid+' .useremailerror').length > 0) 
		{
			d = jQuery('.useremailerror').html();
			b = d + b;
		}
	jQuery('#'+formid+' .all_errors').html(b);
	var error = jQuery('#'+formid+' .all_errors').html();
	if (error == '') {
		return true;
	} else {
		return false;
	}
}

function pm_frontend_check_username(formid)
{
	jQuery('.pm_user_name').each(function (index, element) {
			var field = this;
			var username = jQuery(this).children('input').val();
			var data = {
							'action': 'pm_check_user_exist',
							'type': 'validateUserName',
							'userdata' : username
						};
		// We can also pass the url value separately from ajaxurl for front end AJAX implementations
			jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
				if(response=="true")
				{
					jQuery(field).children('input').addClass('warning');
					jQuery(field).children('.usernameerror').html(pm_error_object.user_exist);
					jQuery(field).children('.usernameerror').show();
				}
				else
				{
					jQuery(field).children('input').removeClass('warning');
					jQuery(field).children('.usernameerror').html('');
					jQuery(field).children('.usernameerror').hide();
				}
				
			});		
		});	
}

function pm_frontend_check_useremail(previous)
{
	jQuery('.pm_user_email').each(function (index, element) {
		var field = this;
		var username = jQuery(this).children('input').val();
		var data = {
						'action': 'pm_check_user_exist',
						'type': 'validateUserEmail',
						'userdata' : username,
                                                'previous_data':previous
					};
	// We can also pass the url value separately from ajaxurl for front end AJAX implementations
		jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
			if(response=="true")
			{
				jQuery(field).children('input').addClass('warning');
				jQuery(field).children('.useremailerror').html(pm_error_object.email_exist);
				jQuery(field).children('.useremailerror').show();
			}
			else
			{
				jQuery(field).children('input').removeClass('warning');
				jQuery(field).children('.useremailerror').html('');
				jQuery(field).children('.useremailerror').hide();	
			}
		});		
	});
}

function pm_frontend_change_password(form)
{
	var pass1 = jQuery(form).children('.pmrow').children('.pm-col').children('.pm-field-input').children('#pass1').val();	
        var pass2 = jQuery(form).children('.pmrow').children('.pm-col').children('.pm-field-input').children('#pass2').val();	
	var userid = jQuery(form).children('#user_id').val();
        jQuery('#pm_reset_passerror').removeClass('pm_password_error');
        jQuery('#pm_reset_passerror').removeClass('pm_password_success');
	var data = {'action': 'pm_change_frontend_user_pass','pass1': pass1,'pass2' : pass2};
	// We can also pass the url value separately from ajaxurl for front end AJAX implementations
		jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
			if(response==true)
			{
                            jQuery('#pm_reset_passerror').addClass('pm_password_success');
				jQuery('#pm_reset_passerror').html(pm_error_object.password_change_successfully);
				jQuery('#pm_reset_passerror').show();
                                window.location = pm_error_object.login_url;
                        }
                        else
                        {
                            
                            jQuery('#pm_reset_passerror').addClass('pm_password_error');
                            jQuery('#pm_reset_passerror').html(response);
			    jQuery('#pm_reset_passerror').show();
                        }
		});		
	return false;
}

var searchRequest = null; 
function pm_advance_user_search(pagenum)
{


    var form = jQuery("#pm-advance-search-form");
    jQuery("#pm_result_pane").html('<div class="pm-loader"></div>');
    var pmDomColor = jQuery(".pmagic").find("a").css('color');
    jQuery(".pm-loader").css('border-top-color', pmDomColor);
  


       
       
    if(pagenum!== '')
    {
            if(pagenum=='Reset')
            {
                form.trigger('reset');
                jQuery('#advance_search_pane').hide(200);
                jQuery('#pagenum').attr("value",1);
                jQuery('input[type=checkbox]').attr("checked",false);
                pm_change_search_field('');
            }
            else
            {
                jQuery('#pagenum').attr("value",pagenum);
            }
        
    }
    else
    {
         jQuery('#pagenum').attr("value",1);
    }
    var form_values = form.serializeArray();

    var data = {};

    //creating data in object format and array for multiple checkbox
    jQuery.each(form_values, function () {
        if (data[this.name] !== undefined) {
            if (!data[this.name].push) {
                data[this.name] = [data[this.name]];
            }
            data[this.name].push(this.value);
        } else {
            data[this.name] = this.value;
        }
    });
    //console.log(data);
   
    if(searchRequest != null)
        searchRequest.abort();
        //ajax call start
    searchRequest =    jQuery.post(pm_ajax_object.ajax_url, data, function (resp) 
        {
        
                if (resp)
                {   
                    jQuery("#pm_result_pane").html(resp);
                    
        var pmDomColor = jQuery(".pmagic").find("a").css('color');
        jQuery(".pm-color").css('color', pmDomColor);
        jQuery( ".page-numbers.current" ).css('background', pmDomColor); 
                } 
                else
                {
                    //console.log("err");
                }
            
         });
         //ajax call ends here
         
         


}

function profile_magic_send_email(userid)
{
    var data = {'action': 'pm_send_change_pass_email','userid': userid};
	// We can also pass the url value separately from ajaxurl for front end AJAX implementations
		jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
                    
		});		
	return false;
}

function profile_magic_multistep_form_validation(form)
{
	
	var email_val = "";
	var formid = form.attr('id');
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	jQuery('.errortext').html('');
	jQuery('.errortext').hide();
	jQuery('.all_errors').html('');
	jQuery('.warning').removeClass('warning');
jQuery('#'+formid+' .pm_email').each(function (index, element) {
		var email = jQuery(this).children('input').val();
		var isemail = regex.test(email);
		if (isemail == false && email != "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_email);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_number').each(function (index, element) {
		var number = jQuery(this).children('input').val();
		var isnumber = jQuery.isNumeric(number);
		if (isnumber == false && number != "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_number);
			jQuery(this).children('.errortext').show();
		}
	});
	
        jQuery('#'+formid+' .pm_phone_number').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_phone_number(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_phone_number);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_mobile_number').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_phone_number(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_mobile_number);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_facebook_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_facebook_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_facebook_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_twitter_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_twitter_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_twitter_url);
			jQuery(this).children('.errortext').show();
		}
	});

            
        jQuery('#'+formid+' .pm_google_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_google_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_google_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
                
        jQuery('#'+formid+' .pm_linked_in_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_linked_in_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_linked_in_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
                
        jQuery('#'+formid+' .pm_youtube_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_youtube_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_youtube_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_mixcloud_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_mixcloud_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_mixcloud_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_soundcloud_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_soundcloud_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_soundcloud_url);
			jQuery(this).children('.errortext').show();
		}
	});
                
        jQuery('#'+formid+' .pm_instagram_url').each(function (index, element) {
		var number = jQuery(this).children('input').val();
                if (!validate_instagram_url(number)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_instagram_url);
			jQuery(this).children('.errortext').show();
		}
	});
        
	jQuery('#'+formid+' .pm_datepicker').each(function (index, element) {
		var date = jQuery(this).children('input').val();
		var pattern = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/;
    	if (date != "" && !pattern.test(date)) {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_date);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_required').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_select_required').each(function (index, element) {
		var value = jQuery(this).children('select').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('select').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_textarearequired').each(function (index, element) {
		var value = jQuery(this).children('textarea').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('textarea').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_checkboxrequired').each(function (index, element) {
		var checkboxlenght = jQuery(this).children('.pmradio').children('.pm-radio-option').children('input[type="checkbox"]:checked');
		var atLeastOneIsChecked = checkboxlenght.length > 0;
		if (atLeastOneIsChecked == true) {
		}else{
			//jQuery(this).children('textarea').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_radiorequired').each(function (index, element) {
		var checkboxlenght = jQuery(this).children('.pmradio').children('.pm-radio-option').children('input[type="radio"]:checked');
		var atLeastOneIsChecked = checkboxlenght.length > 0;
		if (atLeastOneIsChecked == true) {
		}else{
			//jQuery(this).children('textarea').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_fileinput .pm_repeat').each(function (index, element) {
		var val = jQuery(this).children('input').val().toLowerCase();
		var allowextensions = jQuery(this).children('input').attr('data-filter-placeholder');
		if(allowextensions=='')
		{
			allowextensions = pm_error_object.allow_file_ext;
		}
		
		allowextensions = allowextensions.toLowerCase();
		var regex = new RegExp("(.*?)\.(" + allowextensions + ")$");
		if(!(regex.test(val)) && val!="") {
		
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.file_type);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_repeat_required .pm_repeat').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_user_pass').each(function (index, element) {
		var password = jQuery(this).children('input').val();
		var passwordlength = password.length;
		if(password !="")
		{
			if(passwordlength < 7)
			{
				jQuery(this).children('input').addClass('warning');
				jQuery(this).children('.errortext').html(pm_error_object.short_password);
				jQuery(this).children('.errortext').show();
			}
		}
	});
	
	jQuery('#'+formid+' .pm_confirm_pass').each(function (index, element) {
		var confirm_pass = jQuery(this).children('input').val();
		var password = password = jQuery('#'+formid+' .pm_user_pass').children('input').val();
		if(password != confirm_pass)
		{
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.pass_not_match);
			jQuery(this).children('.errortext').show();
		}
	});
	
	jQuery('#'+formid+' .pm_recaptcha').each(function (index, element) {
		var response = grecaptcha.getResponse();
				//recaptcha failed validation
		if (response.length == 0) {
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
	
	var all_errors = '';
	jQuery('#'+formid+' .errortext').each(function () {
		var a = jQuery(this).html();
		all_errors = a + all_errors;
	});
		if (jQuery('#'+formid+' .usernameerror').length > 0) 
		{
			c = jQuery('.usernameerror').html();
			if(jQuery.trim(c)!='')
			jQuery('.pm_user_name').children('input').addClass('warning');
			all_errors = c + all_errors;
		}
		
		if (jQuery('#'+formid+' .useremailerror').length > 0) 
		{
			d = jQuery('.useremailerror').html();
			if(jQuery.trim(d)!='')
			jQuery('.pm_user_email').children('input').addClass('warning');
			all_errors = d + all_errors;
		}
	jQuery('#'+formid+' .all_errors').html(all_errors);
	var error = jQuery('#'+formid+' .all_errors').html();
	if (error == '') {
		return true;
	} else {
		return false;
	}
}

function openParentTab() 
{
	locationHash = location.hash.substring( 1 );
	//console.log(locationHash);
	// Check if we have an location Hash
	if (locationHash) {
		// Check if the location hash exsist.
		var hash = jQuery('#'+locationHash);
		if (hash.length) {
			 var t = hash;
                        jQuery('li.pm-profile-tab a').removeClass('active');         
                        jQuery(this).addClass('active');
                        jQuery('.pg-profile-tab-content').hide();
                        jQuery(t).find('.pm-section-content:first').show();
                        jQuery('li.hideshow ul').hide();
                        jQuery(t).fadeIn('slow');
                        return false;
		}
	}
}

function generateTabs(tabs) { 

	html = '';
	for (var i in tabs) { 
		tab = tabs[i];
		html = html + '<li class="multipage_tab"><a href="#" onclick="return jQuery(\'#multipage\').gotopage(' + tab.number + ');">' + tab.title + '</a></li>';				
	}
	jQuery('<ul class="multipage_tabs" id="multipage_tabs">'+html+'<div class="clearer"></div></ul>').insertBefore('#multipage');
}
function setActiveTab(selector,page) { 
	jQuery('#multipage_tabs li').each(function(index){ 
		if ((index+1)==page) { 
			jQuery(this).addClass('active');
		} else {
			jQuery(this).removeClass('active');
		}
	});			
}
		
function transition(from,to) {
	jQuery(from).fadeOut('fast',function(){jQuery(to).fadeIn('fast');});

}
function textpages(obj,page,pages) { 
	jQuery(obj).html(page + ' of ' + pages);
}

function pm_user_image_validation(a)
{
	var val = jQuery(a).children('.pm-user-image').val().toLowerCase();
	if(val=='')
	{
		jQuery(a).children('pm-user-image').addClass('warning');
		jQuery(a).children('.pm-popup-error').html(pm_error_object.required_field);
		jQuery(a).children('.pm-popup-error').show();
		return false;
	}
	
	var allowextensions = 'jpg|jpeg|png|gif';
	if(allowextensions=='')
	{
		allowextensions = pm_error_object.allow_file_ext;
	}
	allowextensions = allowextensions.toLowerCase();
	var regex = new RegExp("(.*?)\.(" + allowextensions + ")$");
	if(!(regex.test(val)) && val!="") {
		jQuery(a).children('pm-user-image').addClass('warning');
		jQuery(a).children('.pm-popup-error').html(pm_error_object.file_type);
		jQuery(a).children('.pm-popup-error').show();
		return false;
	}
	else
	{
		jQuery(a).children('.pm-popup-error').html('');
		jQuery(a).children('.pm-popup-error').hide();
		return true;
	}
}





//GUI Functions
function callPmPopup(dialog) {
    var pmId = dialog + "-dialog";
    jQuery(pmId).siblings('.pm-popup-mask').show();
    jQuery(pmId).show();
    jQuery('.pm-popup-container').css("animation", "pm-popup-in 0.3s ease-out 1");
}




function profile_magic_blogpost_validation()
{
	jQuery('.errortext').html('');
	jQuery('.errortext').hide();
	jQuery('.all_errors').html('');
	jQuery('.warning').removeClass('warning');
        jQuery('#pm_add_blog_post .pm_required').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#pm_add_blog_post .pm_fileinput .pm_repeat').each(function (index, element) {
		var val = jQuery(this).children('input').val().toLowerCase();
		var allowextensions = 'jpg|jpeg|png|gif';
		if(allowextensions=='')
		{
			allowextensions = pm_error_object.allow_file_ext;
		}
		
		allowextensions = allowextensions.toLowerCase();
		var regex = new RegExp("(.*?)\.(" + allowextensions + ")$");
		if(!(regex.test(val)) && val!="") {
		
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.file_type);
			jQuery(this).children('.errortext').show();
		}
	});
        var all_errors = '';
	jQuery('#pm_add_blog_post .errortext').each(function () {
		var a = jQuery(this).html();
		all_errors = a + all_errors;
	});
        jQuery('#pm_add_blog_post .all_errors').html(all_errors);
	var error = jQuery('#pm_add_blog_post .all_errors').html();
	if (error == '') {
            
            jQuery('input[name="pg_blog_submit"]').attr('disabled','disabled');
		return true;
	} else {
		return false;
	}
}

function load_more_pg_blogs(uid)
{
    jQuery('.pm-load-more-blogs').hide();
    jQuery('.pg-load-more-container .pm-loader').show();
    var page = parseInt(jQuery('#pg_next_blog_page').val());
    var nextpage = page +1;
    var data = {action: 'pm_load_pg_blogs', 'uid': uid,'page':page};
    jQuery.post(pm_ajax_object.ajax_url, data, function (response) {
        if(response)
        {
            jQuery('.pg-load-more-container .pm-loader').hide();
            jQuery('#pg_next_blog_page').val(nextpage);
            jQuery('#pg-blog-container').append(response);
        }
    });

}

function load_more_user_blogs_shortcode_posts(authors,posttypes)
{
    jQuery('.pm-load-more-blogs').hide();
    jQuery('.pg-load-more-container .pm-loader').show();
    var page = parseInt(jQuery('#pg_next_blog_page').val());
    var nextpage = page +1;
    var data = {action: 'pm_load_user_blogs_shortcode_posts',authors: authors, posttypes:posttypes, page:page};
    jQuery.post(pm_ajax_object.ajax_url, data, function (response) {
        if(response)
        {
            jQuery('.pg-load-more-container .pm-loader').hide();
            jQuery('#pg_next_blog_page').val(nextpage);
            jQuery('#pg-user-blog-container').append(response);
        }
    });

}



function pm_delete_account_setting(form)
{
        var formid = form.id;
        jQuery('#'+formid+' .errortext').html('');
	jQuery('#'+formid+' .errortext').hide();
	jQuery('#'+formid+' .all_errors').html('');
	jQuery('#'+formid+' .warning').removeClass('warning');
        jQuery('#'+formid+' .pm_required').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
        var all_errors = '';
	jQuery('#'+formid+' .errortext').each(function () {
		var a = jQuery(this).html();
		all_errors = a + all_errors;
	});
        
        jQuery('#'+formid+' .all_errors').html(all_errors);
	var error = jQuery('#'+formid+' .all_errors').html();
	if (error == '') 
        {
		return true;
	} 
        else 
        {
		return false;
	}
        
}
function pm_save_account_setting(form)
{
    var email_val = "";
    var formid = form.id;
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    jQuery('#'+formid+' .errortext').html('');
	jQuery('#'+formid+' .errortext').hide();
	jQuery('#'+formid+' .all_errors').html('');
	jQuery('#'+formid+' .warning').removeClass('warning');
        jQuery('#'+formid+' .pm_required').each(function (index, element) {
		var value = jQuery(this).children('input').val();
		var value = jQuery.trim(value);
		if (value == "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.required_field);
			jQuery(this).children('.errortext').show();
		}
	});
        
        jQuery('#'+formid+' .pm_email').each(function (index, element) {
		var email = jQuery(this).children('input').val();
		var isemail = regex.test(email);
		if (isemail == false && email != "") {
			jQuery(this).children('input').addClass('warning');
			jQuery(this).children('.errortext').html(pm_error_object.valid_email);
			jQuery(this).children('.errortext').show();
		}
	});
	
        var all_errors = '';
	jQuery('#'+formid+' .errortext').each(function () {
		var a = jQuery(this).html();
		all_errors = a + all_errors;
	});
        
        jQuery('#'+formid+' .all_errors').html(all_errors);
	var error = jQuery('#'+formid+' .all_errors').html();
	if (error == '') 
        {
		return true;
	} 
        else 
        {
		return false;
	}
        
}

(function PG_mobile_resposve ($) {
    var $window = $(window),
        $html = $('html'),
        $is_resize = 0;
        

    $window.resize(function resize() {
        if ($window.width() < 479) {
            if($is_resize==0)
            {
                show_pg_section_left_panel();
                $is_resize = 1;
            }
            
            return $html.addClass('pg-mobile-479');
        }
        else
        {
            $('.pm-section-left-panel').show();
            $('.pm-section-right-panel').show();
        }

        $html.removeClass('pg-mobile-479');
        
        if ($window.width() < 760) {
            return $html.addClass('pg-mobile-760');
            
        }
        
        $html.removeClass('pg-mobile-760');
        
        
         if ($window.width() < 979) {
            return $html.addClass('pg-mobile-979');
            
        }

        $html.removeClass('pg-mobile-979');
        
    }).trigger('resize');
})(jQuery);

function show_pg_section_right_panel()
{
    jQuery(".pg-mobile-479 .pm-section-right-panel").show();
		// Add by Cravel Start
		console.log('action--05');
		// Add by Cravel End
    jQuery(".pg-mobile-479 .pm-section-left-panel").hide();
    jQuery(".pg-mobile-479 .pg-left-panel-icon").show();
}

function show_pg_section_left_panel()
{
		// Add by Cravel Start
		console.log('action--06');
		// Add by Cravel End
    jQuery(".pg-mobile-479 .pm-section-right-panel").hide();
    jQuery(".pg-mobile-479 .pm-section-left-panel").show();
    jQuery(".pg-mobile-479 .pg-left-panel-icon").hide();
}

function pg_remove_user_group(uid,gid)
{
    var boxid = '#pg-user-group-box-'+gid;
    var data = {action:'pm_remove_user_group',uid:uid,gid:gid};
    jQuery('#pg_edit_group_html_container').html('<div class="pg-edit-group-popup-loader"><div class="pm-loader"></div></div>');
     var pmDomColor = jQuery(".pmagic").find("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);
    jQuery.post(pm_ajax_object.ajax_url, data, function (resp) 
    {
        window.location.reload(true);
       /*if(resp=='success')
       {
            
            jQuery(boxid).remove();
            jQuery('.pm-popup-mask, #pm-edit-group-popup, .pg-blog-dialog-mask').hide();
            

       }*/
    });

}

function pg_open_group_tab()
{
  var child =  jQuery('.pm-profile-tab ul li.pg-group-tab');
var parent = jQuery('ul.pm-profile-tab-wrap');

     var i = 0;
      var tabindex=0;
       jQuery('ul.pm-profile-tab-wrap').children('li').each(function () {
           jQuery(this).find('a').removeClass("active");
        var obj = jQuery(this).find('a[href="#pg-groups"]'); // "this" is the current element in the loop
     if(obj.length)
        {
          jQuery('.pg-profile-tab-content').css("display","none");
          obj.addClass("active");
          tabindex = i;
       }
      
    i++;
  
});
 
 jQuery('#pg-groups').css("display","block");
}
;/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-csscalc-cssfilters-csstransforms-rgba-setclasses !*/
!function(e,n,t){function r(e,n){return typeof e===n}function s(){var e,n,t,s,o,i,a;for(var l in h)if(h.hasOwnProperty(l)){if(e=[],n=h[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=r(n.fn,"function")?n.fn():n.fn,o=0;o<e.length;o++)i=e[o],a=i.split("."),1===a.length?Modernizr[a[0]]=s:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=s),x.push((s?"":"no-")+a.join("-"))}}function o(e){var n=S.className,t=Modernizr._config.classPrefix||"";if(w&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),w?S.className.baseVal=n:S.className=n)}function i(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):w?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function a(e,n){return!!~(""+e).indexOf(n)}function l(){var e=n.body;return e||(e=i(w?"svg":"body"),e.fake=!0),e}function f(e,t,r,s){var o,a,f,u,d="modernizr",c=i("div"),p=l();if(parseInt(r,10))for(;r--;)f=i("div"),f.id=s?s[r]:d+(r+1),c.appendChild(f);return o=i("style"),o.type="text/css",o.id="s"+d,(p.fake?p:c).appendChild(o),p.appendChild(c),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(n.createTextNode(e)),c.id=d,p.fake&&(p.style.background="",p.style.overflow="hidden",u=S.style.overflow,S.style.overflow="hidden",S.appendChild(p)),a=t(c,e),p.fake?(p.parentNode.removeChild(p),S.style.overflow=u,S.offsetHeight):c.parentNode.removeChild(c),!!a}function u(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function d(n,r){var s=n.length;if("CSS"in e&&"supports"in e.CSS){for(;s--;)if(e.CSS.supports(u(n[s]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];s--;)o.push("("+u(n[s])+":"+r+")");return o=o.join(" or "),f("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function c(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function p(e,n,s,o){function l(){u&&(delete z.style,delete z.modElem)}if(o=r(o,"undefined")?!1:o,!r(s,"undefined")){var f=d(e,s);if(!r(f,"undefined"))return f}for(var u,p,m,g,v,y=["modernizr","tspan"];!z.style;)u=!0,z.modElem=i(y.shift()),z.style=z.modElem.style;for(m=e.length,p=0;m>p;p++)if(g=e[p],v=z.style[g],a(g,"-")&&(g=c(g)),z.style[g]!==t){if(o||r(s,"undefined"))return l(),"pfx"==n?g:!0;try{z.style[g]=s}catch(h){}if(z.style[g]!=v)return l(),"pfx"==n?g:!0}return l(),!1}function m(e,n){return function(){return e.apply(n,arguments)}}function g(e,n,t){var s;for(var o in e)if(e[o]in n)return t===!1?e[o]:(s=n[e[o]],r(s,"function")?m(s,t||n):s);return!1}function v(e,n,t,s,o){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+T.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?p(a,n,s,o):(a=(e+" "+E.join(i+" ")+i).split(" "),g(a,n,t))}function y(e,n,r){return v(e,t,t,n,r)}var h=[],C={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){h.push({name:e,fn:n,options:t})},addAsyncTest:function(e){h.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=C,Modernizr=new Modernizr;var x=[],S=n.documentElement,w="svg"===S.nodeName.toLowerCase(),b=C._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];C._prefixes=b,Modernizr.addTest("csscalc",function(){var e="width:",n="calc(10px);",t=i("a");return t.style.cssText=e+b.join(n+e),!!t.style.length});var _="Moz O ms Webkit",T=C._config.usePrefixes?_.split(" "):[];C._cssomPrefixes=T;var P={elem:i("modernizr")};Modernizr._q.push(function(){delete P.elem});var z={style:P.elem.style};Modernizr._q.unshift(function(){delete z.style});var E=C._config.usePrefixes?_.toLowerCase().split(" "):[];C._domPrefixes=E,C.testAllProps=v,C.testAllProps=y;var j="CSS"in e&&"supports"in e.CSS,k="supportsCSS"in e;Modernizr.addTest("supports",j||k),Modernizr.addTest("cssfilters",function(){if(Modernizr.supports)return y("filter","blur(2px)");var e=i("a");return e.style.cssText=b.join("filter:blur(2px); "),!!e.style.length&&(n.documentMode===t||n.documentMode>9)}),Modernizr.addTest("rgba",function(){var e=i("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1}),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&y("transform","scale(1)",!0)}),s(),o(x),delete C.addTest,delete C.addAsyncTest;for(var N=0;N<Modernizr._q.length;N++)Modernizr._q[N]();e.Modernizr=Modernizr}(window,document);;var heartbeatSettings = {"ajaxurl":"\/profilegrid\/wp-admin\/admin-ajax.php","nonce":"2926a4883d"};;/*! This file is auto-generated */
!function(f,w){w.wp=w.wp||{},w.wp.heartbeat=new function(){var e,t,n,a,r=f(document),i={suspend:!1,suspendEnabled:!0,screenId:"",url:"",lastTick:0,queue:{},mainInterval:60,tempInterval:0,originalInterval:0,minimalInterval:0,countdown:0,connecting:!1,connectionError:!1,errorcount:0,hasConnected:!1,hasFocus:!0,userActivity:0,userActivityEvents:!1,checkFocusTimer:0,beatTimer:0};function o(){return(new Date).getTime()}function c(e){var t,n=e.src;if(!n||!/^https?:\/\//.test(n)||(t=w.location.origin||w.location.protocol+"//"+w.location.host,0===n.indexOf(t)))try{if(e.contentWindow.document)return 1}catch(e){}}function s(){i.hasFocus&&!document.hasFocus()?m():!i.hasFocus&&document.hasFocus()&&v()}function u(e,t){var n;if(e){switch(e){case"abort":break;case"timeout":n=!0;break;case"error":if(503===t&&i.hasConnected){n=!0;break}case"parsererror":case"empty":case"unknown":i.errorcount++,2<i.errorcount&&i.hasConnected&&(n=!0)}n&&!b()&&(i.connectionError=!0,r.trigger("heartbeat-connection-lost",[e,t]),wp.hooks.doAction("heartbeat.connection-lost",e,t))}}function l(){var e;i.connecting||i.suspend||(i.lastTick=o(),e=f.extend({},i.queue),i.queue={},r.trigger("heartbeat-send",[e]),wp.hooks.doAction("heartbeat.send",e),e={data:e,interval:i.tempInterval?i.tempInterval/1e3:i.mainInterval/1e3,_nonce:"object"==typeof w.heartbeatSettings?w.heartbeatSettings.nonce:"",action:"heartbeat",screen_id:i.screenId,has_focus:i.hasFocus},"customize"===i.screenId&&(e.wp_customize="on"),i.connecting=!0,i.xhr=f.ajax({url:i.url,type:"post",timeout:3e4,data:e,dataType:"json"}).always(function(){i.connecting=!1,d()}).done(function(e,t,n){var a;e?(i.hasConnected=!0,b()&&(i.errorcount=0,i.connectionError=!1,r.trigger("heartbeat-connection-restored"),wp.hooks.doAction("heartbeat.connection-restored")),e.nonces_expired&&(r.trigger("heartbeat-nonces-expired"),wp.hooks.doAction("heartbeat.nonces-expired")),e.heartbeat_interval&&(a=e.heartbeat_interval,delete e.heartbeat_interval),e.heartbeat_nonce&&"object"==typeof w.heartbeatSettings&&(w.heartbeatSettings.nonce=e.heartbeat_nonce,delete e.heartbeat_nonce),e.rest_nonce&&"object"==typeof w.wpApiSettings&&(w.wpApiSettings.nonce=e.rest_nonce),r.trigger("heartbeat-tick",[e,t,n]),wp.hooks.doAction("heartbeat.tick",e,t,n),a&&I(a)):u("empty")}).fail(function(e,t,n){u(t||"unknown",e.status),r.trigger("heartbeat-error",[e,t,n]),wp.hooks.doAction("heartbeat.error",e,t,n)}))}function d(){var e=o()-i.lastTick,t=i.mainInterval;i.suspend||(i.hasFocus?0<i.countdown&&i.tempInterval&&(t=i.tempInterval,i.countdown--,i.countdown<1&&(i.tempInterval=0)):t=12e4,i.minimalInterval&&t<i.minimalInterval&&(t=i.minimalInterval),w.clearTimeout(i.beatTimer),e<t?i.beatTimer=w.setTimeout(function(){l()},t-e):l())}function m(){i.hasFocus=!1}function v(){i.userActivity=o(),i.suspend=!1,i.hasFocus||(i.hasFocus=!0,d())}function h(){i.userActivityEvents=!1,r.off(".wp-heartbeat-active"),f("iframe").each(function(e,t){c(t)&&f(t.contentWindow).off(".wp-heartbeat-active")}),v()}function p(){var e=i.userActivity?o()-i.userActivity:0;3e5<e&&i.hasFocus&&m(),(i.suspendEnabled&&6e5<e||36e5<e)&&(i.suspend=!0),i.userActivityEvents||(r.on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){h()}),f("iframe").each(function(e,t){c(t)&&f(t.contentWindow).on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){h()})}),i.userActivityEvents=!0)}function b(){return i.connectionError}function I(e,t){var n,a=i.tempInterval||i.mainInterval;if(e){switch(e){case"fast":case 5:n=5e3;break;case 15:n=15e3;break;case 30:n=3e4;break;case 60:n=6e4;break;case 120:n=12e4;break;case"long-polling":return i.mainInterval=0;default:n=i.originalInterval}5e3===(n=i.minimalInterval&&n<i.minimalInterval?i.minimalInterval:n)?(t=(t=parseInt(t,10)||30)<1||30<t?30:t,i.countdown=t,i.tempInterval=n):(i.countdown=0,i.tempInterval=0,i.mainInterval=n),n!==a&&d()}return i.tempInterval?i.tempInterval/1e3:i.mainInterval/1e3}return"string"==typeof w.pagenow&&(i.screenId=w.pagenow),"string"==typeof w.ajaxurl&&(i.url=w.ajaxurl),"object"==typeof w.heartbeatSettings&&(e=w.heartbeatSettings,!i.url&&e.ajaxurl&&(i.url=e.ajaxurl),e.interval&&(i.mainInterval=e.interval,i.mainInterval<15?i.mainInterval=15:120<i.mainInterval&&(i.mainInterval=120)),e.minimalInterval&&(e.minimalInterval=parseInt(e.minimalInterval,10),i.minimalInterval=0<e.minimalInterval&&e.minimalInterval<=600?1e3*e.minimalInterval:0),i.minimalInterval&&i.mainInterval<i.minimalInterval&&(i.mainInterval=i.minimalInterval),i.screenId||(i.screenId=e.screenId||"front"),"disable"===e.suspension&&(i.suspendEnabled=!1)),i.mainInterval=1e3*i.mainInterval,i.originalInterval=i.mainInterval,void 0!==document.hidden?(t="hidden",a="visibilitychange",n="visibilityState"):void 0!==document.msHidden?(t="msHidden",a="msvisibilitychange",n="msVisibilityState"):void 0!==document.webkitHidden&&(t="webkitHidden",a="webkitvisibilitychange",n="webkitVisibilityState"),t&&(document[t]&&(i.hasFocus=!1),r.on(a+".wp-heartbeat",function(){"hidden"===document[n]?(m(),w.clearInterval(i.checkFocusTimer)):(v(),document.hasFocus&&(i.checkFocusTimer=w.setInterval(s,1e4)))})),document.hasFocus&&(i.checkFocusTimer=w.setInterval(s,1e4)),f(w).on("unload.wp-heartbeat",function(){i.suspend=!0,i.xhr&&4!==i.xhr.readyState&&i.xhr.abort()}),w.setInterval(p,3e4),r.ready(function(){i.lastTick=o(),d()}),{hasFocus:function(){return i.hasFocus},connectNow:function(){i.lastTick=0,d()},disableSuspend:function(){i.suspendEnabled=!1},interval:I,hasConnectionError:b,enqueue:function(e,t,n){return!!e&&((!n||!this.isQueued(e))&&(i.queue[e]=t,!0))},dequeue:function(e){e&&delete i.queue[e]},isQueued:function(e){if(e)return i.queue.hasOwnProperty(e)},getQueuedItem:function(e){if(e)return this.isQueued(e)?i.queue[e]:void 0}}}}(jQuery,window);;function pm_load_hash_url(url)
{
	//window.location(url);
	window.location.href = url;
	location.reload();
}

function pm_load_more_friends(uid,page,total_page)
{
	page =  parseInt(page);
	if(page>0)
	{
	pm_f_search = jQuery('#pm_f_search').val();
		var data = {
						'action': 'pm_fetch_my_friends',
						'uid' : uid,
						'pagenum' :page,
						'pm_f_search':pm_f_search
					};
	jQuery('#pm_load_more_result').hide();
	jQuery('.pm-loader-img').show();
	// We can also pass the url value separately from ajaxurl for front end AJAX implementations
		jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
			if(response)
			{
				jQuery('.pm-my-friends').append(response);
				jQuery('.pm-loader-img').hide();
				
				if(total_page>page)
				{
					value = page + 1;
					jQuery('#pm_load_more_result').attr('value',value);
				}
				else
				{
					jQuery('#pm_load_more_result').attr('value','0');
					jQuery('#pm_load_more_result').html(pm_error_object.no_more_result)
						
				}
				jQuery('#pm_load_more_result').show();
				
			}
		});	
		
	}
}

function pm_add_friend_request(user1,user2,button)
{
   
	var data = {'action': 'pm_add_friend_request','user1' : user1,'user2' :user2};
	jQuery(button).parent('.pm-request-button').children('button').hide();
	jQuery(button).parent('.pm-request-button').children('img').show();
	
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
			jQuery(button).parent('div').html(response);
			//pm_get_notification();					
		}
	});	
}

function pm_get_notification(timestamp)
{ 
	var data = {'action': 'pm_get_friends_notification','timestamp' :timestamp};	
	jQuery.get(pm_ajax_object.ajax_url, data, function(response) 
	{
		if(response)
		{
			  var obj = jQuery.parseJSON(response);
                // put the data_from_file into #response
                jQuery('#pm_waiting_request').html(obj.data_from_file);
                // call the function again, this time with the timestamp we just got from server.php
				pm_get_notification();					
		}
		
	});
		
}

function pm_confirm_request_from_notification(user1,user2,button,id){
    pm_delete_notification(id);
    pm_confirm_request(user1,user2,button);
}
function pm_confirm_request(user1,user2,button)
{
	var data = {'action': 'pm_confirm_friend_request','user1' : user1,'user2' :user2};
	jQuery("#pg-friend-requests").html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);
        
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                        var uid = jQuery('#pm-uid').val();
                        pm_get_my_friends(1,uid);
                        pm_get_friend_requests(1,uid);
                        pm_get_friend_requests_sent(1,uid);
                        pm_update_counter(uid);					
		}
	});	
}

function pm_confirm_request_right_side(user1,user2,button)
{
	var data = {'action': 'pm_confirm_friend_request','user1' : user1,'user2' :user2};
        var selector = jQuery(button).parent('div');
	jQuery(selector).html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                        var uid = jQuery('#pm-uid').val();
                        jQuery(selector).html(response);
                         pm_get_my_friends(1,uid);
		}
	});	
}

function pm_update_counter(uid)
{
    
    var data = {'action': 'pm_fetch_friend_list_counter','uid' : uid,'pm_friend_view' :1};	
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                    jQuery('#pg-friends-container .notification-count:eq(0)').html(response);
                }
	});	
        
        var data2 = {'action': 'pm_fetch_friend_list_counter','uid' : uid,'pm_friend_view' :2};	
	jQuery.post(pm_ajax_object.ajax_url, data2, function(response2) {
		if(response2)
		{
                    jQuery('#pg-friends-container .notification-count:eq(1)').html(response2);
                }
	});	
        
        var data3 = {'action': 'pm_fetch_friend_list_counter','uid' : uid,'pm_friend_view' :3};	
	jQuery.post(pm_ajax_object.ajax_url, data3, function(response3) {
		if(response3)
		{
                    jQuery('#pg-friends-container .notification-count:eq(2)').html(response3);
                }
	});	
        
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-color").css('color', pmDomColor);
}
function pm_remove_suggestions(user1,user2,button)
{
	
	var data = {'action': 'pm_remove_friend_suggestion','user1' : user1,'user2' :user2};
	jQuery(button).parent('.pm-request-button').children('button').hide();
	jQuery(button).parent('.pm-request-button').children('img').show();
	
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
			jQuery(button).parent('.pm-request-button').parent('.pm-my-friend').addClass('pm_remove_suggestions');
			jQuery('.pm_remove_suggestions').remove();								
		}
	});		
}
function pm_reject_friend_request_from_notification(user1,user2,button,id){
    pm_delete_notification(id);
    pm_reject_friend_request(user1,user2,button);
}

function pm_reject_friend_request(user1,user2,button)
{
    if(button!='multiple')
    {
        var result = confirm(pm_error_object.delete_friend_request);
    }
    else
    {
        result = true;
    }
    if(result)
    {
	var data = {'action': 'pm_reject_friend_request','user1' : user1,'user2' :user2};
	jQuery("#pg-friend-requests").html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);
	
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                    var uid = jQuery('#pm-uid').val();
                    pm_get_my_friends(1,uid);
                    pm_get_friend_requests(1,uid);
                    pm_get_friend_requests_sent(1,uid);
                    pm_update_counter(uid);						
		}
	});
    }
}

function pm_reject_friend_request_right_side(user1,user2,button)
{
     var result = confirm(pm_error_object.delete_friend_request);
    if(result)
    {
	var data = {'action': 'pm_reject_friend_request','user1' : user1,'user2' :user2};
	var selector = jQuery(button).parent('div');
	jQuery(selector).html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                    var uid = jQuery('#pm-uid').val();
                    jQuery(selector).html(response);
                    pm_get_my_friends(1,uid);						
		}
	});
    }
}

function pm_unfriend_request(user1,user2,button)
{
    var data = {'action': 'pm_unfriend_friend','user1' : user1,'user2' :user2};
    jQuery("#pg-myfriends").html('<div><div class="pm-loader"></div></div>');
    var pmDomColor = jQuery(".pmagic").children("a").css('color');
    jQuery(".pm-loader").css('border-top-color', pmDomColor);
    jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
            if(response)
            {
                var uid = jQuery('#pm-uid').val();
                pm_get_my_friends(1,uid);
                pm_get_friend_requests(1,uid);
                pm_get_friend_requests_sent(1,uid);
                pm_update_counter(uid);	
            }
    });
}

function pm_unfriend_request_rightside(user1,user2,button)
{
	  var result = confirm(pm_error_object.remove_friend);
    if(result)
    {
        var data = {'action': 'pm_unfriend_friend','user1' : user1,'user2' :user2};
	jQuery(button).html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                    var uid = jQuery('#pm-uid').val();
                    pm_get_my_friends(1,uid);	
                    jQuery(button).html(response);
                }
	});	
    }
}
function pm_cancel_request_rightside(user1,user2,button)
{
	var data = {'action': 'pm_unfriend_friend','user1' : user1,'user2' :user2,'cancel_request':'1'};
        jQuery(button).html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);

	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                    var uid = jQuery('#pm-uid').val();
                    pm_get_my_friends(1,uid);	
                    jQuery(button).html(response);		
		}
	});
}

function pm_cancel_request(user1,user2,button)
{
	var data = {'action': 'pm_unfriend_friend','user1' : user1,'user2' :user2,'cancel_request':'1'};
	jQuery("#pg-requests-sent").html('<div><div class="pm-loader"></div></div>');
        var pmDomColor = jQuery(".pmagic").children("a").css('color');
        jQuery(".pm-loader").css('border-top-color', pmDomColor);
	jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
		if(response)
		{
                    var uid = jQuery('#pm-uid').val();
                    pm_get_my_friends(1,uid);
                    pm_get_friend_requests(1,uid);
                    pm_get_friend_requests_sent(1,uid);
                    pm_update_counter(uid);		
		}
	});
}

function pm_load_more_suggestion(uid,page,total_page)
{
	
	page =  parseInt(page);
	if(page>0)
	{
	pm_u_search = jQuery('#pm_u_search').val();
		var data = {
						'action': 'pm_fetch_my_suggestion',
						'uid' : uid,
						'pagenum' :page,
						'pm_u_search':pm_u_search
					};
	jQuery('#pm_load_more_suggestion').hide();
	jQuery('.pm-loader-img-suggestion').show();
	// We can also pass the url value separately from ajaxurl for front end AJAX implementations
		jQuery.post(pm_ajax_object.ajax_url, data, function(response) {
			if(response)
			{
				jQuery('.pm-my-suggestions').append(response);
				jQuery('.pm-loader-img-suggestion').hide();
				
				if(total_page>page)
				{
					value = page + 1;
					jQuery('#pm_load_more_suggestion').attr('value',value);
				}
				else
				{
					jQuery('#pm_load_more_suggestion').attr('value','0');
					jQuery('#pm_load_more_suggestion').html(pm_error_object.no_more_result);
						
				}
				jQuery('#pm_load_more_suggestion').show();
				
			}
		});	
		
	}
}


function pm_select_friend_checkbox(a)
{
      var img = '<div class="pm-selected-image" onclick="pm_unselect_friend(this)"> <svg fill="#000000" height="100%" viewBox="0 0 24 24" width="100%" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>',
        isChecked = jQuery(a).is(':checked');
         if(isChecked)
         {
            jQuery(a).parent('label').parent('.pm-friend-select').parent('.pm-myfriends-list').append(img);
         }
         else
         {
             jQuery(a).parent('label').parent('.pm-friend-select').parent('.pm-myfriends-list').children('.pm-selected-image').remove();
         }
          var pmDomColor = jQuery(".pmagic").children("a").css('color');
          jQuery("#pg-friends .pm-selected-image svg").css('fill', pmDomColor);
}

function pm_multiple_friends_remove(uid)
{
    var result = confirm(pm_error_object.remove_friend);
    if(result)
    {
        jQuery('.pm-my-friends-select-checkbox').each(function (index, element) { //Validation for number type custom field
                    var isChecked = jQuery(this).is(':checked');
                    var u2 = jQuery(this).val();
                    if(isChecked)
                    {

                        pm_unfriend_request(uid,u2,this);
                    }

        });
    }
}

function pm_multiple_friends_request_accept(uid)
{
    var result = confirm(pm_error_object.accept_friend_request_conf);
    if(result)
    {
        jQuery('.pm-request-friends-select-checkbox').each(function (index, element) { //Validation for number type custom field
                    var isChecked = jQuery(this).is(':checked');
                    var u2 = jQuery(this).val();
                    if(isChecked)
                    {
                        pm_confirm_request(uid,u2,this);
                    }

        });
    }        
}

function pm_multiple_friends_request_delete(uid)
{
    var result = confirm(pm_error_object.delete_friend_request);
    if(result)
    {
        jQuery('.pm-request-friends-select-checkbox').each(function (index, element) { //Validation for number type custom field
                    var isChecked = jQuery(this).is(':checked');
                    var u2 = jQuery(this).val();
                    if(isChecked)
                    {
                        pm_reject_friend_request(uid,u2,'multiple');
                    }

        });
    }
}

function pm_multiple_friends_request_cancel(uid)
{
    var result = confirm(pm_error_object.cancel_friend_request);
    if(result)
    {
        jQuery('.pm-request-sent-select-checkbox').each(function (index, element) { //Validation for number type custom field
                    var isChecked = jQuery(this).is(':checked');
                    var u2 = jQuery(this).val();
                    if(isChecked)
                    {
                        pm_cancel_request(uid,u2,this);
                    }

	});
    }
}

function pm_unselect_friend(a)
{
    jQuery(a).parent('div').children('.pm-friend-select').children('label').children('.pm-friends-select-checkbox').prop('checked', false);
    //jQuery(a).toggleClass('flipper');
    jQuery(a).remove();
}

function pm_get_my_friends(pagenum,uid)
{
  //  console.log('hi you are entring in my friends section.');
    var page = parseInt(pagenum);
    var data = {action: 'pm_fetch_my_friends', 'uid': uid,'pagenum':page,'pm_friend_view':1};
    jQuery.post(pm_ajax_object.ajax_url, data, function (response) {
        if(response)
        {
         //   console.log('hi you are entring in my friends response section.');
            jQuery('#pg-myfriends').html(response);
             var pmDomColor = jQuery(".pmagic").children("a").css('color');
             jQuery(".pm-color").css('color', pmDomColor);
            jQuery( ".pmagic .page-numbers .page-numbers.current" ).addClass( "pm-bg" ).css('background', pmDomColor); 
        }
    });
}


function pm_get_friend_requests_sent(pagenum,uid)
{
    var page = parseInt(pagenum);
    var data = {action: 'pm_fetch_my_friends', 'uid': uid,'pagenum':page,'pm_friend_view':3};
    jQuery.post(pm_ajax_object.ajax_url, data, function (response) {
        if(response)
        {
            jQuery('#pg-requests-sent').html(response);
             var pmDomColor = jQuery(".pmagic").children("a").css('color');
             jQuery(".pm-color").css('color', pmDomColor);
            jQuery( ".pmagic .page-numbers .page-numbers.current" ).addClass( "pm-bg" ).css('background', pmDomColor); 
        }
    });
}


function pm_get_friend_requests(pagenum,uid)
{
    var page = parseInt(pagenum);
    var data = {action: 'pm_fetch_my_friends', 'uid': uid,'pagenum':page,'pm_friend_view':2};
    jQuery.post(pm_ajax_object.ajax_url, data, function (response) {
        if(response)
        {
            jQuery('#pg-friend-requests').html(response);
             var pmDomColor = jQuery(".pmagic").children("a").css('color');
             jQuery(".pm-color").css('color', pmDomColor);
            jQuery( ".pmagic .page-numbers .page-numbers.current" ).addClass( "pm-bg" ).css('background', pmDomColor); 
        }
    });
}
;