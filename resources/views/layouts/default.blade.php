<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('templates/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('templates/assets/img/favicon.png')}}">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('templates/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('templates/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('templates/assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
  @stack('styles')
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.aside')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.navbar')
        <div class="container-fluid py-4">
            @yield('main-section')
            @include('layouts.footer')
        </div>
  </main>


  <!--   Core JS Files   -->
  <script src="{{asset('templates/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('templates/./assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('templates/./assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('templates/./assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('templates/./assets/js/plugins/chartjs.min.js')}}"></script>
  <script>
  </script>
  <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    {{-- side navbar highlighted starts --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.nav-link');
            links.forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add('active', 'bg-gradient-primary');
                } else {
                    link.classList.remove('active', 'bg-gradient-primary');
                }
            });
        });
    </script>
    {{-- side navbar highlighted ends --}}
        @yield('main-scripts')
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('templates/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>


