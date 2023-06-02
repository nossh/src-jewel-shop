<!DOCTYPE html>
<html lang="en">



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SRC Jewels</title>

  <link rel="shortcut icon" href="imgs/favicon.png">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&amp;family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&amp;display=swap" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if gt IE 9]> <!-->
      <link rel="stylesheet" href="css/animate.css" />
      <script type="text/javascript" src="js/wow.min.js"></script>
      <script type="text/javascript">new WOW().init();</script>
  <!-- <![endif]-->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>


  <!-- MAIN HEADER -->
  <header id="srcjHeader" class="srcj-header">
  <!-- Menu Bar Starts -->
<div class="ih-inner">
  <div class="container-fluid">
    <div class="row vcentr mob-ctrl">
      <div class="site-logo">
        <a href="index-2.html" class="logo"><img src="imgs/logo.svg" class="img-srcj"/></a>
      </div>
      <div class="site-menu">
        <ul class="nav srcj-deskmenu">
          <li><a href="{{route("/")}}">Home</a></li>
          <li><a href="{{route("shop")}}">SHOP</a></li>
          <li><a href="{{route("about")}}">ABOUT US</a></li>
          <li><a href="{{route("blog-list")}}">BLOG</a></li>
          <li><a href="{{route("contact")}}">CONTACT US</a></li>
        </ul>
      </div>
      <div class="site-actions">
        <ul class="nav srjc-actions-menu">
          <li>
            <a id="hdrSearch" href="javascript:void(0);"><i class="fal fa-search"></i></a>
            <div class="header-search-wrapper">
              <form class="header-search-form">
                <input type="text" placeholder="Search" class="form-control">
                <button type="button"><i class="far fa-search"></i></button>
              </form>
            </div>
          </li>
          <li><a href="login.html"><i class="fal fa-user"></i></a></li>
          <li><a href="{{route("wish-list")}}"><i class="fal fa-heart"></i> <span>1</span></a></li>
          <li><a href="{{route("cart")}}"><i class="fal fa-shopping-bag"></i> <span>1</span></a></li>
        </ul>
        <div class="mobile-menu">
          <a href="javascript:void(0);" class="menu-handle">
            <span id="mmBar"><i class="far fa-bars"></i></span>
            <span id="mmClose"><i class="fal fa-window-close"></i></span>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- Menu Bar Ends -->

  </header>
  <!-- /MAIN HEADER -->


  




  




<script type="text/javascript">
  $(document).ready(function(){
    $(".menu-handle").click(function(e){
        $(".site-menu").toggleClass("open-mobmenu");
        $(".menu-handle").toggleClass("mm-ctrl");
    });

    $("#hdrSearch").click(function(e){
      $(".header-search-wrapper").slideToggle();
    });
  });
</script>




@yield("content")




<div class="container-fluid">
  <div class="ft-top text-center">
    <img src="imgs/logo-footer.svg" class="img-srcj ft-logo"/>

    <h4>LATEST FROM SRC JEWELS!</h4>
    <p>Sign-up to receive 10% off your next purchase. Plus hear about new arrivals and offers.</p>

    <form action="#" class="form-newsletter">
      <input type="email" placeholder="EMAIL ADDRESS" class="form-control">
      <a href="javascript:void(0);" class="btn-srcj">View All <span><i class="far fa-long-arrow-right"></i></span></a>
    </form>

    <div class="ft-text">
      <img src="imgs/we-create-luxury.png" class="img-srcj"/>
    </div>
  </div>
  <div class="ft-bottom">
    <ul class="nav ft-menu">
      <li><a href="javascript:void(0);">SHIPPING</a></li>
      <li><a href="javascript:void(0);">PAYMENT METHODS</a></li>
      <li><a href="javascript:void(0);">RETURNS</a></li>
      <li><a href="{{route("terms")}}">TERMS & CONDITIONS</a></li>
      <li><a href="{{route("privacy-policy")}}">PRIVACY POLICY</a></li>
      <li><a href="{{route("faq")}}">FAQ’S</a></li>
    </ul>
    <div class="copyright">
      @ @php echo date("Y") @endphp SRC . ALL RIGHTS RESERVED
    </div>
  </div>
  
</div>




<!--NOTIFICATION-->
<div class="notification-wrapper">
  <a href="javascript:void(0);" class="close-notification"><i class="fal fa-times"></i></a>
  <ul class="notification-list">
    <li>
      <a href="javascript:void(0)" class="row cust-row vcentr">
        <div class="col-3 cust-col">
          <img src="imgs/notification/1.jpg" class="img-srcj"/>
        </div>
        <div class="col-9 cust-col">
          <p><strong>Akshaya Thrutheeya</strong> celebrations started.</p>
          10 mins ago sold 2 pavan.
        </div>
      </a>
    </li>
  </ul>
</div>
<!--/NOTIFICATION-->


<script>
  $(".close-notification").click(function(){
    $(".notification-wrapper").fadeOut();
  });
</script>




<!-- FOOTER -->
  <footer id="footer" class="srcj-footer"></footer>
  <!-- /FOOTER -->
  

  

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script>
	// When the user scrolls down 50px from the top of the document, resize the header's font size
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
	    $("#srcjHeader").addClass("srcj-scroll");
	  } else {
	    $("#srcjHeader").removeClass("srcj-scroll");
	  }
	}
  </script>
  <script type="text/javascript">
    $(function(){
      $("#srcjHeader").load("header.html");
      $("#footer").load("footer.html");
      $("#srcjBlog").load("blog-section.html");
      $("#userReviews").load("user-reviews.html");
    });
  </script>
  <script>
    $(document).ready(function() {
       var owl = $('.home-slider');
       owl.owlCarousel({
         loop: true,
         margin: 0,
         autoplay: 3000,
         autoplayHoverPause: true,
         animateOut: 'slideOutUp',
         animateIn: 'slideInDown',
         pagination: true,
         nav: true,
         navText: ["<i class='fal fa-long-arrow-left'></i>","<i class='fal fa-long-arrow-right'></i>"],
         dots: false,
         center: false,
         responsive:{
           0:{
               items:1
           }
         }
       });
     })
 </script>
 <script>
  $(document).ready(function() {
     var owl = $('.category-slider');
     owl.owlCarousel({
       loop: true,
       margin: 30,
       autoplay: 3000,
       autoplayHoverPause: true,
       pagination: true,
       nav: true,
       navText: ["<i class='fal fa-long-arrow-left'></i>","<i class='fal fa-long-arrow-right'></i>"],
       dots: false,
       center: false,
       responsive:{
         0:{
             items:2
         },
         576:{
             items:3
         },
         992:{
             items:4
         },
         1200:{
             items:5
         }
       }
     });
   })
</script>
<script>
  $(document).ready(function() {
     var owl = $('.clients-slider');
     owl.owlCarousel({
       loop: true,
       margin: 30,
       autoplay: 3000,
       autoplayHoverPause: true,
       pagination: true,
       nav: false,
       dots: false,
       center: false,
       responsive:{
         0:{
             items:2
         },
         576:{
             items:4
         },
         992:{
             items:5
         },
         1200:{
             items:6
         }
       }
     });
   })
</script>
 




</body>


<!-- Mirrored from spydernet.in/srcjewels/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 02:14:21 GMT -->
</html>
