<!DOCTYPE html>
<html>
<head>
    <title>Enter Password</title>
</head>
<body>
    <h2>Please enter the password to access this page</h2>

    @if($errors->any())
        <p style="color:red;">{{ $errors->first('password') }}</p>
    @endif

    <form method="POST">
    @csrf
    <label>Enter Password:</label>
    <input type="password" name="route_password" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>
