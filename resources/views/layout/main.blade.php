<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>@yield('title')</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ URL::to('/') }}/favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/animate.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/css/unify-core.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/css/unify-components.css">
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{ URL::to('/')}}/assets/css/custom.css">
</head>

<body>
  <main>

  @yield('container')


    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
            <div class="d-lg-flex">
              <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved.</small>
              
            </div>
          </div>

        </div>
      </div>
    </footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="{{ URL::to('/')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ URL::to('/')}}/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="{{ URL::to('/')}}/assets/vendor/jquery.easing/js/jquery.easing.js"></script>
  <script src="{{ URL::to('/')}}/assets/vendor/popper.min.js"></script>
  <script src="{{ URL::to('/')}}/assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ URL::to('/')}}/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="{{ URL::to('/')}}/assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="{{ URL::to('/')}}/assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Unify -->
  <script src="{{ URL::to('/')}}/assets/js/hs.core.js"></script>
  <script src="{{ URL::to('/')}}/assets/js/components/hs.header.js"></script>
  <script src="{{ URL::to('/')}}/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="{{ URL::to('/')}}/assets/js/components/hs.tabs.js"></script>
  <script src="{{ URL::to('/')}}/assets/js/components/hs.cubeportfolio.js"></script>
  <script src="{{ URL::to('/')}}/assets/js/components/hs.carousel.js"></script>
  <script src="{{ URL::to('/')}}/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="{{ URL::to('/')}}/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel', {
          autoplay: false
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>