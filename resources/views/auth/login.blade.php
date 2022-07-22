<!DOCTYPE html>
<html lang="en" class="">

<head>

    <!-- Site Title -->
    <title>Login</title>

    <!-- Character Set and Responsive Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/favicone.png') }}" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front/style.css') }}" />

</head>

<body>

<!-- login screen start -->

<section class="login_screen-section">
     <div class="container-fluid">
           <div class="row">
                <div class="offset-lg-1 col-lg-5">
                     <div class="login_left-form-sec">
                          <h2>Sign In</h2>
                          <p>Need an account? <span><a href="#">Get started!</a></span></p>
                            <form class="singup-form-sec" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group email">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="xyz@gmail.com" value="{{ old('email') }}">
                                    <label class="lab-style">E-mail</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Valid Email.</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group password">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="6 + strong character">
                                    <label class="lab-style">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please Enter Valid Password.</strong> 
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value=""  id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Remember Me </label>
                                </div>
                                <div class="form-group login-submit">
                                     <input type="submit" value="Sign in">
                                </div>
                                @if (Route::has('password.request'))
                                <div class="forgot-password">
                                     <!-- <span>Forgot password?</span> -->
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                                </div>
                                
                            </form>
                     </div>
                </div>
                <div class="col-lg-6"> 
                    <div class="login_right-form-sec">
                            <img src="{{ asset('img/home/side-right.jpg') }}">
                            <div class="upper-text">
                                 <h2>Start your journey by<br> one click, explore<br> beautiful world!</h2>
                            </div>
                     </div>
                </div>
           </div>
     </div>
</section>


<!-- login screen end -->

 <!-- JavaScript Library -->
 <script src="{{ asset('js/front/jquery.min.js') }}"></script>

 <!-- Popper JS and Bootstrap JS -->
 <script src="{{ asset('js/front/popper.min.js') }}"></script>
 <script src="{{ asset('js/front/bootstrap.js') }}"></script>
 <script src="{{ asset('js/front/custom.js') }}"></script>
 
</body>

</html>