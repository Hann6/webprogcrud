<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
            <div>{{session('success')}}</div>
        @endif
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($index as $index)
                <tr>
                    <td>{{$index->id}}</td>
                    <td>{{$index->name}}</td>
                    <td>{{$index->age}}</td>
                    <td>
                        <a href="{{route('edit', ['index' => $index])}}">Edit</a>
                    </td>
                <td>
                    <form method = "post" action="{{route('delete', ['index' => $index])}}"> 
                        @csrf
                        @method('delete')
                        <input type="submit" value = "Delete" />
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>