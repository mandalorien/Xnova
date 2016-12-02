var verification = function(){
    var valid = $("#register").valid();
    if (!valid) {
        $('#valider').prop('disabled', true);
        return false;
    }
    else{
        $('#valider').prop('disabled', false);
    }
};
$(document).ready(function() {
    $("#register").validate({
        rules: {
            "app_user_registration[email]": {
                "required": true,
                "email": true
            },
            "app_user_registration[username]": {
                "required": true,
				"minlength": 3,
                "maxlength": 50
            },
            "app_user_registration[password][first]": {
                "required": true,
                "maxlength": 100
            },
            "app_user_registration[password][second]": {
                "required": true,
                "maxlength": 100
            },
            "checkbox-signup": {
                "required": true
            },
        }
    });
});

$(".register").blur(function() {
    verification();
});

$( "#valider" ).click(function() {
    verification();
});