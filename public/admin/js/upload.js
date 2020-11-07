$(document).ready(function () {
    $("#save").click(function () { 
       var canavas = document.getElementById("canvas");
       var name = $("#name").val();
       var image = canavas.toDataURL();
    //    console.log(image);
$.ajax({
    type: "post",
    url: "controler/Csaveimage.php",
    data: {
        name: name,
        image: image
    },
  
    success: function (response) {
       console.log(response);
    //     alert(response);
    }
});
    });
});