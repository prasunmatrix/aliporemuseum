@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    <div class="row">
      <p class="headline"><strong>Latest Tender</strong></p>
      <div class="dateFilter">
        <form action="">
          <table width="50%">
            <tr>
              <td>Date From</td>
              <td><input type="date"></td>
              <td>To</td>
              <td><input type="date"></td>
              <td><input type="submit" class="search-btn" value="Search"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="tender-table">
        <table id="example" class="display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Tender No.</th>
              <th>Tender Subject</th>
              <th>Tender Date</th>
              <th>Last Date of Application</th>
              <th>Tender Notice</th>
              <th>Related Amendment/Notice/Notification</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Notice Inviting e-Tender No. WBNKDA/11/EE–I/NKDA/2022-23</td>
              <td>Providing Mosquito Control measures through Spraying / Fogging etc. for preventing Vector borne diseases by way of elimination of mosquitoes at the entire project area of New Town, Kolkata as will be assigned by NKDA for a period of 12 (twelve) months.</td>
              <td>25/07/2022</td>
              <td>16/08/2022</td>
              <td><a href="assets/pdf/sample.pdf" download>Download</a></td>
              <td></td>
            </tr>
            <tr>
              <td>N.I.T No: 08/NKDA/ADMN of 2022</td>
              <td>20 MBPS Internet Connectivity Leased Line (1:1 Uncompressed and Unshared) for registered office of NKDA Unit Office, Action Area – III, New Town -700135</td>
              <td>11/07/2022</td>
              <td>08/08/2022</td>
              <td><a href="assets/pdf/sample.pdf" download>Download</a></td>
              <td>Corrigendum(22/07/2022)</td>
            </tr>
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
