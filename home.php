<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>therapy thrive</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Playwrite+NL:wght@100..400&family=Protest+Revolution&display=swap" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            transition: background-color 0.3s, color 0.3s;
        }
        body.light-mode {
            background-color: rgb(118, 186, 211);
            color: #000000;
        }
        body.dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
        #one{
            font-family: "Playwrite NL", cursive;
            font-optical-sizing: auto;
            font-style: normal;
            font-size: 40px;
        }
        #two{
            font-family: "Protest Revolution", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 50px;
            margin-left: 700px;
        }
        .navbar{
            width: 100%;
            height: fit-content;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #38547b;
        }
        .toggler-container{
            display: flex;
            align-items: center;
        }
        .theme-toggler {
            cursor: pointer;
            display: flex;
           
            align-items: center;
        }

        #home:hover{
            background-color:none;
        }

        .five{
            font-size:35px;
            font-family: monospace;
            border: 1px;
            
        }
        #diet:hover{
            background-color:#38547b;
            border:1px;
            border-radius: 10px;
            padding: 20px;

        }
       
        #home{
            border-left: 9px solid #38547b;
            margin-left: 80px;
        }
        #resource:hover{
            background-color: #38547b;
            border:1px;
            border-radius: 10px;
            padding: 20px;
        }
        #session:hover{
            background-color:#38547b;
            border:1px;
            border-radius: 10px;
            padding: 20px;
        }
        #Feedback:hover{
            background-color: #38547b;
            border:1px;
            border-radius: 10px;
            padding: 20px;
        }
        #img1{
            height: 100px;
            width: 100px;
            border-radius: 50%;
            margin-left: 90px;
        }
        #calculator:hover{
            background-color: #38547b;
            border:1px;
            border-radius: 10px;
            padding: 20px;
        }
        #des{
  font-family: "Ubuntu", sans-serif;
  font-weight: 300;
  font-style: normal;
  font-size: 30px;
}
#img2{
    height: 500px;
    width: 450px;
    border-radius:2px;
}
.container{
        display: grid;
        width: 96%;
        gap: 1.8rem;
        grid-template-columns: 75rem auto;
        margin: 0 auto;
}
    </style>
</head>
<body class="light-mode">
    <div class="all">
        <div class="navbar">
            <div>
                <img src="C:\Users\Dell\Pictures\logo.jpg" id="img1">
                <span id="two">T</span><span id="one">herapythrive</span>
            </div>
            <div class="toggler-container">
                <span class="material-symbols-outlined active" id="light-mode-icon">light_mode</span>
                <span class="material-symbols-outlined" id="dark-mode-icon" style="margin-right: 50px;">dark_mode</span>
            </div>
        </div>
        <br><br>
        <div class="five">
            <nav>
          <span  id="home"> Home </span>
          <span style="margin-left: 90px;" id="diet" onclick="diet()"> Diet plan </span>
          <span style="margin-left: 80px;" id="resource" onclick="resources()"> Resources </span>
          <span style="margin-left: 80px;" id="session" onclick="session()"> Session booking</span>
          <span style="margin-left: 100px;" id="Feedback" onclick="feedback()"> Feedback </span>
          <span style="margin-left: 100px;" id="calculator" onclick="calculator()">Health Calculator</span>
          <span style="margin-left: 100px;" id="calculator" onclick="selfassessment()">self assessemnet</span>


</nav>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="container">
        <div class="details"><br>
        <span style="margin-left: 90px;font-family: segoe script;font-size: 50px;color:rgb(62, 31, 62)">Mental health</span><br><br>
        <span id="des" style="margin-left: 90px;">Empowering your mental wellness with compassionate care and expert guidance.</span><br>
        <span id="des" style="margin-left: 100px;">Discover a supportive community and personalized resources to help you thrive.</span> 
        </div>
        <div class="image">
        <span><img src="https://www.ucf.edu/wp-content/blogs.dir/20/files/2023/05/mental-health-1200x800.jpg" id="img2"  alt=""></span>
        </div>
        </div>
<br>
        <span   style="margin-left: 100px;"><i class="fa fa-envelope-o"></i>&nbsp;therapythrive@gmail.com</span>
        <span style="margin-left: 500px;"><i class="fa fa-phone"></i>&nbsp;9063306457</span>
        <span style="margin-left: 500px;"><i class="fa fa-globe" aria-hidden="true"></i></i>&nbsp;www.therapythrive</a></span>
    <script>
        const body = document.body;
        const lightModeIcon = document.getElementById('light-mode-icon');
        const darkModeIcon = document.getElementById('dark-mode-icon');

        function toggleTheme() {
            if (body.classList.contains('light-mode')) {
                body.classList.remove('light-mode');
                body.classList.add('dark-mode');
            } else {
                body.classList.remove('dark-mode');
                body.classList.add('light-mode');
            }
        }

        lightModeIcon.addEventListener('click', toggleTheme);
        darkModeIcon.addEventListener('click', toggleTheme);


    function diet() {
        window.location.href ="diet.php";
    }
    function resources() {
        window.location.href ="resources.php";
    }
    function feedback() {
        window.location.href ="feedback.php";
    }
    function session() {
        window.location.href ="session.php";
    }

    function calculator() {
        window.location.href ="calculator.php";
    }
    function selfassessment() {
        window.location.href ="selfassessment.php";
    }
    </script>
</body>
</html>
