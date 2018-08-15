$(document).ready(function(){
    var navY = $('.menu').offset().top;

    var stickyNav = function(){

        var scrollY = $(window).scrollTop();

        if (scrollY > navY) {
        $('.menu').addClass('sticky'); }
        else {
        $('.menu').removeClass('sticky'); }
    };
    stickyNav();
    $(window).scroll(function(){
            stickyNav();	
    });

});
	
	

$(document).ready(function(){
	
    $(".zaloguj").click(function(){
        $('.log').css("display", "block");
    });
                          	
});

$('#buttonLog').click(function ()
{
    var nickLog = $("#nickLog").val();
    var passLog = $("#passLog").val();
    
    console.log(nickLog);
    console.log(passLog);

    $.ajax
    ({
        asynch: false,
        type: 'POST',
        data: {'nick': nickLog,
               'pass': passLog},
        url: 'login',
        dataType: 'json',
        success: function (response)
        {
            if(response['status'] == 'ok') {
                location.reload();

            }else if(response['status'] == 'error'){                    
                $('#small_errorLog').css("display", "initial").html(response["feed"]);
                $('#errorLog').css("display", "initial").html(response["feed"]);

            }else{
                console.log("Niepoprawny status");  
            }
        },
        error: function ()
        {
            alert('error');
        }
    });
});

$('#buttonReg').click(function ()
{
    var nickReg = $("#nickReg").val();
    var emailReg = $("#emailReg").val();
    var pass1Reg = $("#pass1Reg").val();
    var pass2Reg = $("#pass2Reg").val();
    var checked;

    if($('#rulesReg').is(':checked')){
        checked = true;
    }else{
        checked = false;
    }

    $.ajax
    ({
        asynch: false,
        type: 'POST',
        data: {'nick': nickReg,
               'email': emailReg,
               'pass1': pass1Reg,
               'pass2': pass2Reg,
               'rules': checked,
               'captcha': grecaptcha.getResponse()
                },
        url: 'registration',
        dataType: 'json',
        success: function (response)
        {   
            if(response['nick']['status'] === 'ok') {
                console.log("Poprawny nick");
                $('#nick_errorReg').css("display", "none").html(""); 

            }else if(response['nick']['status'] === 'error'){    
                console.log("Nieoprawny nick");
                $('#nick_errorReg').css("display", "block").html(response["nick"]["feed"]);
            }else{
                console.log("Error");  
            }

            //EMAIL

            if(response['email']['status'] === 'ok') {
                console.log("Poprawny email");
                $('#email_errorReg').css("display", "none").html("");

            }else if(response['email']['status'] === 'error'){
                console.log("Niepoprawny mail");
                $('#email_errorReg').css("display", "block").html(response['email']["feed"]); 
            }else{
                console.log("Error"); 
            }

             //PASS

            if(response['pass']['status'] === 'ok') {
                console.log("Poprawny pass");
                $('#pass_errorReg').css("display", "none").html("");

            }else if(response['pass']['status'] === 'error'){
                console.log("Niepoprawny pass");
                $('#pass_errorReg').css("display", "block").html(response['pass']["feed"]); 
            }else{
                console.log("Error");  
            }                       
             //RULES

            if(response['rules']['status'] === 'ok') {
                console.log("Poprawny checkBox");
                $('#rules_errorReg').css("display", "none").html("");

            }else if(response['rules']['status'] === 'error'){
                console.log("Niepoprawny checkBox");
                $('#rules_errorReg').css("display", "block").html(response['rules']["feed"]);  
            }else{
                console.log("Error");  
            }   
            //reCAPTCHA

            if(response['captcha']['status'] === 'ok') {
                console.log("Poprawna captcha");
                $('#captcha_errorReg').css("display", "none").html("");
                grecaptcha.reset()

            }else if(response['captcha']['status'] === 'error'){
                console.log("Niepoprawna captcha");
                $('#captcha_errorReg').css("display", "block").html(response['captcha']["feed"]);
                grecaptcha.reset()
            }else{
                console.log("Error");  
            }    

             if (response['allOK'] === 1) {
                window.location.href = '/';
            }       
        },
        error: function ()
        {
            alert('error');
        }
    });          
});


$('#newsletterButton').click(function ()
{
    var newsletterEmail = $("#emailNews").val();
    
    console.log(newsletterEmail);
    $.ajax
    ({
        asynch: false,
        type: 'POST',
        data: {'email': newsletterEmail},
        url: '/newsletter',
        dataType: 'json',
        success: function (response)
        {
            console.log(response);
            if(response['newsletter']['status'] === 'ok') {
                $('#emailStatement').css({"display": "block","color":"#c71585"}).html(response['newsletter']["feed"]);

            }else if(response['newsletter']['status'] === 'error'){                    
                $('#emailStatement').css({"display": "block","color":"red"}).html(response['newsletter']["feed"]);

            }else{
                console.log("Niepoprawny status");  
            }

        },
        error: function ()
        {
            alert('error');
        }
    });
});

$('#contactButton').click(function ()
{
    var contactName = $("#contactName").val();
    var contactEmail = $("#contactEmail").val();
    var contactMessage = $("#contactMessage").val();
    
    console.log(contactName);
    console.log(contactEmail);
    console.log(contactMessage);

    $.ajax
    ({
        asynch: false,
        type: 'POST',
        data: { 'name': contactName,
                'email': contactEmail,
                'message': contactMessage
             },
        url: '/contact',
        dataType: 'json',
        success: function (response)
        {
            console.log(response);

            if(response['contact']['status'] === 'ok') {
                $('#contactStatement').css({"display": "block","color":"#c71585"}).html(response['contact']["feed"]);

            }else if(response['contact']['status'] === 'error'){                    
                $('#contactStatement').css({"display": "block","color":"red"}).html(response['contact']["feed"]);

            }else{
                console.log("Niepoprawny status");  
            }
        },
        error: function ()
        {
            alert('error');
        }
    });
});