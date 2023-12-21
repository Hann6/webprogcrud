<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <form method = "post" action="{{route('update', ['index' => $index])}}">
        @csrf
        @method('put')
        <div>
            <label> ID:  </label>
            <input type="number" name = "id" placeholder="ID" value = "{{$index->id}}"/>
        </div>

        <div>
            <label> Name:  </label>
            <input type="text" name = "name" placeholder="Name" value = "{{$index->name}}"/>
        </div>

        <div>
            <label> Age:  </label>
            <input type="number" name = "age" placeholder="Age" value = "{{$index->age}}"/>
        </div>

        <div>
            <input type="submit" value="UPDATE">
        </div>

    </form>
</body>
</html>