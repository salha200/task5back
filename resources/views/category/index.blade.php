<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>ALL category</h1>
  
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item Name</th>
       
          </tr>
        </thead>
@foreach ( $categories as $category)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$category?->name}}</td>    
  <td>
  <a href="{{route('category.edit',$category->id)}}">Edit</a>
  <a href="{{route('category.destroy',$category->id)}}">delet</a>
</td>
</tr>

@endforeach
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
