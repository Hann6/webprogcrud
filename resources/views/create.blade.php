<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <form method = "post" action="{{route('store')}}">
        @csrf
        @method('post')
        <div>
            <label> ID:  </label>
            <input type="number" name = "id" placeholder="ID" />
        </div>

        <div>
            <label> Name:  </label>
            <input type="text" name = "name" placeholder="Name" />
        </div>

        <div>
            <label> Age:  </label>
            <input type="number" name = "age" placeholder="Age" />
        </div>

        <div>
            <input type="submit" value="SAVE">
        </div>

    </form>
</body>
</html>