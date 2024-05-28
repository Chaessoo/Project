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
    <div class="p-3 mb-2 bg-black text-white" style="--bs-bg-opacity: .7;">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="btn btn-outline me-2e" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-blue me-2" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-red me-2" href="https://www.instagram.com/usmhhsnz_/">More</a>
              </li>
              <li>
                <form class="container-fluid justify-content-end">
                    <a class="btn btn-outline-warning me-2 " type="button" href={{url('/masuk')}} method="get">Login</a>
                    <a class="btn btn-outline-info" type="button" href={{url('/daftar')}}  method="get">Register</a>
                  </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

{{-- NAVIGATION BAR END --}}

{{-- BODY START --}}
<h1 class="display-1 container justify-content-end">Get Your Article</h1>
<blockquote class="blockquote container ">
    <p>What do you want to try next? Think of something you’re into—like “easy<br> chicken dinner”—and see what you find.</p>
    <a class="btn btn-success me-2" type="button" href={{url('/login')}}>Explore</a>
  </blockquote>
  <br>
  <br>
  <figure class="text-center">
    <blockquote class="blockquote">
      <p> Hot News
    </blockquote>
    <figcaption class="blockquote-footer">

    </figcaption>
  </figure>

  <ul class="list-unstyled container">
    <li>This is a list.</li>
    <li>It appears completely unstyled.</li>
    <li>Structurally, it's still a list.</li>
    <li>However, this style only applies to immediate child elements.</li>
    <li>Nested lists:

        <li>are unaffected by this style</li>
        <li>will still show a bullet</li>
        <li>and have appropriate left margin</li>

    </li>
    <li>This may still come in handy in some situations.</li>
  </ul>
    </div>
  <div class="p-3 mb-2 bg-warning text-light">

  <h1 class="display-1">Search for an article</h1>
  <blockquote class="blockquote  ">
    <p>What do you want to try next? Think of something you’re into—like “easy<br> chicken dinner”—and see what you find.</p>
    <br>
  </blockquote>
  <br>
  <br>

  <figure class="text-center">
    <blockquote class="blockquote">
      <p> Poetry
    </blockquote>
    <figcaption class="blockquote-footer">

    </figcaption>

  <ul class="list-unstyled container">
    <li>This is a list.</li>
    <li>It appears completely unstyled.</li>
    <li>Structurally, it's still a list.</li>
    <li>However, this style only applies to immediate child elements.</li>
    <li>Nested lists:

        <li>are unaffected by this style</li>
        <li>will still show a bullet</li>
        <li>and have appropriate left margin</li>

    </li>
    <li>This may still come in handy in some situations.</li>
  </ul>

  <a class="btn btn-success me-2" type="button" href={{url('/login')}}>More</a>
  </div>
{{-- BODY END --}}
{{-- FOOTER --}}


</body>
</html>
