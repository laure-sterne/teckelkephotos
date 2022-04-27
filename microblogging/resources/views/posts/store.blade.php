<!DOCTYPE html>
<html>
<head>
    <title>Publish here your photo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    Publies ici tes quelques photos : 
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{ url('posts') }}">
       @csrf
        <div class="form-group">
          <input type="hidden" id="user_id" name="user_id" class="form-control" value="{{Auth::user()->id}}" required="" >
        </div>
        <div class="form-group">
          <label for="description">Ta description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="img_url">Ta photo</label>
          <input type="url" class="form-control" required="url" name="img_url">
        </div>
        <button type="submit" class="btn btn-primary">Publiez</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>