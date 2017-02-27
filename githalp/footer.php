<nav id="footer">
	<a href="index.php" class="navElem"> <img src="inicio.png" class="navIcon"/> Inicio </a>
	<a href="contacto.php" class="navElem"> <img src="contact.png" class="navIcon"/> Contáctanos </a>
	<a href="ayuda.php" class="navElem"> <img src="question1.png" class="navIcon"/> Ayuda </a>
	<a href="acerca.php" class="navElem">  <img src="about.png" class="navIcon"/> Acerca de </a>
	<a href="licencia.php" class="navElem"> <img src="github.png" class="navIcon"/> GitHalp &copy; 2017 </a>

</div>

<a href="#" class="back-to-top">Volver arriba</a>

<!----------------------------------------------------------------- -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
	jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
</script>