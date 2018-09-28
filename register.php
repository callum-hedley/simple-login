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
                    Register
                    <hr id="underline">
                </h1>
                <form class="register-form" action="includes/registration.php" method="POST">
                    <p id="username";>
                        username:
                      </p>
                    <p id="password";>
                        password:
                      </p>
                    <input type="text" id="userinput" name="username">
                    <input type="password" id="passinput" name="password">
                    <a href="index.php">
                        <button type="submit"; id="registerbutton" name="register">
                            Register
                        </button>
                    </a>
                </form>
            </div>
        </div>
            <script>
			$("#loginbutton").mouseenter(function(){
                $(this).css("background-color","#32284c")
			});
		</script>
        <script>
			$("#loginbutton").mouseleave(function(){
                $(this).css("background-color","transparent")
			});
		</script>
    </body>
</html>