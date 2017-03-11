@extends('layouts.spa')

@section('content')
  <app-dashboard{!! auth()->user()? " uid=\"".auth()->user()->id."\" name=\"".str_limit(auth()->user()->name, 16)."\"" : "" !!}>
  	<app-entry-filter></app-entry-filter>
  	<app-entry-editor :users="[{ name: 'Rafifa', student: { id: 12345, name: 'Rafifa Luthfarida', generation: 2016 }}, { name: 'Iqbal' }, { name: 'Aditia' }, { name: 'Safnah' }]"></app-entry-editor>
  </app-dashboard>
@endsection
