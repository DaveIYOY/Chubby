<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <style>
        * {
            font-family: arial;
        }
    </style>

</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 margin-tb py-4">
                <div class="text-center">
                    <h2><b>Debtor On-time Payor</b></h2>
                </div>
                <div class="text-right mb-2">
                    <a class="btn btn-success" href="{{ route('Debtors.create') }}"> <i
                            class="fa-sharp fa-solid fa-user-plus"></i></a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table id="dataTablef" class="table table-striped table-bordered" style="width: 105%;">
            <thead>
                <tr>
                    <th>Debtors ID</th>
                    <th>Debtors name</th>
                    <th>Debtors date</th>
                    <th>Debtors amount</th>
                    <th>Debtors remarks</th>
                    <th style="width:500px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Debtors as $Debtors)
                    <tr>
                        <td>{{ $Debtors->id }}</td>
                        <td>{{ $Debtors->name }}</td>
                        <td>{{ $Debtors->date }}</td>
                        <td><code>{{ $Debtors->Name}}</code></td>
                        <td><code>{{ $Debtors->Date }}</code></td>
                        <td>
                            <form action="{{ route('Debtors.destroy', $Debtors->id) }}" method="Post">
                                <a class="btn btn-info" href="{{ route('Debtors.edit', $Debtors->id) }}"><i class="fa-sharp fa-solid fa-marker fa-bounce fa-2xs" style="color: #ffffff;"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash-can fa-beat fa-2xs" style="color: #ffffff;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br><br>
        {!! $Debtors->links() !!}
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable2').DataTable();
        });
    </script>
</body>

</html>

