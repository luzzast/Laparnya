//var refreshId = setInterval(function() { paparupdate() }, 2000);
$.when($.ready).then(function() {
    paparupdate();
});

$.when($.ready).then(function() {
    papardelete();
});

function su_delete_form() {
    $.post("deleteform_script.php", {
            nama: $("#txt_nama").val(),
            kategori_id: $("#txt_kategori_id").val(),
            harga: $("#txt_harga").val(),
            menuid: $("#hidden_menuid").val()
        },
        function(data) {

            if (data.status == 'success')

                $("#menu_form_here").html('');
        },
        "json");
}

function su_update_form() {
    $.post("updateform_script.php", {
            nama: $("#txt_nama").val(),
            kategori_id: $("#txt_kategori_id").val(),
            harga: $("#txt_harga").val(),
            menuid: $("#hidden_menuid").val()
        },
        function(data) {

            if (data.status == 'success')

                $("#menu_form_here").html('');
        },
        "json");
}

function su_callformupdate_menu(id) {
    $.post("menuform_update.php", {
            menuid: id
        },
        function(data) {
            $("#menu_form_here").html(data);
        });
}

function su_callformdelete_menu(id) {
    $.post("menuform_delete.php", {
            menuid: id
        },
        function(data) {
            $("#menu_form_here").html(data);
        });
}


function su_submit_form() {
    $.post("submitform_script.php", {
            nama: $("#txt_nama").val(),
            kategori_id: $("#txt_kategori_id").val(),
            harga: $("#txt_harga").val()
        },
        function(data) {

            if (data.status == 'success')

                $("#menu_form_here").html('');
        },
        "json");
}

function su_callform_menu() {
    $.post("menuform.php", function(data) {
        $("#menu_form_here").html(data);
    });
}

function paparupdate() {
    $.post("dataupdatemenu.php", function(data) {
        $("#dataupdatemenu").html(data);
    });
}

function papardelete() {
    $.post("datadeletemenu.php", function(data) {
        $("#datadeletemenu").html(data);
    });
}