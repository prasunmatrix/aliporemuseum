@extends('layouts.app')
@section('content')

<section>
  <div class="container">
    <div class="row">
      <p class="headline"><strong>Notice</strong></p>
      <div class="notice-section">
        <div class="article">
          <p>
            @foreach(@$noticeList as $list)
            <a href="{{ asset('uploads/notice/'.@$list->file) }}" class="list" target="_blank"> {{ @$list->name }}</a>
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