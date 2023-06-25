@extends('index')
@section('content')
<center>
<table class="table table-bordered table-danger table-stripped" style="width:50%">
<tr>
    <th>Name</th>
    <th>Place</th>
    <th>Contact</th>
    <th>Image</th>
    <th colspan="2">Action</th>
    </tr>
    @foreach($view as $views)
    <tr>
      <td>{{$views->name}}</td>
      <td> {{$views->place}}</td>
      <td> {{$views->contact}}</td>
    <td> <img src="{{asset('storage/images/'.$views->image)}}" alt="" width="55px" height="50px"></td>
      <td><a class="btb btn-primary" href="{{ route('edit',$views->id) }}"> Edit</a></td>
      <td><a  class="btn btn-primary"href="{{ route('delete',$views->id) }}"> Delete</a></td>
    </tr>
    @endforeach
</table>
</center>
@endsection