

        <footer>
            <p class="footer-p-mobile">&#169; Web Developmental, LLC <?php echo date("Y");?> - New Bern, NC, USA &bull; T. <a href="tel:2525715303">(252) 571 5303</a> &bull; <a href="mailto:thomas@webdevelopmental.com">EMail</a> &bull; <a href="#">FB</a> &bull; <a href="https://www.linkedin.com/in/thomas-rio-b2462a3b/" target="_blank">In</a>
        </footer>
        <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="node_modules/donutty/dist/donutty-jquery.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script>
    $( document ).ready(function() {
    $( ".fa-chevron-right" ).click(function() {
      $( "svg circle" ).addClass('special');
        setTimeout(function() {
         $("svg circle").removeClass('special');
     }, 2000);

    });
    });
    </script>
        <script>new Splide( '.splide' ).mount();</script>
    </body>
</html>
