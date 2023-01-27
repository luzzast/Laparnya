$(document).ready(function() {
    paparmenu();
});

function paparmenu() {
    $.post("datatempahmenu.php", function(data) {
        $("#datalistmenu").html(data);
    });
}

function useraddtempahan(id, iduser) {

    $.post(
        "modelcontroller.php", {
            option: "updateaddmenutempahan",
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

function updatetable(id) {
    $.post(
        "modelcontroller.php", {
            option: "updatetable",
            idtempahan: id,
            nomeja: $("#tableno").val(),
        },
        function(data) {},
        "json"
    );
}