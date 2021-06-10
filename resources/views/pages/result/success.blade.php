<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nome de usuário</label>
            <input type="text" class="form-control" value="{{$name}}">
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input type="text" class="form-control" name="username" value="{{$login}}">
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control" name="username" value="{{$id}}">
          </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="text" class="form-control" name="username" value="{{$email}}">
          </div>
        </div>
</body>
</html>