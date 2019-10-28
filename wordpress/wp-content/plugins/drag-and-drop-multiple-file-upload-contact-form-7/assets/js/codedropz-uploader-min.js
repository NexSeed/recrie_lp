/**
 * CodeDropz Uploader v1.0
 * Copyright 2018 Glen Mongaya
 * CodeDrop Drag&Drop Uploader
 * @version 1.0
 * @author CodeDropz, Glen Don L. Mongaya
 * @license The MIT License (MIT)
 */

// CodeDropz Drag and Drop Plugin
!function(e){e.fn.CodeDropz_Uploader=function(a){this.each(function(){var r=e(this),d=e.extend({handler:r,color:"#000",background:"",server_max_error:"Uploaded file exceeds the maximum upload size of your server.",max_file:r.data("max")?r.data("max"):10,max_upload_size:r.data("limit")?r.data("limit"):"5242880",supported_type:r.data("type")?r.data("type"):"jpg|jpeg|JPG|png|gif|pdf|doc|docx|ppt|pptx|odt|avi|ogg|m4a|mov|mp3|mp4|mpg|wav|wmv|xls",text:"Drag & Drop Files Here",separator:"or",button_text:"Browse Files",on_success:""},a),o=r.data("name")+"_count_files";localStorage.setItem(o,1);var s='<div class="codedropz-upload-handler"><div class="codedropz-upload-container"><div class="codedropz-upload-inner"><h3>'+d.text+"</h3><span>"+d.separator+'</span><div class="codedropz-btn-wrap"><a class="cd-upload-btn" href="javascript:void(0)">'+d.button_text+"</a></div></div></div></div>";d.handler.wrapAll('<div class="codedropz-upload-wrapper"></div>');var t=d.handler.parents("form"),n=d.handler.parents(".codedropz-upload-wrapper"),p=e('input[type="submit"]',t);d.handler.after(s),e(".codedropz-upload-handler",n).on("drag dragstart dragend dragover dragenter dragleave drop",function(e){e.preventDefault(),e.stopPropagation()}),e(".codedropz-upload-handler",n).on("dragover dragenter",function(a){e(this).addClass("codedropz-dragover")}),e(".codedropz-upload-handler",n).on("dragleave dragend drop",function(a){e(this).removeClass("codedropz-dragover")}),e("a.cd-upload-btn",n).on("click",function(e){e.preventDefault(),d.handler.val(null),d.handler.click()}),e(".codedropz-upload-handler",n).on("drop",function(e){l(e.originalEvent.dataTransfer.files,"drop")}),d.handler.on("change",function(e){l(this.files,"click")});var l=function(a,s){if(!(!a.length>1)){var p=new FormData;e("span.has-error",d.handler).remove(),e.each(a,function(a,l){if(localStorage.getItem(o)>d.max_file)return!e("span.has-error-msg",n).length>0&&(err_msg=dnd_cf7_uploader.drag_n_drop_upload.max_file_limit,n.append('<span class="has-error-msg">'+err_msg.replace("%count%",d.max_file)+"</span>")),!1;var c=i.createProgressBar(l),u=!1;if(l.size>d.max_upload_size&&(e(".dnd-upload-details",e("#"+c)).append('<span class="has-error">'+dnd_cf7_uploader.drag_n_drop_upload.large_file+"</span>"),u=!0),regex_type=new RegExp("(.*?).("+d.supported_type+")$"),regex_type.test(l.name.toLowerCase())||(e(".dnd-upload-details",e("#"+c)).append('<span class="has-error">'+dnd_cf7_uploader.drag_n_drop_upload.inavalid_type+"</span>"),u=!0),localStorage.setItem(o,Number(localStorage.getItem(o))+1),!1===u){p.append("upload-file",l),p.append("supported_type",d.supported_type),p.append("size_limit",d.max_upload_size),p.append("action","dnd_codedropz_upload"),p.append("type",s);e.ajax({url:d.ajax_url,type:t.attr("method"),data:p,dataType:"json",cache:!1,contentType:!1,processData:!1,xhr:function(){var e=new window.XMLHttpRequest;return e.upload.addEventListener("progress",function(e){if(e.lengthComputable){var a=e.loaded/e.total,r=parseInt(100*a);i.setProgressBar(c,r)}},!1),e},complete:function(){i.setProgressBar(c,100)},success:function(a){a.success?e.isFunction(d.on_success)&&d.on_success.call(this,r,c,a):(e(".dnd-progress-bar",e("#"+c)).remove(),e(".dnd-upload-details",e("#"+c)).append('<span class="has-error">'+a.data+"</span>"),e('input[type="submit"]',t).removeClass("disabled").prop("disabled",!1))},error:function(a,r,o){e(".dnd-progress-bar",e("#"+c)).remove(),e(".dnd-upload-details",e("#"+c)).append('<span class="has-error">'+d.server_max_error+"</span>"),e('input[type="submit"]',t).removeClass("disabled").prop("disabled",!1)}})}})}},i={createProgressBar:function(a){var r=e(".codedropz-upload-handler",n),d="dnd-file-"+Math.random().toString(36).substr(2,9),s='<div class="dnd-upload-image"><span class="dnd-icon-blank-file"></span></div><div class="dnd-upload-details"><span class="name">'+a.name+" <em>("+i.bytesToSize(a.size)+')</em></span><a href="javascript:void(0)" title="Remove" class="remove-file" data-storage="'+o+'"><span class="dnd-icon-remove"></span></a><span class="dnd-progress-bar"><span></span></span></div>';return r.after('<div id="'+d+'" class="dnd-upload-status">'+s+"</div>"),d},setProgressBar:function(a,r){var d=e(".dnd-progress-bar",e("#"+a));return d.length>0&&(i.disableBtn(p),progress_width=r*d.width()/100,e("span",d).addClass("in-progress").animate({width:progress_width},10).text(r+"% "),100==r&&e("span",d).addClass("complete").removeClass("in-progress")),!1},bytesToSize:function(e){return 0===e?"0":(kBytes=e/1024,fileSize=kBytes>=1024?(kBytes/1024).toFixed(2)+"MB":kBytes.toFixed(2)+"KB",fileSize)},disableBtn:function(e){e.length>0&&e.addClass("disable").prop("disabled",!0)}}}),e(document).on("click",".dnd-icon-remove",function(r){var d=e(this),o=d.parents(".dnd-upload-status"),s=d.parents(".codedropz-upload-wrapper"),t=d.parent("a").attr("data-storage");return!(e("span.in-progress",o).length>0)&&(e(".has-error",o).length>0?(o.remove(),localStorage.setItem(t,Number(localStorage.getItem(t))-1),!1):(d.addClass("deleting").text("deleting..."),void e.post(a.ajax_url,{path:o.find('input[type="hidden"]').val(),action:"dnd_codedropz_upload_delete"},function(a){a.success&&(o.remove(),localStorage.setItem(t,Number(localStorage.getItem(t))-1),e(".dnd-upload-status",s).length<=1&&e("span.has-error-msg",s).remove())})))})}}(jQuery);