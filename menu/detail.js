$(document).ready(function() {
    papardetail();
});

function papardetail() {
    $.post("namacustomer.php", function(data) {
        $("#customernamelist").html(data);
    });
}