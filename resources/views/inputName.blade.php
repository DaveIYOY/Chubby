<html>
    <head>
       <bold><title>Pinayflix</title></bold>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   </head>
<body>
    <center><br><br><br><br><br><br><br><br>
     <h1>Election Age Verifier</h1>
        <form method="POST" action="/inputName">
            <label for="inputName">Enter your Age: </label>
            @csrf
            <br><br><input type="number" name="inputName" id="inputName" min="1" required /><br>
           <br> <button type="submit">Submit Name</button><br>
        <br></form>
          @if($name >= 18)
                 <h1>Age: {{$name}}</h1>
                 <h1> You are Eligable to Vote!</h1>
          @elseif($name >= 18)
                  <h1>Age: {{$name}}</h1>
                  <h1> You not are Eligible to Vote!</h1>
          @elseif($name >= 15)
                  <h1>Age: {{$name}}</h1>
                  <h1> You are Eligable to Vote in Sk!</h1>
          @elseif($name >=1 && $name <=14)
                  <h1>Age: {{$name}}</h1>
                  <h3>You are not eligible to vote!</h3>
           @else
           <h3>Put a number first</h3>
           @endif
        <br>
            
    </center>
</body>
</html>     