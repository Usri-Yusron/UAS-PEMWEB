<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Pemrograman WEB - 2023
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('../assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('../assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('../assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('../assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- page aside --}}
    @include('layouts.aside')
    {{-- page aside selesai --}}

    {{-- page main --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        {{-- page navbar --}}
        @include('layouts.navbar')
        {{-- page navbar selesai --}}

        <div class="container-fluid py-4">
          <div class="text-center">
            @yield('tombol_tambah')
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  @yield('judul')
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    @yield('content')
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- footer --}}
          @include('layouts.footer')
          {{-- footer selesai --}}
        </div>

    </main>


  <script src="{{ asset('../assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('../assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('../assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('../assets/js/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
</body>

</html>