<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <section class="p-5">
    <table class="table table">
      <thead class="thead-dark">
        <tr>
          <th>Category ID</th>
          <th>Title</th>
          <th>Details</th>
          <th>Name</th>
          <th>Slug Name</th>
          <th>Image</th>



        </tr>
      </thead>
      <tbody>
        @foreach($post as $row)
        <tr>
          <td>{{  $row->categoryId }}</td>
          <td>{{  $row->title }}</td>
          <td>{{  $row->details }}</td>
          <td>{{  $row->name }}</td>
          <td>{{  $row->slug }}</td>


          <td><img src="{{ URL::to($row->image) }}" alt="image" style="height:200px ;width:250px" class=""></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
  </section>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
