<!DOCTYPE HTML>
<html lang="pl">
<head>
    {include file="view/menu/head.tpl" title="Rejestracja"}
    <link rel="stylesheet" href="view/css/registration.css">
</head>
<body>

    {if $zalogowany == 'admin'}
        {header('Location: /repertuar')}
    {elseif $zalogowany == 'user'}
        {include file="view/menu/menu_log.tpl"}          
    {else}
        {include file="view/menu/menu.tpl"}
    {/if}

    <div class="container">
        <div class="reg-form col-sm-6 col-sm-offset-3">
            <span class="statement" id="success"></span> 
            <div class="reg-box">
                <form method="post" action="/kinoman/registration">
                    <p>Nickname:</p>
                    <input type="text" id="nickReg"  name="nick"/>
                    <span class="error_small" id="nick_errorReg"></span> 
                   
                    <p>Email:</p>
                    <input type="email" id="emailReg" name="email"/>
                    <span class="error_small" id="email_errorReg"></span> 
                        
                    <p>Hasło:</p>
                    <input type="password" id="pass1Reg" name ="pass1"/>
                    <span class="error_small" id="pass_errorReg"></span>
                    
                    <p>Powtórz hasło:</p>
                    <input type="password" id="pass2Reg" name ="pass2"/>
                        
                    <label class="check">
                        <input type="checkbox" name="rules" id="rulesReg"/> 
                        Akceptuję regulamin
                    </label>
                    <span class="error_small" id="rules_errorReg"></span>
                        
                    <div class="g-recaptcha" data-sitekey="6Ldd7GkUAAAAAAJIhzkuyfzZYBSeUnMomtyCDAfO"></div>
                    <span class="error_small" id="captcha_errorReg"></span>
                        
                    <input type="button" id="buttonReg" name="registration" value="Zarejestruj się"/>
                </form>
            </div>
        </div>
    </div>

    {include file='view/footer.tpl'}
    <script src="view/js/jquery-3.2.1.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="view/js/scripts.js"></script>
</body>
</html>
	