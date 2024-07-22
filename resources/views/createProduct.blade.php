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
                 <label for="name">name</label><br>
                 <input type="text" name="name" id="name" class="form-control" placeholder="Name"><br>
                    @error('name')
                            <span style="color : red">{{$message}}</span>
                    @enderror
                 <label for="soluong">soluong</label><br>

                 <input type="text" name="soluong" id="name" class="form-control" placeholder="Name"><br>
                        @error('soluong')
                                <span style="color: red;">{{$message}}</span><br>
                        @enderror

                 <label for="price">price</label><br>
                 <input type="text" name="price" id="name" class="form-control" placeholder="Name"><br>
                        @error('price')
                            <span style="color: red;">{{$message}}</span>
                        @enderror
                 <button type="submit" class="btn btn-primary">Create</button>
            </form>
</body>
</html>