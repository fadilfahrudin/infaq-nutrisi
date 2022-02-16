<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>INFAQ NUTRISI | {{ $title }}</title>
  </head>
  <body>


  <div class="container-fluid">
    
    <div class="content">
      @yield('content')
    </div>

    <div class="berdonasi">
      @yield('berdonasi')
    </div>
 
  </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
    <script src="/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script> 
    <script>
           $('.team-slider').owlCarousel({
               loop: true,            
               nav: false,
               autoplay: true,
               autoplayTimeout: 5000,
               smartSpeed: 450,
               margin: 20,
               responsive: {
                   0: {
                       items: 1
                   },
                   768: {
                       items: 2
                   },
                   991: {
                       items: 3
                   },
                   1200: {
                       items: 3
                   },
                   1920: {
                       items: 3
                   }
               }
           });
    </script>

  </body>
</html>