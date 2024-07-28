<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{route('addCategories')}}" method="post">
            @csrf  

            <label for="name">Ten danh muc</label><br>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name"><br>
                    @error('name')
                            <span style="color : red">{{$message}}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary">Create</button>
        </form>
</body>
</html>