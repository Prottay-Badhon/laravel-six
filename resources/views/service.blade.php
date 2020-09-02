<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Service</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
POSTS
<hr>
@foreach($post as $row )
<div class="post-preview">
  <img src="{{ URL::to($row->image) }}" alt="" style="height:300px">
  <h2 class="post-title">
  {{  $row->title }}
  </h2>
  <p class="bg-success p-5 post-meta">
    <a href="" class="text-light nav-link">
    {{ $row->details }}
    </a>
  </p>
</div>
@endforeach

  {{ $post->links() }}

</div>

</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
