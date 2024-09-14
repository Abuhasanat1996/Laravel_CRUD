<!DOCTYPE html>
<html>
    <head>
        <title>My web page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <h1 style="text-align:center">Product Page</h1>
    <a href="/create" class="btn btn-primary">Add Product</a>

    <table class="table mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Product Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($products as $p)
                <tr>
                    <th>{{ $p->id }}</th>
                    <th>{{ $p->name }}</th>
                    <th>{{ $p->qnt }}</th>
                    <th>{{ $p->price }}</th>
                    <th><a href="/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{ $p->id }}" class="btn btn-danger">Delete</a>
                    </th>
                </tr>
            @endforeach
        
    </tbody>
</table>

    </body>
</html>