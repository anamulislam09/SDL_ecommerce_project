<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/ui-range-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- toaste -->
    <link rel="stylesheet" href="{{asset('backend/plugins/toastr/toastr.css')}}">
</head>

<body>
    <!-- header area start -->
    @include('layouts.frontend_partial.header')
    <!-- header area end -->
    <main>
        @yield('frontend_content')
    </main>
    <!-- footer area start -->
    @include('layouts.frontend_partial.footer')

    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/meanmenu.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/backToTop.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/countdown.js') }}"></script>
    
    <script src="{{ asset('frontend/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui-slider-range.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- toaste -->
  <script src="{{asset('backend/plugins/toastr/toastr.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
  @yield('script')

    <script>
        @if (Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"
          switch (type) {
            case 'info':
              toastr.info("{{Session::get('message')}}");
              break;
            case 'success':
              toastr.success("{{Session::get('message')}}");
              break;
            case 'warning':
              toastr.warning("{{Session::get('message')}}");
              break;
            case 'error':
              toastr.error("{{Session::get('message')}}");
              break;
          }
        @endif
      </script>
    
    {{-- before logout showing alert message --}}
    <script>
        $(document).on('click', '#logout', function(e){
          e.preventDefault();
          var link = $(this).attr('action');
          swal({
            title: "Are you want to Logout?",
            text: "",
            icon:"warning",
            button:true,
            dangerMode:true,
          })
          .then((willDelete) => {
            if(willDelete){
              window.location.href = link
            }else{
              swal("Not Logout");
            }
          });
        });
      </script>
</body>

</html>
