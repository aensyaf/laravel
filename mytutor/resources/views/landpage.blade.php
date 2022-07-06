<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MY Tutor</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
    </head>

    <body class = "w3-black">
        <div class = "w3-container w3-padding-32 w3-animate-bottom">
            <a href = "{{ url('')}}"><img style="display: block; margin-left: auto; margin-right: auto; width: 30%;" src="../images/logo.png"></a>
        </div>

        <div class = "w3-container w3-padding w3-center">
            <img class="w3-round-large" style="display: block; margin-left: auto; margin-right: auto; width: 90%; height:290px; object-fit: cover;" src="../images/bannertutors.jpg">
            <br><b><p style="font-size:24px">ABOUT US</p></b>
            <p style="text-align:justify; padding-left:68px; padding-right:68px; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Duis convallis convallis tellus id interdum velit. Ornare arcu dui vivamus arcu felis bibendum ut tristique et. Gravida quis blandit turpis cursus. Ultrices gravida dictum fusce ut placerat orci. Magna fringilla urna porttitor rhoncus dolor purus non enim. Ullamcorper eget nulla facilisi etiam. Cras ornare arcu dui vivamus arcu felis bibendum ut. Eget est lorem ipsum dolor sit amet consectetur adipiscing. Dictum sit amet justo donec enim diam vulputate ut. Nam aliquam sem et tortor. Diam vel quam elementum pulvinar etiam. Accumsan in nisl nisi scelerisque eu. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus.</p>
            <br>
            <a href="{{ url('login') }}">
                <button class="btnLoginReg w3-hover-white" style="transition: .5s;width:90%; margin-bottom:20px">Login</button>
            </a>
            <br>
            <a href="{{ url('registration') }}">
                <button class="btnLoginReg w3-hover-white" style="transition: .5s;width:90%">Register</button>
            </a>
        </div>

        <footer class="smalltext">
        <p>Copyright &copy;2022 MY Tutor | Get serious, get tutor | Your use of this website constitutes acceptance of the Terms of Use, Privacy Policy and Cookie Policy. Do Not Sell My Personal Information </p>
      </footer>
    </body>
</html>