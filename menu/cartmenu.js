var refreshId = setInterval(function() { paparcart() }, 1000);
$(document).ready(function() {
    paparcart();
});


function paparcart() {
    $.post("cartdata.php", function(data) {
        $("#datalistcart").html(data);
    });
}

function userdeletetempahan(id, iduser) {

    $.post(
        "modelcontroller.php", {
            option: "deleteaddmenutempahan",
            idmakanan: id,
            iduser: iduser

        },

        function(data) {
            if (data.thestatus == "success") {
                alert("success");
            }
        },
        "json"
    );
}