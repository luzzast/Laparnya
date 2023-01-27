$(document).ready(function() {
    paparreceipt();
});

function paparreceipt() {
    $.post("datareceipt.php", function(data) {
        $("#receiptlist").html(data);
    });
}