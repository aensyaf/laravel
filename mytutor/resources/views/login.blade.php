<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyTutor Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
    </head>

    <body>
        @if (session('save'))
        <script>
            alert("Success");
        </script>
        @endif
        @if (session('error'))
        <script>
            alert("Failed");
        </script>
        @endif
        <div class="background">
            <div class="w3-main w3-container w3-content w3-padding-32 w3-animate-bottom" style="max-width:1400px;">
                <div class="w3-row">
                    <div class="w3-half w3-container w3-padding-64 w3-start" style="margin-top:150px;">
                        <h2>Looking for tutor suit with your learning style and progress?</h2>
                        <p class="textp">MY Tutor provide you the best platform to teach and share your knowledge with your students. Get started with us for a better future!</p>
                        <a class="btnLoginReg w3-button w3-red w3-hover-white w3-large" href = "{{ url('registration')}}">Get started!</a>
                        <br>
                    </div>

                    <div class="backdev w3-half w3-container w3-card w3-padding-64">
                        <a href = "{{ url('')}}"><img style="display: block; margin-left: auto; margin-right: auto; width: 50%;" src="../images/logo.png"></a>
                        <h4 class="welcome">Welcome back!</h4>
                        <p class="textp w3-center">We make it easy for you to teach on online platform.</p>
                        <form action="{{route('login.post')}}" method="post">
                            {{csrf_field()}}
                            <p>
                                <label class="w3-text-white"><b><i class="fa-solid fa-envelope"></i> | Email</b></label>
                                <input class="w3-input w3-border w3-round" id="email" name="tutor_email" type="email" placeholder="eg. taylor@gmail.com" required>
                            </p><br>
                            @if ($errors->has('tutor_email'))
                                <span class="w3-red">{{ $errors->first('tutor_email') }}</span>
                            @endif

                            <p>
                                <label class="w3-text-white"><b><i class="fa-solid fa-lock"></i> | Password</b></label>
                                <input input class="w3-input w3-border w3-round" id="pass" name="tutor_password" type="password" placeholder="eg. abcde12&" required>
                            </p><br>
                            @if ($errors->has('tutor_password'))
                                <span class="w3-red">{{ $errors->first('tutor_password') }}</span>
                            @endif

                            <p class="btnRemember">
                                <input class="w3-check" type="checkbox" name="remember" onclick="rememberMe()">
                                <label>Remember me</label>
                            </p><br>

                            <p>
                                <button class="btnLoginReg w3-hover-white w3-large w3-block">Login</button>
                            </p>
                        </form>
                        <hr>
                        <p class="w3-center w3-text-white">Dont have an account yet? 
                        <b><a class="w3-text-red" style="text-decoration:none;" href="{{ url('registration')}}"> Register now</a></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      
        <footer class="smalltext">
            <p>Copyright &copy;2022 MY Tutor | Get serious, get tutor | Your use of this website constitutes acceptance of the Terms of Use, Privacy Policy and Cookie Policy. Do Not Sell My Personal Information </p>
        </footer>
    </body>
</html>
