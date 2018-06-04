@extends('layouts/main')

@section('content')
  <div>
    <h1>New Message:</h1>
    <p>{{$bodyMessage}}</p>
      <br>
      <hr>
    <p>From:</p>{{$email}}
  </div>
@endsection
