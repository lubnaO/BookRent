@extends('layouts.app')

@section('content')

<a href="{{ route('Book.create') }}" class ="btn float-right btn btn-primary" style="margin-right:180px">Publish new Book</a>

<div class ="container mt-5">


<div class="card">

  <h5 class="card-header text-black">All Books</h5>
  <div class="card-body">
  
  <table id="dtBasicExample" class=" table-bordered table-sm" cellspacing="0" width="100%">

  <thead>
  <tr class="table-light"> 
     <th scope="col">Book </th>
      <th scope="col">Book Name</th>
      <th scope="col">Description</th>
      <th scope="col">City</th>
      <th scope="col">Price</th>
      <th scope="col">Rent</th>
    </tr>
  </thead>



  <tbody>
  <tr>
    @foreach ($BookList as $list)
    <td scope="row"><img src="{{ asset('storage/'.$list->image)}}" alt="" width="200px" height ="200px"></td>
    <td scope="row"><p>{{ $list->BookName }} </p></td>
    <td scope="row"><p>{{ $list->Description }} </p></td>
    <td scope="row"><p>{{ $list->City }} </p></td>
    <td scope="row"><p>{{ $list->price }} </p></td>
    <td> <button class="btn btn-primary">Rent </button></td> 
    </tr>
 @endforeach 

@endsection