<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stock de produits</title>
  </head>
  <body>
    <h1>Hello </h1>
    @foreach ($products as $dataProducts)
    <a href="#"><li>{{$dataProducts->name}}</li></a>
    @endforeach
  </body>
</html>
