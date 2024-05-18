<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" />
</head>
<body>
    <div class="sign-in">
        <div class="image-300-parent">
            <img class="image-300-icon" alt="Welcome Image" src="{{ asset('images/image-300@2x.png') }}" />

            <div class="lorem-ipsum-dolor-container">
                <p class="welcome-to">
                    <span class="welcome-to1">
                        <b>Welcome to </b>
                    </span>
                </p>
                <p class="arngren1">
                    <span class="arngren2">
                        <b>Arngren!</b>
                    </span>
                </p>
                <p class="shop-to-your-comfort-and">
                    <span class="shop-to-your-comfort-and1">
                        <span class="shop-to-your">Shop to Your Comfort and <br />Convenience</span>
                    </span>
                </p>
            </div>
        </div>
        <div class="frame-parent">
            <div class="kontakt-wrapper">
                <h1 class="kontakt">Sign in</h1>
            </div>
            <form class="t-e-x-t-lorem-ipsum-parent" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="t-e-x-t-lorem-ipsum">
                    <div class="g-r-o-u-p-p-r-o-f-i-l-e-s-h-o-parent">
                        <div class="g-r-o-u-p-p-r-o-f-i-l-e-s-h-o">
                            <img class="profile-2-icon" alt="Profile Icon" src="{{ asset('icons/profile-2.svg') }}" />
                        </div>
                        <div class="textbox-2">
                            <input class="name" placeholder="Email" type="email" name="email" required />
                        </div>
                    </div>
                    <div class="frame-group">
                        <div class="shopping-bag-2-wrapper">
                            <img class="shopping-bag-2" alt="Password Icon" src="{{ asset('icons/shopping-bag-2.svg') }}" />
                        </div>
                        <div class="textbox-3">
                            <input class="e-mail" placeholder="Password" type="password" name="password" required />
                            <div class="g-r-o-u-p-profile-shoppingbag">
                                <img class="eye-show" alt="Show Password" src="{{ asset('icons/eye--show.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-r-o-u-p-parent">
                    <div class="g-r-o-u-p">
                        <img class="g-r-o-u-p-child" loading="lazy" alt="Remember Me Icon" src="{{ asset('icons/group-36701.svg') }}" />
                    </div>
                    <div class="t-e-x-t-e-mail">
                        <label class="e-mail1">
                            <input type="checkbox" name="remember" /> Remember Me
                        </label>
                    </div>
                    <div class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                </div>
                <div class="s-e-n-d-e-n">
                    <button type="submit" class="login-button">
                        <div class="button-with-icon">
                            <div class="login">Login</div>
                        </div>
                    </button>
                    <div class="forgot-password1">Don’t have an Account?</div>
                    <a href="{{ route('register') }}" class="button-with-icon1">
                        <div class="create-an-account">Create an Account</div>
                    </a>
                </div>
                <div class="f-a-c-e-b-o-o-k-g-o-o-g-l-e-a">
                    <div class="s-o-c-i-a-l-i-c-o-n">
                        <div class="c-o-n-t-i-n-u-e-w-i-t-h-f-a-c">
                            <div class="t-e-x-t-continuewith-facebook"></div>
                        </div>
                        <div class="senden">Or</div>
                        <div class="c-o-n-t-i-n-u-e-w-i-t-h-f-a-c1">
                            <div class="c-o-n-t-i-n-u-e-w-i-t-h-f-a-c-child"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="g-r-o-u-p1">
                <div class="sign-up-other-options">
                    <button class="facebook">
                        <div class="social-icon-facebook-parent">
                            <img class="social-icon-facebook" alt="Facebook Icon" src="{{ asset('icons/social-icon--facebook.svg') }}" />
                            <div class="continue-with-facebook">Continue with Facebook</div>
                        </div>
                    </button>
                    <button class="google">
                        <div class="social-icon-google-parent">
                            <img class="social-icon-google" alt="Google Icon" src="{{ asset('icons/social-icon--google.svg') }}" />
                            <div class="continue-with-google">Continue with Google</div>
                        </div>
                    </button>
                    <button class="apple">
                        <div class="social-icon-apple-parent">
                            <img class="social-icon-apple" alt="Apple Icon" src="{{ asset('icons/social-icon--apple.svg') }}" />
                            <div class="continue-with-apple">Continue with Apple</div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
