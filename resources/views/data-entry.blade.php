@extends('layouts.spa')

@section('content')
  <app-dashboard{!! auth()->user()? " uid=\"".auth()->user()->id."\" name=\"".str_limit(auth()->user()->name, 16)."\"" : "" !!}></app-dashboard>
@endsection
