$(document).ready(function() {
  if ($("#attach_image_file").length > 0) {
    var attach_image_file = $("#attach_image_file");
    var file_uploader = new AjaxUpload(attach_image_file, {
      action: "",
      name: 'file',
      responseType: 'json',
      onChange: function(file, extension) {

      },
      onComplete: function(file, response) {

      }
    });
  }
});