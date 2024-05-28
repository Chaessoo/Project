 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

 </head>
 <body>
{{-- NAVBAR START --}}
<div class="p-3 mb-2 bg-primary-subtle bg-gradient text-dark">

  <nav class=" ">
    <form class="container-fluid justify-content-end">
      <a class="btn btn-outline-success me-2" type="button" aria-current="page" href="{{url('/create')}}">Create</a>
      {{-- <button class="btn btn-outline-warning me-2" type="button">Edit</button> --}}
      <a class="btn btn-outline-primary me-2" type="button" href={{url('/cari')}}>Search</a>
      <a class="btn btn-outline-danger me-2" type="button" href="{{url('/logout')}}">Logout</a>

    </form>
  </nav>
  <br>
  <br>
  <br>
{{-- NAVBAR END --}}
{{-- BODY --}}
<h1 class="display-6">Updates</h1>
<p><small>Search an article</small></p>


{{-- USER POST --}}
{{Auth::user()->name}}  
<h1 class="display-6">Your Posts</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
<?php $s = 1 ?>
@foreach ($admin as $a)

      <div class="card-body bg-info">
        {{-- <p class="card-text">{{$s}}</p> --}}
        <h5 class="card-title">{{$a->penulis}}</h5>
        <p class="card-text">{{$a->artikel}}</p>

        <form method="post" action={{url("/edit/$a->id")}}>
            @csrf
            <input type="submit" class="btn btn-outline-dark" value="Edit">
        </form><br>

        <form method="post" action={{url("/delete/$a->id")}}>
            @csrf
            <input type="submit" name="delete" class="btn btn-outline-danger" value="Delete">
        </form>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">


      {{-- <div class="card-body bg-warning">
        <h5 class="card-title">{{$a->penulis}}</h5>
        <p class="card-text">{{$a->artikel}}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">

      <div class="card-body bg-info">
        <h5 class="card-title">Lisa</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div> --}}
<?php $s++  ?>
@endforeach
{{-- BODY END --}}
</div>

 </body>
 </html>
