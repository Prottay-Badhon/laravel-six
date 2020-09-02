<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <section class="p-5">

    <form action="{{ url('update/post/'.$post->id) }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" value="{{ $post->title }}" name="title">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Details</label>
      <div class="col-sm-10">
          <textarea name="details" rows="4" cols="80" class="form-control" >{{ $post->details}}</textarea>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
          <select class="form-control" name="name">
            @foreach($category as $row)
            <option value="{{ $row->id }}" <?php if($row->id == $post->categoryId) echo "selected";?> >{{ $row->name }}</option>
            @endforeach
          </select>

      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Old image</label>
      <div class="col-sm-10">
          <img src="{{ URL::to($post->image) }}" alt="" style="height:80px;width:80px;float:right">
      </div>
    </div>


    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image">

          <input type="hidden" class="custom-file-input" value="{{ $post->image}}" name="oldimage">
          <label class="custom-file-label" for="customFile">Select New image</label>
        </div>
      </div>
    </div>



    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
  </form>

  </section>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
