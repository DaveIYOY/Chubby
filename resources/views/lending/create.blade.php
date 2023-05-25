<!DOCTYPE html>
<html lang="en">
  <head>
</head>
<meta charaset="UTF-8">
<title>CRE</title>

 @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <center>
    <h2>Add Employee Page</h2>
    <a href="{{route('employees.index')}}"></a>
    <br>
        </center>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status')}}
        </div>
    @endif
<center>
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        Fullname:<br> <input type="text" name="fullname"><br><br>

        @error('fullname')
        <div class="alert alert-danger mt-1 mb-1"> {{$message}}</div>

        @enderror
        Email Address: <br><input type="text" name="email_address"><br><br>

        @error('email_address')
        <div class="alert alert-danger mt-1 mb-1">   {{$message}}</div>

        @enderror
        Username:<br> <input type="text" name="username"><br><br></div>

        @error('username')
        <div class="alert alert-danger mt-1 mb-1">  {{$message}}</div>

        @enderror
        Password:<br> <input type="text" name="password"><br><br>
        @error('password')
        <div class="alert alert-danger mt-1 mb-1">  {{$message}} </div>

        @enderror
        Status:<br> <input type="text" name="status"><br><br>

        @error('status')
        <div class="alert alert-danger mt-1 mb-1">   {{$message}} </div>
        @enderror
         
        <button type="submit" class="btn btn-outline-success">ADD EMPLOYEE</button>
    </form>
        </center>
</body>
</html>

