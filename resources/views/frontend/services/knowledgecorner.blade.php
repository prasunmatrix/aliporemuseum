@extends('layouts.app')
@section('content')

<!-- <div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-12">
      <div class="card-body green-div">
        <h3>Knowledge corner & Download</h3>
        <ul>
          @foreach($knowledgeList as $list)
          <li><a href="{{-- asset('uploads/knowledgecorner/'.$list->file) --}}" target="_blank">{{-- @$list->name --}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div> -->
<section>
  <div class="container">
    <div class="row">
      <p class="headline"><strong>Knowledge corner & Download</strong></p>
      <div class="notice-section">
        <div class="article">
          <p>
            @foreach(@$knowledgeList as $list)
            <a href="{{ asset('uploads/knowledgecorner/'.@$list->file) }}" class="list" target="_blank"> {{ @$list->name }}</a>
            @endforeach
            <!-- <a href="assets/pdf/sample.pdf" class="list" download> Notice - Photography Competition on Smart City Mission in New Town (Submission ends on - 31/07/22)</a>
            <a href="assets/pdf/sample.pdf" class="list" download> Installation and Commissioning of Bulk Electro Magnetic Flow meter, GPRS, RTU and Control Valve for Bulk Consumer Water Supply Management in Action Area- II</a>
            <a href="assets/pdf/sample.pdf" class="list" download> Notification for banning of plastic items</a>
            <a href="assets/pdf/sample.pdf" class="list" download> Notification for revise and restructure the fees and charges of Profession, Trades and Callings</a>
            <a href="assets/pdf/sample.pdf" class="list" download> Notification for usage of NKDA activity zone/play ground</a>
            <a href="assets/pdf/sample.pdf" class="list" download> Notification for Operation of Food Trucks in New Town</a>
            <a href="assets/pdf/sample.pdf" class="list" download> Dos and Don’ts – Stacking of Construction Material & Stacking and Disposal of C&D Waste and Slurries.</a> -->
          </p>
        </div>
        <!-- <div class="moreless-button">Archives</div> -->
      </div>
    </div>
  </div>
</section>
@endsection