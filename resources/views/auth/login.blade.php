<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sign In &mdash; Sistem Manajemen Pondok Pesantren</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/ponpes.ico') }}" type="image/x-icon">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/ponpes-style.css') }}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="login-brand">
              <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="120">
              <p>Sistem Manajemen Pondok Pesantren</p>
            </div>

            <div class="card card-primary">
              @if (session('alert'))
                <div class="alert alert-danger m-2" role="alert">
                  <div class="text-center">{{ session('alert') }}</div>
                </div>
              @endif

              <div class="card-body">
                <h6 class="text-center mb-4">Login</h6>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script>
    function togglePasswordVisibility(event) {
      event.preventDefault();
      var passwordField = $('#password');
      var fieldType = passwordField.attr('type');
      if (fieldType === 'password') {
        passwordField.attr('type', 'text');
        $('#show_hide_password i').removeClass('fa-eye-slash').addClass('fa-eye');
      } else {
        passwordField.attr('type', 'password');
        $('#show_hide_password i').removeClass('fa-eye').addClass('fa-eye-slash');
      }
    }
  </script>
</body>
</html>