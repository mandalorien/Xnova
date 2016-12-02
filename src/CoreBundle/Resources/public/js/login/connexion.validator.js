var verification = function(){
    var valid = $("#connexion").valid();
    if (!valid) {
        $('#valider').prop('disabled', true);
        return false;
    }
    else{
        $('#valider').prop('disabled', false);
    }
};
$(document).ready(function() {
    $("#connexion").validate({
        rules: {
            "_username": {
                "required": true,
                "maxlength": 50
            },
			"_password": {
                "required": true,
                "maxlength": 50
            }
        }
    });
});

$(".connexion").blur(function() {
    verification();
});

$( "#valider" ).click(function() {
    verification();
});