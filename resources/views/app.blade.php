<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'SRC Jewel') }}</title>

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

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia









  

  

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>

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

<script>
  $(".close-notification").click(function(){
    $(".notification-wrapper").fadeOut();
  });
</script>

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
  {{-- <script type="text/javascript">
    $(function(){
      $("#srcjHeader").load("header.html");
      $("#footer").load("footer.html");
      $("#srcjBlog").load("blog-section.html");
      $("#userReviews").load("user-reviews.html");
    });
  </script> --}}
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
</html>
