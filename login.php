<html>
<head>
<title>Login Page</title>
</head>
<body bgcolor="lightblue">
<h3 style="text-align:center;margin-top:10%"><b>User Login</b></h3>
<div class="container" style="margin-top:10%">
<form name="loginForm" method="post" action="login.php">
<table width="20%" bgcolor="0099CC" align="center">

<tr>
<td colspan=2><center><font size=4></font></center></td>
</tr>

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="pwd"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input type="button" value="Login" id="log"></td>
</tr>

</table>
</form>
</div>
<script type="text/javascript">
    document.getElementById("log").onclick = function () {
        location.href = "course.php";
    };
</script>


</body>
</html>