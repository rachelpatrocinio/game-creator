<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite ('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    
    <div class="container">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Type</th>
      <th scope="col">Category</th>
      <th scope="col">Weight</th>
      <th scope="col">Cost</th>
      <th scope="col">Damage Dice</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($items as $item)
    <tr>
      <th scope="row">{{$item->id }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->slug }}</td>
      <td>{{ $item->type }}</td>
      <td>{{ $item->category }}</td>
      <td> {{ $item->weight }}</td>
      <td>{{ $item->cost }}</td>
      <td> {{$item->damage_dice }}</td>
    </tr>     
    @endforeach
  </tbody>
</table>

    </div>
    
</body>
</html>