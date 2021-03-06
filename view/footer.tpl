<footer>
    <div class="footer-box container-fluid">
        <div class="col-xs-12">
            <div class="contact col-md-5 col-xs-12" >
                <div class="contact-box">
                    <h2>Masz pytanie? Napisz do nas!</h2>
                    <form method ="post" action="/kinoman/contact">
                        <input type="text" name="contact-name" id="contactName"  placeholder="Imię" onfocus="this.placeholder=''" onblur="this.placeholder='Imię'"/>
                        <input type="email" name="contact-email" id="contactEmail"  placeholder="Adres e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Adres e-mail'"/>  
                        <textarea name="contact-txt" id="contactMessage" placeholder="Treść wiadomości..." onfocus="this.placeholder=''" onblur="this.placeholder='Treść wiadomości...'"></textarea>     
                        <span class="error_small" id="contactStatement"></span>
                        
                        <input type="button" id="contactButton" name="wyslij" value="Wyślij"/>
                    </form>
                </div>	
            </div>
                
            <div class="newsletter col-lg-6 col-md-7 col-xs-12">
                <h2>Bądź na bieżąco ze wszystkimi promocjami, wydarzeniami i nowościami! </h2>
                <h3>Zapisz się do do newslettera i nie przegap żadnej premiery, maratonu czy wydarzenia sportowego transmitowanego na naszych ekranach!</h3>
                <p>To proste! Wystarczy, że wpiszesz swój adres e-mail i już nic Cię nie ominie!</p>
                    
                <div class="newsletter-box">
                    <form method="post" action="/kinoman/newsletter">
                        <input type="email" id="emailNews" name="newsletter_email" placeholder="Zapisz się do newslettera!" onfocus="this.placeholder=''" onblur="this.placeholder='Zapisz się do newslettera!'">
                        <span class="error_small" id="emailStatement"></span>
                        <input type="button" id="newsletterButton" name="gotowe" value="Gotowe"/>
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
</footer>