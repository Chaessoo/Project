<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends("template.main")
@section("gudeg")
<h1>Post Your Day Here</h1>
<br>
<br>
<form method="post" action={{url('/create')}}>
@csrf
<form>
    <div class="mb-3">
      <label for="penulis" class="form-label">Penulis</label>
      <input type="text" name="penulis" class="form-control" id="penulis">
    </div>

    <div class="mb-3">
        <label for="artikel" class="form-label">Isi</label>
        <input type="text" name="artikel" class="form-control" id="artikel">
      </div>

      <input type="hidden" name="user" value="{{Auth::user()->user}}">
      <input type="hidden" name="id" value="{{Auth::user()->id}}">

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</form>
@endsection
</body>
</html>
