<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">

        <style>
            table, td, th {
                border: 1px solid;
            }

            table {
                width: 100%;
            }
        </style>

        <script>
            function sideMenu() {
                var x = document.getElementById("idsidemenu");
                if(x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                }else{
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
        
    </head>
    <body class="antialiased">
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

        <div>
            <div class="w3-bar w3-card w3-black w3-padding" id="myNavbar">
                <img href = "{{ url('mainpage')}}" class="w3-bar-item w3-button w3-left w3-hover-black" src="../images/logohome.png">
                <div class="w3-right w3-hide-small">
                    <a href="" class="w3-bar-item w3-button w3-round-xlarge w3-hover-red" style="margin-right:5px; font-size: 12px"><i class="fa-solid fa-user"></i> Profile</a>
                    <a href = "{{ url('login')}}" class="w3-bar-item w3-button w3-round-xlarge w3-hover-red" style="margin-right:5px; font-size: 12px">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                    </a>
                </div>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            </div>
        </div>

        <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">CLOSE ×</a><hr>
            <a href="#profile" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-user"></i> Profile</a><hr>
            <a href = "{{ url('login')}}" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a><hr>
        </nav><br>

        <header class="w3-center w3-padding-32 w3-wide w3-text-black">
            <h1 style="font-weight:bold; font-size:32px">SUBJECT LIST</h1>
        </header>

        <div>
            <button class="w3-button w3-round w3-center w3-red w3-margin" style="text-align:center; display:block;"
                onclick="document.getElementById('newItem').style.display='block';return false;">Add Subject</button>
        </div>
        
        <div class="w3-padding" style="overflow-x:auto; margin-bottom: 68px">
            <table>
                <thead class="w3-red">
                    <th>ID</th>
                    <th>SUBJECT NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>TOTAL HOURS</th>
                </thead>
                @foreach ($listSubjects as $listItem)
                <tr>
                    <td class="w3-center">{{ $loop->iteration }}</td>
                    <td>{{ $listItem->subject_name}}</td>
                    <td>{{ $listItem->subject_description}}</td>
                    <td class="w3-center">{{ $listItem->subject_price}}</td>
                    <td class="w3-center">{{ $listItem->subject_hour}}</td>
                @endforeach
            </table><br>
        </div><br>

        <footer class="smalltext w3-bottom w3-black">
            <p>Copyright &copy;2022 MY Tutor | Get serious, get tutor | Your use of this website constitutes acceptance of the Terms of Use, Privacy Policy and Cookie Policy. Do Not Sell My Personal Information </p>
        </footer>
            
        <div id="newItem" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-round-large" style="width:520px">
                <header class="w3-row w3-black"><span onclick="document.getElementById('newItem').style.display = 'none'" 
                    class="w3-button w3-display-topright w3-small">&times;</span>
                    <h4 class="w3-center">NEW SUBJECT DETAILS</h4>
                </header>
                <div class="w3-padding">
                    <form method="post" action="{{ route('savesubj') }}">
                        {{csrf_field()}}
                        <p><i class="fa-solid fa-book"></i> | Name<input class="w3-input w3-round w3-border" type="text" name="subject_name" placeholder="Name"></p>
                        <p><i class="fa-solid fa-pen-to-square"></i> | Description<input class="w3-input w3-round w3-border" type="text" name="subject_description" placeholder="Description"></p>
                        <p><i class="fa-solid fa-sack-dollar"></i> | Price (RM)<input class="w3-input w3-round w3-border" type="number" name="subject_price" placeholder="Price" step="any"></p>
                        <p><i class="fa-solid fa-clock"></i> | Total Hours<input class="w3-input w3-round w3-border" type="number" name="subject_hour" placeholder="Total Hours"></p>
                        <p class="w3-center"><button class="w3-button w3-red w3-round w3-block" type="submit">Create</button></p>
                    </form>
                </div>
            </div>
        </div>

        <script>
            var mySidebar = document.getElementById("mySidebar");
            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                } else {
                    mySidebar.style.display = 'block';
                }
            }
            function w3_close() {
                mySidebar.style.display = "none";
            }
        </script>
    </body>
</html>