<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>soluong</th>
                    <th>price</th>
                    <th>update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $listItem)
                    <tr>
                        <td>{{$listItem->name}}</td>
                        <td>{{$listItem->soluong}}</td>
                        <td>{{$listItem->price}}</td>
                        <td><a href="{{ route('Viewupdate', ['id' =>$listItem->id]) }}" class="btn btn-primary">Update</a></td>
                    
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>