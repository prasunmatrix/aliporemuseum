@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    <div class="row">
      <p class="headline"><strong>Latest Tender</strong></p>
      <div class="dateFilter">
        <form action="{{ route('tender' ) }}" method="GET">
          <table width="50%">
            <tr>
              <td>Date From</td>
              <td>
                @if(@$request->frm_date)
                <input type="date" name="frm_date" id="frm_date" value="{{ @$request->frm_date }}">
                @else
                <input type="date" name="frm_date" id="frm_date" value="{{ old('frm_date') }}">
                @endif
              </td>
              <td>To</td>
              <td>
                @if(@$request->frm_date)
                <input type="date" name="to_date" id="to_date" value="{{ @$request->to_date }}">
                @else
                <input type="date" name="to_date" id="to_date" value="{{ old('to_date') }}">
                @endif
              </td>
              <td><input type="submit" class="search-btn" value="Search"> &nbsp;<a href="{{ url('tender') }}" class="reset-btn">Reset</a></td>
            </tr>
          </table>
          <span style="color:red;">{{ $errors->first('frm_date') }}</span><br>
          <span style="color:red;">{{ $errors->first('to_date') }}</span>
        </form>
      </div>
      <div class="tender-table">
        <table id="example" class="display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Tender No.</th>
              <!-- <th>Tender Subject</th> -->
              <th>Tender Title</th>
              <th>Tender Type</th>
              <th>Tender Publication Date</th>
              <!-- <th>Last Date of Application</th> -->
              <th>Tender Submission Date</th>
              <th>Tender Notice</th>
              <!-- <th>Related Amendment/Notice/Notification</th> -->
              <th>Related Amendment/Notification</th>
            </tr>
          </thead>
          <tbody>
            @if( count($tender) > 0 )
            @foreach( $tender as $val )
            <tr>
              <td>{{ $val->tender_no }}</td>
              <td>{{ $val->tender_subject }}</td>
              <td>{{ $val->tender_type }}</td>
              <td>{{date('Y-m-d', strtotime( @$val->tender_date ))}}</td>
              <td>{{date('Y-m-d', strtotime( @$val->last_date_of_application ))}}</td>
              <td><a href="{{ asset('uploads/tender/'.@$val->tender_notice)}}" target="_blank">Download</a></td>
              <td><a href="{{ asset('uploads/tender/'.@$val->related_notification)}}" target="_blank">Corrigendum</td>
            </tr>
            @endforeach
            @endif
            <!-- <tr>
              <td>N.I.T No: 08/NKDA/ADMN of 2022</td>
              <td>20 MBPS Internet Connectivity Leased Line (1:1 Uncompressed and Unshared) for registered office of NKDA Unit Office, Action Area – III, New Town -700135</td>
              <td>11/07/2022</td>
              <td>08/08/2022</td>
              <td><a href="assets/pdf/sample.pdf" download>Download</a></td>
              <td>Corrigendum(22/07/2022)</td>
            </tr> -->
          </tbody>
          <!-- <tfoot>
                        <tr>
                            <th>Tender No.</th>
                            <th>Tender Subject</th>
                            <th>Tender Date</th>
                            <th>Last Date of Application</th>
                            <th>Tender Notice</th>
                            <th>Related Amendment/Notice/Notification</th>
                        </tr>
                    </tfoot> -->
        </table>
      </div>
    </div>
  </div>
</section>
@endsection