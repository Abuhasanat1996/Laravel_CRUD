<!DOCTYPE html>
<html>
    <head>
        <title>My web page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="text-align:center;">
        <h1 style="text-align:center">Create Product</h1>
        
    <form action="/update/{{$products->id}}" method="POST">
        @csrf
  <div class="mb-4">
  <label>Name</label>
  <input type="text" name="name" value="{{$products->name}}">
  </div>
  <div class="mb-4">
  <label>Qnt</label>
  <input type="text" name="qnt" value="{{$products->qnt}}">
  </div>
  <div class="mb-4">
  <label>Price</label>
  <input type="text" name="price" value="{{$products->price}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </body>
</html>