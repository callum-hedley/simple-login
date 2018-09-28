<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" type="text/css" href="../mystyle.css">
	<script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body scroll="no" style="overflow:hidden">
        <div id="page">
            <div id="loginbox">
                <h1 id="titlecontainer">
                    Login
                    <hr id="underline">
                </h1>
                <form class="signin-form" action="includes/login.php" method="POST">
                    <p id="username";>
                        username:
                      </p>
                    <p id="password";>
                        password:
                      </p>
                    <input type="text" id="userinput" name="username">
                    <input type="password" id="passinput" name="password">
                    
                    <a href="loggedin.php">
                        <button type="submit"; id="loginbutton" name="login">
                            Login
                        </button>
                    </a>
                    <a href="register.php" id="register">Register</a>
                </form>
            </div>
            
        </div>
        <script>
			$("#loginbutton").mouseenter(function(){
                $(this).css("background-color","#32284c")
			});
		</script>
        <script>
			$("#register").mouseenter(function(){
                $(this).css("color","#32284c")
			});
		</script>
        <script>
			$("#register").mouseleave(function(){
                $(this).css("color","white")
			});
		</script>
        <script>
			$("#loginbutton").mouseleave(function(){
                $(this).css("background-color","transparent")
			});
		</script>
	</body>
</html>