<!DOCTYPE html>

<head>
        <title>LOGIN FORM</title>
    </head>
    <body>
        <center>
            <form method="POST" action="{{ route('loginform') }}">
            @csrf
            <label for="username">username: </label><br>
            <br>  <input type="text" id="username" name="username" required/><br><br>
            <br> <label for="password">password: </label><br><br>
            <br> <input type="password" name="password" id="password" required/><br><br>
            
            <br><input type="submit" value="Login"/><br><br>
            </form></br>

            @if($errors->any())
            <div style="color=red";>
            {{ $errors->first() }}
            </div>
            @endif

   
        </center>
    
</body>
</html>