<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seva Connect - Admin Panel Login</title>
    <link rel="icon" href="{{ asset('assets/images/LogoColouri.png') }}" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color-4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        .login-card {
           
            background: url('{{ asset("assets/images/adminbg.jpg") }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>

    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form class="theme-form login-form" id="loginForm">
                            @csrf
                            <div class="text-center mb-4">
                                <img src="{{ asset('assets/images/logo/LogoColour.jpg') }}" alt="Logo" style="height: 100px; width: auto;" class="img-fluid">
                                {{-- <h4 class="mt-3">Seva Connect</h4> --}}
                            </div>
                            <h4>Login</h4>
                            <h6>Welcome back! Log in to your account</h6>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                    <input class="form-control" type="text" name="email" id="email" placeholder="Enter your username">
                                </div>
                                <span class="text-danger error-text username_err"></span>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="*********">
                                    <span class="input-group-text" id="password_eye" onclick="showHidePassword1()">
                                        <i class="eye fa fa-eye-slash"></i>
                                    </span>
                                </div>
                                <span class="text-danger error-text password_err"></span>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="remember_me" name="remember_me" type="checkbox">
                                    <label for="remember_me">Keep me logged in</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="button" id="loginForm_submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        function showHidePassword1() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.querySelector('#password_eye .eye');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }

        $(document).ready(function () {
            $('#loginForm_submit').on('click', function (e) {
                e.preventDefault(); // Form submit hone se rokna

                const formData = $('#loginForm').serialize();

                $.post("{{ route('admin.login.submit') }}", formData, function (response) {
                    if (response.success) {
                        swal({
                            title: 'Login Successful',
                            text: 'Click OK to proceed',
                            icon: 'success',
                            buttons: true,
                        }).then((willRedirect) => {
                            if (willRedirect) {
                                window.location.href = "{{ route('admin.dashboard') }}";
                            }
                        });
                    } else {
                        swal('Error', response.message, 'error');
                    }
                }).fail(function () {
                    swal('Error', 'Something went wrong!', 'error');
                });
            });
});
</script>
</body>
</html>
