<section id="navBigDevice" class="hidden-xs">
  <nav class="navbar navbar-default navbar-fixed navigation">
  <div class="navbar-header" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:;">
    <span class="icon-bar" style="background-color:white;"></span>
    <span class="icon-bar" style="background-color:white"></span>
    <span class="icon-bar" style="background-color: white"></span>
    </button>
    <a class="navbar_brand" href="index.php">
          <span>
            <img src="assets/image/MainLogoDark.png" alt="" class="img-responsive">
        </span>
      </a>
  </div>
  <style>
    .navbar-header img
    {
      height: 50px;
      width: 60px;
      padding: 0px;
      margin: 2px;
    }
  </style>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right" >
      <li class="active" ><a data-toggle="tab" href="#home" style="background-color: transparent;">Home</a></li>
      <li><a data-toggle="tab" href="#about"style="background-color: transparent;">About</a></li>
      <li><a data-toggle="tab" href="#portfolio"style="background-color: transparent;">Portfolio</a></li>
      <li><a data-toggle="tab" href="#projects"style="background-color: transparent;">Projects</a></li>
      <li><a data-toggle="tab" href="#testimonials"style="background-color: transparent;">Testimonials</a></li>
      <li><a data-toggle="tab" href="#contact"style="background-color: transparent;">Contact</a></li>

      <li><a href="assets/image/AvinashProfile.pdf" class="downloadCV" download style="border:2px solid #05BF81;padding: 5px 20px;margin-top: 10px;border-radius: 15px;transition: 0.5s;">Download CV</a></li>
      <!-- <li><button onclick="myFunction()">Toggle dark mode</button></li> -->
    </ul>
    <style>
     .collapse li:hover a.downloadCV{background-color: #05BF81;color: white;transition: 0.3s;}
    </style>
</div>
</nav>
</section>
<!-- <section class="smallDeviceNav">
  <div class="container">
    <div class="row">
      <div class="col-xs-3">
        <div class="smallDevLogo">
          <img src="assets/image/MainLogoLight.png" alt="" class="img-responsive">
        </div>
      </div>
      <div class="col-xs-4"></div>
      <div class="col-xs-5">
        <a href="assets/image/AvinashProfile.pdf" class="downloadCVButton" download >Download CV</a>
      </div>
    </div>
  </div>
</section> -->
<style>
        @media screen and (max-width: 992px) {

  #navSmallDevice .navbar {

    background-color: #05BF81;
        margin-bottom: 0;
        padding: 5px; 
    z-index: 9999;
    border: 0;
    line-height: 1.42857143 !important;
    letter-spacing: 1.2px;
    border-radius: 0;
    font-family: Athiti;
    font-weight: bold;
}
.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;

}

.navbar-default .navbar-toggle:hover {
 
    background-color: transparent;
    border-radius: 0px;
    transition: 1s;
}
  nav.navbar li{
    color: blue;
    letter-spacing: 2px;
}  #navSmallDevice .navbar-collapse{

    background-color: white;
}
}

</style>
<script>
$(document).ready(function () {
$(window).scroll(function () {
var scroll = $(window).scrollTop();
if (scroll > 20) {
$(".navigation").css("background", "#06091D");
} else {
$(".navigation").css("background", "transparent");
}
});
});
</script>
 