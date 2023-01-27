var refreshId = setInterval(function() { refreshdataincoming() }, 2000);


$(document).ready(function() {
    refreshdataincoming();
}); //end of document ready function


// clearInterval(refreshId); //to disable refresh
function prepare(id) {
    $.post("updatestatus.php", {
        updateid: id,
        option: 'prepare'
    }, function(data) {

    });
}

function complete(id) {
    $.post("updatestatus.php", {
        updateid: id,
        option: 'complete'
    }, function(data) {

    });
}

function refreshdataincoming() {
    $.post("dataincoming.php", function(data) {
        $("#datalist").html(data);
    });
}