(()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(t,n){for(var a=0;a<n.length;a++){var l=n[a];l.enumerable=l.enumerable||!1,l.configurable=!0,"value"in l&&(l.writable=!0),Object.defineProperty(t,(r=l.key,o=void 0,o=function(t,n){if("object"!==e(t)||null===t)return t;var a=t[Symbol.toPrimitive];if(void 0!==a){var l=a.call(t,n||"default");if("object"!==e(l))return l;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===n?String:Number)(t)}(r,"string"),"symbol"===e(o)?o:String(o)),l)}var r,o}var n=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e)}var n,a,l;return n=e,(a=[{key:"init",value:function(){var e=$("#edit-slug-box");$(document).on("click","#change_slug",(function(e){$(".default-slug").unwrap();var t=$("#editable-post-name");t.html('<input type="text" id="new-post-slug" class="form-control" value="'+t.text()+'" autocomplete="off">'),$("#edit-slug-box .cancel").show(),$("#edit-slug-box .save").show(),$(e.currentTarget).hide()})),$(document).on("click","#edit-slug-box .cancel",(function(){var e=$("#current-slug").val(),t=$("#sample-permalink");t.html('<a class="permalink" href="'+$("#slug_id").data("view")+e.replace("/","")+'">'+t.html()+"</a>"),$("#editable-post-name").text(e),$("#edit-slug-box .cancel").hide(),$("#edit-slug-box .save").hide(),$("#change_slug").show()}));var t=function(t,n,a){$.ajax({url:$("#slug_id").data("url"),type:"POST",data:{value:t,slug_id:n,model:$("input[name=model]").val()},success:function(t){var n=$("#sample-permalink"),l=$("#slug_id");a?n.find(".permalink").prop("href",l.data("view")+t.replace("/","")):n.html('<a class="permalink" target="_blank" href="'+l.data("view")+t.replace("/","")+'">'+n.html()+"</a>"),$(".page-url-seo p").text(l.data("view")+t.replace("/","")),$("#editable-post-name").text(t),$("#current-slug").val(t),$("#edit-slug-box .cancel").hide(),$("#edit-slug-box .save").hide(),$("#change_slug").show(),e.removeClass("hidden")},error:function(e){Admingate.handleError(e)}})};$(document).on("click","#edit-slug-box .save",(function(){var e=$("#new-post-slug"),n=e.val(),a=$("#slug_id").data("id");null==a&&(a=0),null!=n&&""!==n?t(n,a,!1):e.closest(".form-group").addClass("has-error")})),$(document).on("blur","#"+e.data("field-name"),(function(n){if(e.hasClass("hidden")){var a=$(n.currentTarget).val();null!==a&&""!==a&&t(a,0,!0)}}))}}])&&t(n.prototype,a),l&&t(n,l),Object.defineProperty(n,"prototype",{writable:!1}),e}();$((function(){(new n).init()}))})();