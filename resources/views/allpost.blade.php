<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <section class="p-5">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Category ID</th>
          <th>Title</th>
          <th>Details</th>
          <th>Image</th>
          <th>Action</th>


        </tr>
      </thead>
      <tbody>
        @foreach($post as $row )
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->categoryId}}</td>
          <td>{{$row->title}}</td>
          <td>{{$row->details}}</td>
          <td><img src="{{$row->image}}" alt="image" style="height:80px ;width:85px" class="rounded-circle"></td>
          <td>
            <a href="{{ url('edit/'.$row->id)  }}" class="btn btn-primary">Edit</a>
            <a href="{{ url('delete/'.$row->id)  }}" class="btn btn-danger">Delete</a>
            <a href="{{ url('show/'.$row->id) }}" class="btn btn-success">view</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>
<script src="js/app.js"></script>
</body>
</html>
