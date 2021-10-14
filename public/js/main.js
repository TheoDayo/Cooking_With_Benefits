// JQUERY CODES
$(document).ready(function () {
  $("#password, #confirm_password").on("keyup", function () {
    if ($("#password").val() == $("#confirm_password").val()) {
      $("#check_logo").css("color", "#00ffa2");
    } else $("#check_logo").css("color", "red");
  });

  $(".profile-image-container").mouseenter(function () {
    $("#upload_btn").css("display", "block");
  });
  $(".profile-image-container").mouseleave(function () {
    $("#upload_btn").css("display", "none");
  });

  window.addEventListener("load", function () {
    document
      .querySelector("#imgUpload")
      .addEventListener("change", function () {
        if (this.files && this.files[0]) {
          var img = document.querySelector("#profileImg");
          img.onload = () => {
            URL.revokeObjectURL(img.src); // no longer needed, free memory
          };

          img.src = URL.createObjectURL(this.files[0]); // set src to blob url
        }
      });
  });
});
