<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New employee</title>
</head>
<body>
<h1>create</h1>
<form action="{{route('category.store')}}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="name" id="" placeholder="category name">
    
<select name="category_id" id="">
    @foreach ($categories as $category)
       <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
    <input type="submit" >
</form>
</body>
</html>
