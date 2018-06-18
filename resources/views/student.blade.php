@extends('adminlte::master')

<!-- <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->


@section('adminlte_js')
    
    <script>
        $(document).ready(function () {
            $('.data-table').dataTable();
        });
</script>
    @yield('js')
@stop


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    
    <title>Cijfers</title>
</head>


@section('body')
<h2>Hier je persoonlijke cijfers</h2>

<table class="display data-table">
    <thead>
        <tr>
            <th>Schoolvak</th>
            <th>Cijfers</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nederlands</td>
            <td>9.2</td>
        </tr>
        <tr>
            <td>Engels</td>
            <td>9.9</td>
        </tr>
    </tbody>
</table>
@stop 





</html>