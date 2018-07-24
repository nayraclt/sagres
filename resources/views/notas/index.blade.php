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
    <h2>Notas do Aluno: {{$aluno->nome}}</h2><br/>
        <a href="/notas/create?id_aluno={{$aluno->id}}" class="btn btn-primary" style="margin: 10px;">Lançar Nota</a>

    <table class="table table-hover table-active">
        <thead>
        <tr>
            <th> Disciplina</th>
            <th> Nota</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notas as $nota)
            <tr>
                <td> {{$nota->nome}} </td>
                <td> {{$nota->nota}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <h3>Média das notas</h3>

        @foreach($mediaNotas as $nota)
        <span>{{$nota['nomeDisciplina']}} - {{$nota['mediaNotas']}}</span>
            <br/>
        @endforeach
</div>
</body>
</html>
