<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Realistic
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Realistic</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Superfish Menu -->
<script type="text/javascript" src="layout/scripts/superfish/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="layout/scripts/superfish/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
<!-- / Superfish Menu -->
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <h1><a href="index.html">Realistic</a></h1>
    <p>Free Website Template</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topbar">
    <div class="fl_left">Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com</div>
    <div class="fl_right">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topnav">
    <ul class="nav">
      <li class="active"><a href="index.html">Homepage</a></li>
      <li><a href="pages/style-demo.html">Style Demo</a></li>
      <li><a href="pages/full-width.html">Full Width</a></li>
      <li><a href="#">DropDown</a>
        <ul>
          <li><a href="#">menu item</a></li>
          <li><a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a>
                <ul>
                  <li><a href="#">menu item</a></li>
                  <li><a href="#">menu item</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
            </ul>
          </li>
          <li><a href="#">menu item</a></li>
        </ul>
      </li>
      <li><a href="pages/portfolio.html">Portfolio</a></li>
      <li class="last"><a href="pages/gallery.html">Gallery</a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="whitebox" id="hpage_services">
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
      </div>
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Uygulama 2</strong>
        <p>
          <?php
          $Boyunuz=180;
          $Kilonuz=80;
          $Sonuc=vkiHesapla($Boyunuz,$Kilonuz);
          function vkiHesapla($Boy,$Kilo){
            $Boy= $Boy /100;
            $BoyHesapla = $Boy * $Boy;
            $vki=round(($Kilo / $BoyHesapla),2);
            ekranayaz($vki);
          }
            function ekranayaz($Hesapla){
              if($Hesapla < "18.5"){
                echo "<div style='color:Lime'>"
                .$Hesapla."<span><br>Zayıf</span></div>";
 }else if($Hesapla >= "18.5" and $Hesapla < "24.9"){
 echo "<div  style='color:limegreen'>"
            .$Hesapla."<span><br>Sağlıklı</span></div>";
 }else if($Hesapla >= "25" and $Hesapla < "29.9"){
 echo "<div  style='color:orange'>"
            .$Hesapla."<span><br>Fazla Kilolu</span></div>";
 }else if($Hesapla >= "30" and $Hesapla < "34.9"){
 echo "<div  style='color:orange'>"
            .$Hesapla."<span><br>I. Derece Obezite</span></div>";
 }else if($Hesapla >= "35" and $Hesapla < "39.9"){
 echo "<div  style='color:red'>"
            .$Hesapla."<span><br>II. Derece Obezite</span></div>";
 }else if($Hesapla >= "40"){
 echo "<div  style='color:maroon'>"
            .$Hesapla."<span><br>III. Derece Obezite</span></div>";
 }
 }
?>

        </p>
      </div>
      <div class="block last"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum.</p>
      </div>
      <div class="spacer">&nbsp;</div>
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
      </div>
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
      </div>
      <div class="block last"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
      </div>
      <div class="clear"></div>
    </div>
    <!-- ####################################################################################################### -->
    <div id="hpage_latest">
      <ul>
        <li>
          <div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>Lorum ipsum dolor</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>Lorum ipsum dolor</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>Lorum ipsum dolor</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>
        </li>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <div class="latestgallery">
      <h2>Latest Projects</h2>
      <ul>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Latest From The Blog</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Keep In Touch</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>