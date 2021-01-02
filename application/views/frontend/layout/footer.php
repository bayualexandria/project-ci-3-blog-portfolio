 <footer class="footer" data-background-color="black">
     <div class="container">
         <nav class="float-left">
             <ul>
                 <li>
                     <a href="<?= base_url('kategorimateri');?>">
                         Materi
                     </a>
                 </li>
                 <li>
                     <a href="<?= base_url('blog');?>">
                         Blog
                     </a>
                 </li>
                 <li>
                     <a href="<?= base_url('about');?>">
                         About Us
                     </a>
                 </li>
             </ul>
         </nav>
         <div class="copyright float-right">
             &copy;
             <script>
                 document.write(new Date().getFullYear())
             </script>, cre@ted by
             <b>b@yu 4lex@ndr!4</b> for a better web.
         </div>
     </div>
 </footer>


 <!--   Core JS Files   -->
 <script src="<?= base_url('asset/frontend/js/core/jquery.min.js') ?>" type="text/javascript"></script>
 <script src="<?= base_url('asset/frontend/js/core/popper.min.js') ?>" type="text/javascript"></script>
 <script src="<?= base_url('asset/frontend/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript"></script>
 <script src="<?= base_url('asset/frontend/js/plugins/moment.min.js') ?>"></script>
 <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
 <script src="<?= base_url('asset/frontend/js/plugins/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="<?= base_url('asset/frontend/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
 <!--  Google Maps Plugin    -->
 <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
 <script src="<?= base_url('asset/frontend/js/material-kit.js?v=2.0.7') ?>" type="text/javascript"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
 <script>
     $(document).ready(function() {
         //init DateTimePickers
         materialKit.initFormExtendedDatetimepickers();

         // Sliders Init
         materialKit.initSliders();
     });


     function scrollToDownload() {
         if ($('.section-download').length != 0) {
             $("html, body").animate({
                 scrollTop: $('.section-download').offset().top
             }, 1000);
         }
     }
     module.exports = {
         darkMode: 'media',
     }
 </script>
 </body>

 </html>