// JQUERY CODES
$(document).ready(function () {
  $(".form-profile").mouseenter(function () {
    $("#upload_btn").css("display", "block");
  });
  $(".form-profile").mouseleave(function () {
    $("#upload_btn").css("display", "none");
  });

  // window.addEventListener("load", function () {
  //   document
  //     .querySelector("#img-upload")
  //     .addEventListener("change", function () {
  //       if (this.files && this.files[0]) {
  //         var img = document.querySelector("#profile-img");
  //         img.onload = () => {
  //           URL.revokeObjectURL(img.src);
  //         };
  //         img.src = URL.createObjectURL(this.files[0]);
  //       }
  //     });
  // });
});
