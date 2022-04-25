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
    Publish here your photo
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{ url('posts') }}">
       @csrf
        <div class="form-group">
          <label for="user_id">User</label>
          <input type="text" id="user_id" name="user_id" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="img_url">Your image</label>
          <input type="file" class="form-control" required name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>