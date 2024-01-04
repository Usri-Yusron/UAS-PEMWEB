<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('../assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ ('../assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('../assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('../assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n15 mt-md-n15 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
                <h5>Register with</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('register.simpan') }}" method="POST" role="form text-left" class="user">
                    @csrf
                  <div class="mb-3">
                    <input type="text" name="nama" class="form-control form-control-user @error('nama')is-invalid @enderror" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                    @error('nama')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control form-control-user @error('email')is-invalid @enderror" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-user @error('password')is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control form-control-user @error('password')is-invalid @enderror" placeholder="Password confirmation" aria-label="Password" aria-describedby="password-addon">
                    @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                  <!-- Form Registrasi -->
                  <div class="mb-3">
                    <select name="level" class="form-control form-control-user">
                        <option value="" disabled>User</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  </main>
  <!--   Core JS Files   -->
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
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>