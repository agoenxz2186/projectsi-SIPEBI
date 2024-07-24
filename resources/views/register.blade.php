<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="{{ asset('assets/admin/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css')}}" />
  <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif
               <!-- Menampilkan Pesan Kesalahan -->
               @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
             @endif
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control p_input" placeholder="Nama" required autofocus autocomplete="name">
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control p_input" placeholder="Email" required autofocus autocomplete="email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control p_input" placeholder="Password" required autofocus autocomplete="new-password">
                </div>
                <div class="form-group">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control p_input" placeholder="Password Confirmation" required autofocus autocomplete="new-password">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check"><label><input type="checkbox" class="form-check-input">I Agree to the Terms & conditions</label></div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
                <p class="existing-user text-center pt-4 mb-0">Already have an account?&nbsp;<a href="{{ route('login') }}">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/misc.js') }}"></script>
</body>

</html>
