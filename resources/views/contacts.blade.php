@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
      <h2 class="fw-bold">Contact Us</h2>
</div>
<form>
  <div class="from-floating mb-1">
        <input type="text" class="form-control" id="inputname" placeholder="Nama">
        <label for="inputname"></label>   
  </div>
  <div class="from-floating mb-2">
        <input type="text" class="form-control" id="inputname" placeholder="Email">
        <label for="inputname"></label>   
  </div>
  <div class="from-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Pesan">
        <label for="inputname"></label>   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection