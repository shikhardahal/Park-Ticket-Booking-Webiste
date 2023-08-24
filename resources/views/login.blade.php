<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tribhuwan Park | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    .login-box {
      width: 400px;
      height: 400px;
      text-align: center;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .login-card-body {
      padding-top: 0;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-card-body">
    <div class="logo-container">
      <img src="{{url('dist/img/login.png')}}" alt="Tribhuwan Park Logo" width="160" height="150">
    </div>
    <p class="login-box-msg"><strong>Tribhuwan Park</strong></p>

    <form id="login-form" action="{{ route('login_user') }}" method="post">
        @csrf
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <div class="input-group mb-3">
        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </div>
      <p class="mb-1"></p>
      <p class="mb-0"></p>
    </form>
  </div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

{{-- <script>
  $(document).ready(function() {
    $('#login-form').submit(function(e) {
      e.preventDefault();
      var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: '{{ route('login_user') }}',
        data: formData,
        success: function(response) {
          // Login successful, handle the response
          window.location.href = "http://127.0.0.1:8000/admin";
          console.log(response);
        },
        error: function(xhr) {
          // Login failed, handle the error
          console.log(xhr.responseJSON);
        }
      });
    });
  });
</script> --}}
</body>
</html>
