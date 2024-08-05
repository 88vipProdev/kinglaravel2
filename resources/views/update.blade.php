<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('update', $product->id) }}" method="POST">
              @csrf
              @method('POST')
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
              <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">số lượng</label>
                <input type="text" name="soluong" value="{{ $product->soluong }}" class="form-control">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary">update</button>
</form>
</body>
</html>