<html class="wide wow-animation desktop landscape rd-navbar-static-linked" lang="en" oncontextmenu="return false">
<script type="text/javascript">
    BASE_URL = "<?php echo url(''); ?>";
</script>

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:image" content="https://getpet.in/images/Logo.png">
    <meta name="keywords" content="{{ $tags }}">
    <link rel="manifest" href="{{asset('manifest.json')}}">

    <link rel="icon" href="https://getpet.in/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('mainsite2/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('mainsite2/style.css') }}">
    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5253011050316147"
        crossorigin="anonymous"></script> --}}
        <!-- Hotjar Tracking Code for https://getpet.in/ -->
<script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 3509059,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
</head>

<body style="overflow-x: hidden">

    <div id="blur-body" class="blur-body" style="display: none;position: fixed;height: 100%;width: 100%;z-index:999">
    </div>

    <div class="modal-div">
        @include('MainSite2.CommonLayout.nav')
        <div class="page animated" style="animation-duration: 500ms;">
            @yield('content')
        </div>
        @include('MainSite2.CommonLayout.Footer')
    </div>
    {{-- login modal --}}

    <style>
        .custom-modal {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .custom-modal-on {
            pointer-events: none;
        }

        .custom-input-modal {
            border: :none;
            background: white;
            padding: 7px 13px;
            -webkit-box-shadow: 0px 2px 13px -9px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 2px 13px -9px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 2px 13px -9px rgba(0, 0, 0, 0.75);
            border-radius: 10px;
            margin-top: 15px
        }
    </style>

    {{-- <div class="{{Request::is('/login')?"d-none":"d-block"}}" style="display: none;height:50vh;background:#e7e5ec;border-radius:10px;border:none;-webkit-box-shadow: 0px 2px 13px -9px rgba(0,0,0,0.75);
         -moz-box-shadow: 0px 2px 13px -9px rgba(0,0,0,0.75);
         box-shadow: 0px 2px 13px -9px rgba(0,0,0,0.75);" class="custom-modal card p-4" id="custom-modal" >
         <div class="custom-modal-header d-flex justify-content-between align-items-center">
            <h4 style="color: #040f3f">Login</h4>
            <h6 style="cursor: pointer" onclick="closeCustomModal()" class="fa-solid fa-x"></h6>
         </div>
         <div class="custom-modal-body mt-4 d-flex flex-column">
            <input class="custom-input-modal" style="border:none" type="text" placeholder="E-mail">
            <input class="custom-input-modal" style="border:none" type="text" placeholder="Password">
            <button class="btn btn-primary mt-3">Log In</button>
            <a href="user/register">
               <h6>Create account</h6>
            </a>
         </div>
      </div> --}}

</body>

<script src="{{ asset('mainsite2/js/core.min.js') }}"></script>
<script src="{{ asset('mainsite2/js/script.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/2c7e1e28bd.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<a href="#" id="ui-to-top" class="ui-to-top mdi mdi-arrow-up active"></a></body>
{{-- @if (!session()->has('userVisited'))
   <script>
      $('.custom-modal').show();
      $(".modal-div").addClass('custom-modal-on');
      $('#custom-modal').css("opacity","1 !important");
      //   $('body').css('background', '#eeb800')
   </script>
   @endif
   <script>
      function closeCustomModal()
      { 
        $('.custom-modal').hide();
      $(".modal-div").removeClass('custom-modal-on');
      $.ajax({
      url:
      BASE_URL +
      "/userVisting",
      })
      }
      
   </script> --}}
<!-- Add this inside the <body> section of your layout -->
<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/service-worker.js')
        .then(registration => {
          console.log('Service Worker registered');
        })
        .catch(error => {
          console.error('Service Worker registration failed:', error);
        });
    });
  }
</script>
</html>
