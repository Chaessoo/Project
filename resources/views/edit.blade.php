@extends("template.main")
@section("gudeg")
<form method="post" action={{url("/update",$admin->id)}}>
    @csrf

        <div class="mb-3">
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" name="penulis" class="form-control" id="penulis" value={{"$admin->penulis"}}>
        </div>
        <div class="mb-3">
            <label for="artikel" class="form-label">Artikel</label>
            <input type="text" name="artikel" class="form-control" id="artikel" value={{$admin->artikel}}>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
