<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyTutor Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">

        <script>
            function sideMenu() {
                var x = document.getElementById("idsidemenu");
                if(x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                }
                else{
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
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

        <section class="w3-black">
            <div class="w3-bar w3-padding">
                <a href="{{ url('login')}}" class="w3-bar-item w3-button w3-hide-small w3-right w3-grey w3-round-xlarge w3-hover-red">Login</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="sideMenu()">&#9776</a>
            </div>

            <div id="idsidemenu" class="w3-white w3-hover-red w3-bar-block w3-hide w3-hide-large w3-hide-medium">
                <a href="{{ url('login')}}" class="w3-bar-item w3-button w3-center">Login</a>
            </div>

            <div class="w3-main w3-content w3-padding-32 w3-animate-bottom" style="max-width:1400px">
                <div class="w3-row w3-padding-16">
                <div class="w3-half w3-container w3-min-opacity w3-center w3-min-opacity w3-padding-32">
                <br><img class="w3-center" style="width:100%; height:100%;" src="{{ asset('images/regimg.png') }}">
            </div>

            <div class="w3-half w3-container w3-padding-16 w3-border">
                <h4 class="welcome w3-center" style="font-size:32px">Create an account</h4>
                <p class="textp w3-center">We make it easy for you to teach on online platform.</p>
                <form action="{{route('register.post') }}" method="post">
                    {{csrf_field()}}
                    <label for="name"><i class="fa fa-user"></i> | Full Name</label>
                    <p><input id="name" class="w3-input w3-round w3-border" type="name" name="tutor_name" required> </p>
                    @if ($errors->has('tutor_name'))
                        <span class="text-danger">{{ $errors->first('tutor_name') }}</span>
                    @endif

                    <label for="email"><i class="fa fa-envelope"></i> | Email</label>
                    <p><input id="email" class="w3-input w3-round w3-border" type="email" name="tutor_email" required></p>
                    @if ($errors->has('tutor_email'))
                        <span class="text-danger">{{ $errors->first('tutor_email') }}</span>
                    @endif

                    <label><i class="fa-solid fa-house-chimney-user"></i> | Mailing Address</label>
                    <p><textarea id="address" class="w3-input w3-round w3-border" type="address" name="tutor_address" required></textarea></p>
                    @if ($errors->has('tutor_address'))
                        <span class="text-danger">{{ $errors->first('tutor_address') }}</span>
                    @endif

                    <div class="w3-row">
                        <div class="w3-half" style="padding-right:4px">
                            <label><i class="fa fa-phone"></i> | Contact no</label>
                            <p><input id="num" class="w3-input w3-round w3-border" type="num" name="tutor_phone" required></p>
                            @if ($errors->has('tutor_phone'))
                                <span class="text-danger">{{ $errors->first('tutor_phone') }}</span>
                            @endif
                        </div>
                        <div class="w3-half" style="padding-right:4px;">
                            <label><i class="fa-solid fa-city"></i> | States</label>
                            <p><select class="w3-select w3-border w3-round" name="tutor_state" type="state">
                                <option value="Kedah">Kedah</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Pulau Pinang">Pulau Pinang</option>
                                <option value="Perak">Perak</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Terengganu">Terengganu</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Melaka">Melaka</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Johor">Johor</option>
                                <option value="WP Kuala Lumpur">WP Kuala Lumpur</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option></select></p>
                            @if ($errors->has('tutor_state'))
                                <span class="text-danger">{{ $errors->first('tutor_state') }}</span>
                            @endif
                        </div>
                        
                    </div>
                    <label for="pass"><i class="fa-solid fa-lock"></i> | Password</label>
                    <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="tutor_password" required></p>

                    @if ($errors->has('tutor_password'))
                        <span class="text-danger">{{ $errors->first('tutor_password') }}</span>
                    @endif

                    <button class="w3-btn w3-round w3-border w3-red w3-block w3-hover-white">Register</button>
                </form>
                <hr><p class="w3-center w3-text-white">Already registered?<b><a class="w3-text-red" style="text-decoration:none;" href="{{ url('login')}}"> Login Here</a></b></p>
            </div>
        </section>

        <footer class="smalltext w3-red">
            <p>Copyright &copy;2022 MY Tutor | Get serious, get tutor | Your use of this website constitutes acceptance of the Terms of Use, Privacy Policy and Cookie Policy. Do Not Sell My Personal Information </p>
        </footer>
    </body>
</html>