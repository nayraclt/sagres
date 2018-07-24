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
    <h2>Lista de alunos</h2><br/>
        <a href="/alunos/create" class="btn btn-primary" style="margin: 10px;">Novo Aluno</a>

    <table class="table table-hover table-active">
        <thead>
        <tr>
            <th> Matrícula</th>
            <th> Nome</th>
            <th> Email  </th>
            <th> UF </th>
            <th> CEP </th>
            <th> Endereço </th>
            <th> Bairro </th>
        </tr>
        </thead>
        <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <td> {{$aluno->matricula}} </td>
                <td> {{$aluno->nome}} </td>
                <td> {{$aluno->email}} </td>
                <td> {{$aluno->uf}} </td>
                <td> {{$aluno->cep}} </td>
                <td> {{$aluno->endereco}} </td>
                <td> {{$aluno->bairro}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
