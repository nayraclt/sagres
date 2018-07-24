<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h2>Lista de Disciplinas</h2><br/>
        <a href="/disciplinas/create" class="btn btn-primary" style="margin: 10px;">Nova Disciplina</a>

    <table class="table table-hover table-active">
        <thead>
        <tr>
            <th> Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($disciplinas as $disciplina)
            <tr>
                <td> {{$disciplina->nome}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
