<?php
/* Smarty version 3.1.30, created on 2018-05-15 09:35:53
  from "D:\Programy\xampp\htdocs\webar-f\view\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afa8dd99cb9c9_84522742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e140cfb99922778aed562b9488b467fa155a21b1' => 
    array (
      0 => 'D:\\Programy\\xampp\\htdocs\\webar-f\\view\\footer.tpl',
      1 => 1526369752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afa8dd99cb9c9_84522742 (Smarty_Internal_Template $_smarty_tpl) {
?>

<footer>
    <div class="footer-box container-fluid">
        <div class="col-xs-12">
            <div class="contact col-md-5 col-xs-12" >
                <div class="contact-box">
                    <h2>Masz pytanie? Napisz do nas!</h2>
                    <form method ="post" action="script/contact_mail.php">
                        <!--<label for="contact-name">Podaj swoje imię:</br></label>-->
                        <input type="text" name="contact-name"  placeholder="Imię" onfocus="this.placeholder=''" onblur="this.placeholder='Imię'"/>
                            
                            
                        <!--<label for="contact-mail">Podaj swój adres e-mail:</br></label>-->
                        <input type="email" name="contact-email"  placeholder="Adres e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Adres e-mail'"/>
                            
                        <textarea name="contact-txt" placeholder="Treść wiadomości..." onfocus="this.placeholder=''" onblur="this.placeholder='Treść wiadomości...'"></textarea>
                           
  
                        
                        
                        
                        <input type="submit" name="wyslij" value="Wyślij"/>
                    </form>
                </div>	
            </div>
                
            <div class="newsletter col-lg-6 col-md-7 col-xs-12">
                <h2>Bądź na bieżąco ze wszystkimi promocjami, wydarzeniami i nowościami! </h2>
                <h3>Zapisz się do do newslettera i nie przegap żadnej premiery, maratonu czy wydarzenia sportowego transmitowanego na naszych ekranach!</h3>
                <p>To proste! Wystarczy, że wpiszesz swój adres e-mail i już nic Cię nie ominie!</p>
                    
                <div class="newsletter-box">
                    <form method="post" action="script/newsletter.php">
                        
                        <input type="email" name="newsletter_email" placeholder="Zapisz się do newslettera!"  onfocus="this.placeholder=''" onblur="this.placeholder='Zapisz się do newslettera!'">
 
                        
                        <input type="submit" name="gotowe" value="Gotowe"/>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>	
    <div class="social row">
        <div class="social col-xs-12">
            
            <a href="#"><i class="fab fa-facebook-square" id="fb-icon" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-instagram" id="ig-icon" aria-hidden="true"></i></a>
            <i class="fa fa-copyright" id="copy-icon" aria-hidden="true"> Copyright 2018. Wszelkie prawa zastrzeżone. </i> 
                
        </div>
    </div>
</footer><?php }
}
