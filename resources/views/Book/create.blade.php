@extends('layouts.app')

@section('content')

<div class="formcard">
  <div class="card-header">
    Publish to rent a book!
  </div>
  <div class="card-body">
  <form action ="{{ route('Book.store')}}" method="POST" enctype="multipart/form-data">
  <!--<form action="/Book" method="POST">-->
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputBook">Book Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="BookName">
    </div>
    <div class="form-group col-md-6">
      <label for="inputcity">City</label>
      <input type="text" class="form-control" id="inputPassword4"  name="City">
    </div>
  </div>
  <div class="form-group">
    <label for="inputdescription">Description</label>
    <textarea type="text" class="form-control" id="inputAddress" placeholder="" name="Description"></textarea>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputprice">Price</label>
      <input type="text" class="form-control" id="inputCity" name="price">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputimage">Upload Image For Book</label>
      <input type="file" class="form-control" id="inputCity" name="image" >
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="success">Publish</button>
</form>
</div>

  <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
</div>
@endsection