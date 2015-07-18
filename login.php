<!DOCTYPE HTML>
<html>
<head>
<title>Sign-In</title>
<link rel="stylesheet" type="text/css" href="style-sign.css">
</head>
<body id="body-color">
 <style>
 /* unvisited link */
a:link {
    color: #FF0000;
}

/* visited link */
a:visited {
    color: #00FF00;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;
}

 body{
 background-image: url("https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRtoT_SilyHOxFEXHMHNttybSwolMkNl-36lYGrIEOqmuWA_AZp");
} </style>

<div id="Sign-In"> 
 
 <fieldset style="width:30%">
 
 <h2 style="color:yellow">LOG-IN-HERE</h2>
 <form method="POST" action="connectivity.php">
 <p1 style="color:yellow"><i>username</i></p1><br>
 <input type="text" name="user" size="40">
 <br><br> <p2 style="color:yellow"><i>password</i></p2> <br>
 <input type="password" name="pass" size="40">
 <br> <br>
 <input id="button" type="submit" name="submit" value="Log-In"><br> 
</form>
</fieldset>
</div>
</body>
</html> 

