@extends('frontend.v1.frontend')
@section('content')
  @foreach($response['data']['locations'] as $location)
  <li>{{$location->location}}</li>
  @endforeach
@endsection