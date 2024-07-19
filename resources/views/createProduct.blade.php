<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                 <label for="name">name</label>
                 <input type="text" name="name" id="name" class="form-control" placeholder="Name"><br>

                 <label for="soluong">soluong</label>

                 <input type="text" name="soluong" id="name" class="form-control" placeholder="Name"><br>


                 <label for="price">price</label>
                 <input type="text" name="price" id="name" class="form-control" placeholder="Name"><br>

                 <button type="submit" class="btn btn-primary">Create</button>
            </form>
</body>
</html>