function submitForm() {
    alert("Saved");
    $.post("processlogin.php", {
            su_username: $('#username').val(),
            su_password: $('#password').val()
        }, function(data) {
            if (data.loginstatus == 'success') {
                $("#loginstatus").removeClass().addClass('bg-success').html("Login Success"); {
                    location.href = 'incoming/';
                    $("#loginstatus").removeClass().addClass('bg-danger').html("Login Failed, try agian.");
                }
            }

        },
        'json');
}