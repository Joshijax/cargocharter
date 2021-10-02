<div class="copyright">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-5">
<div class="copyright-info" >
<div class="footer-logo pull-left">
</div>
<span>Copyright ©<script>document.write(new Date().getFullYear());</script> United Nation Surgeon</span>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-push-1">
<div class="footer-menu">
<ul class="nav unstyled">
<li>
<?php
if(isset($_GET['lang'])){
$language = base64_decode($_GET['lang']);
$title = 'links_header3';
$output = selecttext($language,$title);
?>
<a href="about.php?lang=<?php echo $_GET['lang'];?>"><?php echo $output." " ;?></a>
<?php
}else{
?>
<a href="about.php" >About Us </a>
<?php
}
?>				
</li>
<li>
<?php
if(isset($_GET['lang'])){
$language = base64_decode($_GET['lang']);
$title = 'links_header4';
$output = selecttext($language,$title);
?>
<a href="contact.php?lang=<?php echo $_GET['lang'];?>"><?php echo $output." " ;?></a>
<?php
}else{
?>
<a href="contact.php" >Contact</a>
<?php
}
?>			
</li>
</ul>
</div>
</div>
</div><!-- Row end -->

<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
<button class="btn btn-danger" title="Back to Top">
<i class="fa fa-angle-double-up"></i>
</button>
</div>

</div><!-- Container end -->
</div><!-- Copyright end -->

</footer><!-- Footer end -->



<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="js/boostrap.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- Counter -->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="js/waypoints.min.js"></script>
<!-- Color box -->
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/ini.isotope.js"></script>

<!-- Template custom -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- Template custom -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/xsaysoft.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#selec').on('change',function(){
var datas = $('#selec').val();
window.location="lang.php?lang="+datas;	
});	
});	
</script>
<script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
</div><!-- Body inner end -->
</body>

</html>