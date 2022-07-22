<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <!-- Site Title -->
        <title>Login</title>

        <!-- Character Set and Responsive Meta Tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{env('APP_URL')}}/resources/img/logo/favicone.png" type="image/x-icon" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/resources/css/bootstrap.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/resources/css/style.css" />
    </head>

    <body>
        <!-- login screen start -->

        <section class="login_screen-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-lg-1 col-lg-5">
                        <div class="login_left-form-sec">
                            <h2>{{ __('Reset Password') }}</h2>
                            <form class="singup-form-sec" action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <div class="form-group email">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="xyz@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus />
                                    <label class="lab-style">E-mail</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group login-submit">
                                    <input type="submit" value="{{ __('Send Password Reset Link') }}" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login_right-form-sec">
                            <img src="{{env('APP_URL')}}/resources/img/home/side-right.jpg" />
                            <div class="upper-text">
                                <h2>
                                    Start your journey by<br />
                                    one click, explore<br />
                                    beautiful world!
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- login screen end -->

        <!-- JavaScript Library -->
        <script src="{{env('APP_URL')}}/resources/js/jquery.min.js"></script>

        <!-- Popper JS and Bootstrap JS -->
        <script src="{{env('APP_URL')}}/resources/js/popper.min.js"></script>
        <script src="{{env('APP_URL')}}/resources/js/bootstrap.js"></script>
        <script src="{{env('APP_URL')}}/resources/js/custom.js"></script>
    </body>
</html>