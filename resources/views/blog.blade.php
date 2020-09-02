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
    <form action="{{ route('submit') }}" method="post">
      @csrf
      <form action="" class="form-group">
        <input type="text" class="form-control " name="name" placeholder="Enter Name">
        <input type="text" class="form-control " placeholder="Enter slug" name="slug">
        <input type="submit" class="btn btn-success mt-3" value="Submit">

      </form>
    </form>
    <div class="mt-5 text-center">
      <a href="{{ route('add') }}" class="btn btn-danger">Add Category</a>
      <a href="{{ route('allpost') }}" class="btn btn-dark ">View Post</a>
    </div>

  </section>

<script src="js/app.js"></script>
</body>
</html>
