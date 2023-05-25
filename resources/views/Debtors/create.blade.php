<!DOCTYPE html>
<html lang="en">
  <head>
</head>
<meta charaset="UTF-8">
<title>Debtors Payer</title>

 @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <center>
    <h2>Add Debtor</h2>
    <a href="{{route('Debtors.index')}}"></a>
    <br>
        </center>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status')}}
        </div>
    @endif
<center>
    <form action="{{ route('Debtors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        Fullname:<br> <input type="text" name="name"><br><br>

        @error('fullname')
        <div class="alert alert-danger mt-1 mb-1"> {{$message}}</div>

        @enderror
       Date: <br><input type="text" name="date"><br><br>

        @error('Date')
        <div class="alert alert-danger mt-1 mb-1">   {{$message}}</div>

        @enderror
        Amount:<br> <input type="text" name="amount"><br><br></div>

        @error('amount')
        <div class="alert alert-danger mt-1 mb-1">  {{$message}}</div>

        @enderror
        Remarks:<br> <input type="text" name="remarks"><br><br>
        @error('remarks')
        <div class="alert alert-danger mt-1 mb-1">  {{$message}} </div>


        <button type="submit" class="btn btn-outline-success">ADD Debtor    </button>
    </form>
        </center>
</body>
</html>

