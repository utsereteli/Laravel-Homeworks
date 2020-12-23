@extends('layouts.app')


@section('content')
<form action="{{ route('clients.update',$client->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
  </div>
  <div class="form-group">
    <label for="name">Age:</label>
    <input type="text" class="form-control" id="name" name="age" value="{{ $client->age }}">
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
   <select name="city_id" id="">
    @foreach(\App\City::all() as $city)
    <option @if($city->id == $client->city_id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
    @endforeach
   </select>
  </div>

  <div class="checkbox">
    <label><input type="checkbox" name="status" @if($client->status) checked @endif> Public</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

</form>
@endsection