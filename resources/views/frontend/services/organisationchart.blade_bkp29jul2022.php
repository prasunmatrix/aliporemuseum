@extends('layouts.app')
@section('content')

<div class="green-div" style="text-align:center">
    <h3 style="text-align:center">Organisation Chart</h3>
    <img src="{{ asset('uploads/organisation/'.@$chart->image) }} " class="photo">
    
</div>

@endsection