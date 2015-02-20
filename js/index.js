$(form).ajaxSubmit({
    type:"POST",
    data: $(form).serialize(),
    url:"contactform.php",
    success: function() {
        $('#contactform :input').attr('disabled', 'disabled');
        $('#contactform').fadeTo( "slow", 0.15, function() {
        $(this).find(':input').attr('disabled', 'disabled');
        $(this).find('label').css('cursor','default');
        $('#success').fadeIn();
        });
        },
        error: function() {
        $('#contactform').fadeTo( "slow", 0.15, function() {
        //$('#error').fadeIn();
        });
    }
});