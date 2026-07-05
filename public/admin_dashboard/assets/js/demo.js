"use strict";

$("body").on("click", ".show_hidePassword", function () {
    var parent = $(this).closest(".input-group");
    var input = parent.find("input");
    var eye = parent.find(".input-group-prepend i");
    // console.log(eye);
    if (eye.hasClass("fa-eye") && input.attr("type") == "text") {
        // alert('okk');
        eye.addClass("fa-eye-slash");
        eye.removeClass("fa-eye");
        input.attr("type", "password");
    } else {
        // alert('yess');
        eye.removeClass("fa-eye-slash");
        eye.addClass("fa-eye");

        input.attr("type", "text");
    }
});
// ADD PRODUCT BTN ACTIVE *******************
// var buttons = $("#myproduct .btn_responsive");
// console.log(buttons);

// var btn = document.getElementById("add_points");
// btn.addEventListener("click", addmore_points);
// var row = document.getElementById("price_card_add");
// var max_no = 4;
// var x = 1;
// function addmore_points(e) {
//     e.preventDefault();
//     if (x <= max_no) {
//         // alert('success to click : '+ x);
//         var col =
//             '<div class="col-lg-6 col-md-6 form-group">\
//     <input type="text" name="point[]" id="" class="form-control" placeholder="Point" required>\
//   </div>   <div class="col-lg-6 col-md-6 form-group">\
//   <input type="text" name="point[]" id="" class="form-control" placeholder="Point" required>\
// </div>';
//         row.innerHTML += col;
//         x++;
//     } else {
//         alert("reach your limit");
//     }

// }

$(document).ready(function () {
    // PRODUCT TAB INSERT ===================

    // Get the current date
    // alert("okk");
    var currentDate = new Date();
    currentDate.setDate(currentDate.getDate() + 7);
    var year = currentDate.getFullYear();
    var month = (currentDate.getMonth() + 1).toString().padStart(2, "0");
    var day = currentDate.getDate().toString().padStart(2, "0");
    var formattedDate = year + "-" + month + "-" + day;
    // $('input[name="from_date"]').prop("min", formattedDate);
    // // Format the current date as yyyy-MM-dd

    // // Set the max attribute of the input element
    // document.getElementById('datePicker').setAttribute('max', formattedDate);

    $('input[name="from_date"]').on("change", function () {
        var currentDate = $(this).val();
        // var currentDate = new Date();
        var currentDate = new Date(currentDate);
        currentDate.setDate(currentDate.getDate());
        var year = currentDate.getFullYear();
        var month = (currentDate.getMonth() + 1).toString().padStart(2, "0");
        var day = currentDate.getDate().toString().padStart(2, "0");
        var formattedDate = year + "-" + month + "-" + day;
        // document.getElementById('datePicker').setAttribute('max', formattedDate);

        $('input[name="to_date"]').prop("min", formattedDate);

        // console.log(currentDate)
    });

    $(".edit-icon-cl").click(function () {
        // alert('sucess');
        $("#profile_form :file:first").click();
    });
    $(".profile_image").change(function () {
        if ($(".profile_image")[0].files.length > 0) {
            // alert('ok');
            $("#profile_form").submit();
        }
    });
});

let messageIconHideShow = () => {
    var supportMessage = $("#messageBox").val().trim();
    // console.log(supportMessage);

    if (supportMessage && supportMessage !== " ") {
        $("#msgBtnBox").empty();
        $("#msgBtnBox").append(
            `<button class="btn btn-primary  border-0 px-4 " type="submit"> <i class="fa-solid fa-paper-plane"></i></button>`
        );
    } else {
        $("#msgBtnBox").empty();
    }
};

messageIconHideShow();

$("body").on("keyup", "#messageBox", function (event) {
    event.preventDefault();
    var supportMessage = $("#messageBox").val().trim();
    if (event.key === " " || event.keyCode === 32) {
        if (supportMessage === "") {
            $("#msgBtnBox").empty(); // Hide the button if only blank spaces
        }
    }
    messageIconHideShow();
});
