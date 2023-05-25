<html>
    <head>
       <bold><title>LogIn Form</title></bold>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   </head>
<body>
    <center>
    <br><br><br><br><br><br><br><br><div id = "frm">  
                      <h1 style="color:purple">Login Form </h1>  
        <form method = "POST" action="{{route('login')}}">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p> <br><br>
            
        </form>  
        <br>
       @if ($errors->any())

       <div style="color:red;">
        {{ $errors->first()}}

        @endif
        <br>

    </div>    
  
    </center>
</body>
</html>     