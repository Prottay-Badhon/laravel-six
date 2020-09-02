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
    <form action="{{ route('imageInsert') }}" method="post" enctype="multipart/form-data">
   @csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Catagory </label>
      <div class="col-sm-10">

          <select class="form-control" name="catId">
            @foreach($category as $row)
            <option value="{{ $row->id }}">{{ $row->name }}</option>
            @endforeach
          </select>
      </div>
    </div>


    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Title" name="title">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
      <div class="col-sm-10">
        <textarea name="details" rows="4" cols="80" class="form-control" placeholder="Enter details"></textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="image">
          <label class="custom-file-label" for="customFile">Select  image</label>
        </div>
      </div>
    </div>



    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </section>
  <script src="js/app.js"></script>
</body>
</html>
