<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
      <form action="{{ url('/lc')}}"  method="post">
      	@csrf
      
      	<p>Email</p>
      	<p><input type="email" name="email"></p>
      	<p>Password</p>
      	<p><input type="password" name="password"></p>
      	<p><input type="submit" name="save" value="Save"></p>
      </form>
</body>
</html>