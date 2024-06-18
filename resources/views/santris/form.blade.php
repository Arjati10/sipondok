<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Sign In &mdash; Sistem Manajemen Pondok Pesantren</title>
  <!-- Favicon -->
  <link rel="favicon icon" href="{{ asset('assets/img/ponpes.ico') }}" type="image/x-icon">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/ponpes-style.css') }}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-10 offset-xl-1">

            <div class="card card-primary">
              <div class="card-body">
                <div class="text-left mb-4"><h2>Form Input Data Santri</h2></div>
                <form method="" action="" class="needs-validation" novalidate="">
                @csrf
                   <div class="form-group">
                        <p class="bold">Form Description</p>
                    </div>

                </form>

              </div>

            </div>

            <div class="card">

              <div class="card-body">
                <div class="text-left mb-4"><h6>Nama</h6></div>
                <form method="POST" action="" class="needs-validation" novalidate="">
                @csrf
                   <div class="form-group">
                        <input id="email" type="name" class="form-control" name="name" value="" placeholder="masukkan nama">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <!-- <strong>{{ $message }}</strong> -->
                            </span>
                        @enderror
                    </div>

                </form>

              </div>
  
            </div>

            <div class="card">
              <div class="card-body">
                <div class="text-left mb-4"><h6>Email</h6></div>
                <form method="POST" action="" class="needs-validation" novalidate="">
                @csrf
                   <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="masukkan email" required autocomplete="email" autofocus>
                    </div>

                </form>

              </div>
  
            </div>

            <div class="card">
              <div class="card-body">
                <div class="text-left mb-4"><h6>Nomor WhatsApp</h6></div>
                <form method="POST" action="" class="needs-validation" novalidate="">
                @csrf
                   <div class="form-group">
                        <input id="wa" type="number" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="masukkan nomor whatsapp">
                    </div>

                </form>

              </div>
  
            </div>

            <div class="card">
              <div class="card-body">
                <div class="text-left mb-4">
                  <h6>File KK</h6>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <input id="fileUpload" type="file" class="form-control" name="fileUpload" accept="*/*">
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Unggah</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="text-left mb-4">
                  <h6>File NISN</h6>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <input id="fileUpload" type="file" class="form-control" name="fileUpload" accept="*/*">
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Unggah</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="text-left mb-4">
                  <h6>File Akte Kelahiran</h6>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <input id="fileUpload" type="file" class="form-control" name="fileUpload" accept="*/*">
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Unggah</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="text-left mb-4">
                  <h6>File Foto</h6>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <input id="fileUpload" type="file" class="form-control" name="fileUpload" accept="*/*">
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">Unggah</button>
                  </div>
                </form>
              </div>
            </div>



        

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      <div style="font-size: 15px">Sign In</div>
                    </button>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      <div style="font-size: 15px">Sign In</div>
                    </button>
                  </div>

              </div>
  
       

          </div>

          
        </div>
        
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/digital-sign.js') }}"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>

  <!-- Page Specific JS File -->
  <script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
        });
    });
  </script>

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
