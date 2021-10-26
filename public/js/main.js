// JQUERY CODES
$(document).ready(function () {
  $("#password, #confirm_password").on("keyup", function () {
    if ($("#password").val() == $("#confirm_password").val()) {
      $("#check_logo").css("color", "#ffaf00");
    } else $("#check_logo").css("color", "red");
  });

  // profile
  $(".form-profile").mouseenter(function () {
    $("#upload_btn").css("display", "block");
  });
  $(".form-profile").mouseleave(function () {
    $("#upload_btn").css("display", "none");
  });

  new Choices("#select-dislikes", {
    removeItemButton: true,
    maxItemCount: 5,
    searchResultLimit: 5,
    renderChoiceLimit: 5,
  });

  window.addEventListener("load", function () {
    document
      .querySelector("#img-upload")
      .addEventListener("change", function () {
        if (this.files && this.files[0]) {
          var img = document.querySelector("#profile-img");
          img.onload = () => {
            URL.revokeObjectURL(img.src);
          };
          img.src = URL.createObjectURL(this.files[0]);
        }
      });
  });
});
