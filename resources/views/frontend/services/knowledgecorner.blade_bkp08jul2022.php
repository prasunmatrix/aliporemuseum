@extends('layouts.app')
@section('content')

<div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-12">
      <div class="card-body green-div">
        <h3>Knowledge corner & Download</h3>
        <ul>
          @foreach($knowledgeList as $list)
          <li><a href="{{ asset('uploads/knowledgecorner/'.$list->file) }}" target="_blank">{{ @$list->name }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection