<!DOCTYPE html>
<html>
<head>
<title>Register
</title>
</head>
<body>
<form action="/register" method="post">
@csrf
<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
<caption>Registration form</caption>
<tr>
<th>Enter your name</th>
<td><input type="text" name="name" id="name" title="enter your name" placeholder="enter your name" required/></td>
</tr>
<tr>
<th>Enter your email</th>
<td><input type="email" name="email" id="email" required/></td>
</tr>
<tr>
<th>Enter your age</th>
<td><input type="number" name="age" id="age" required/></td>
</tr>
<tr>
<th>Select your DOB</th>
<td><input type="date" name="birthday" id="birthday" required/></td>
</tr>
<tr>
<th>Enter your address</th>
<td><textarea rows="8" cols="20" name="address" id="address" required></textarea></td>
</tr>
<tr>
<th>Enter your phone</th>
<td><input type="tel" placeholder="(Area code) Number" name="phone" id="phone" required></td>
</tr>
<tr>
<th>Enter your password</th>
<td><input type="password" name="password" id="password" required/></td>
</tr>
<tr>
<td>
<input type="submit" value="Submit" class="btn btn-primary" style="width:100%">
</td>
</tr>
</table>
</form>
</body>
</html>