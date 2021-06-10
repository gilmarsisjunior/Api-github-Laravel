<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GitHub Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="{{url('http://127.0.0.1:8000/api')}}">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nome de usuário</label>
          <input type="text" class="form-control" name="username" placeholder="gilmarsisjunior">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
</body>
</html>