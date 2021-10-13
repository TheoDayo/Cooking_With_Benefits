// JQUERY CODES
$(document).ready(function () {
  $("#btn_male").on("click", function () {
    $(this).css("background-color", " #00ffa2");
    $("#btn_female").css("background-color", "");
    $("#btn_other").css("background-color", "");
  });
  $("#btn_female").on("click", function () {
    $(this).css("background-color", " #00ffa2");
    $("#btn_other").css("background-color", "");
    $("#btn_male").css("background-color", "");
  });
  $("#btn_other").on("click", function () {
    $(this).css("background-color", " #00ffa2");
    $("#btn_female").css("background-color", "");
    $("#btn_male").css("background-color", "");
  });
  // get onchange for select
  $(".select-nationality").on("change", function () {
    $(".submit-button").click();
  });
});

// JAVASCRIPT CODES
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
  }
}

window.addEventListener("load", function () {
  document
    .querySelector('input[type="file"]')
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
