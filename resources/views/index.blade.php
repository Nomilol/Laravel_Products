<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Stock de produits</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
  </head>
  <body>
    <h1>Produits</h1>
    <table>
      <th>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Quantité</td>
          <td>Prix</td>
        </tr>
      </th>
      @foreach ($products as $value)
      <tbody>
        <tr>
          <td>{{$value->id}}</td>
          <td><a href="/show/{{$value->id}}">{{$value->name}}</a></td>
          <td>{{$value->stock}}</td>
          <td>{{$value->price}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <form class="ui form" action="/addToStock" method="post">
      {{ csrf_field() }}
      <div class="forName">
        <label for="name">Produit</label>
        <input type="text" name="name" value="">
      </div>
      <div class="forStock">
        <label for="stock">Stock</label>
        <input type="text" name="stock" value="">
      </div>
      <div class="forPrice">
        <label for="price">Prix</label>
        <input type="text" name="price" value="">
      </div>
      <button type="submit" class="ui purple button" name="button">Valider</button>
    </form>
  </body>
</html>
