<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Index Page</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <br><br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="col-xs-1">Nome</th>
          <th>Status</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($lampadas as $lampada)
        <tr>
          <td>{{$lampada['nome']}}</td>
          <td>{{$lampada['status']}}</td>
          <td>
            @if($lampada['status'] == 1)
            <a href="/lampada/{{$lampada['id']}}" class="btn btn-primary">Ligado</a>
            @else
            <a href="/lampada/{{$lampada['id']}}" class="btn btn-dark">Desligado</a>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>