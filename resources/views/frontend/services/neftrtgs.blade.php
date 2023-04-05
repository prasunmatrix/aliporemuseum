@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="field neft-content-sec">
        <h2>NEFT/ RTGS: </h2>
        <p><b>Inter</b> Bank Electronic Fund Transfer from the account of the remitter in one Bank to the account of the beneficiary maintained with any other Bank branch occurs through two systems of Inter Bank Transfer - RTGS and NEFT. Both these systems are maintained by Reserve Bank of India and operates 24/7.</p>
        <p><b>RTGS</b> -The acronym 'RTGS' stands for Real Time Gross Settlement, which can be defined as the continuous (real-time) settlement of funds transfers individually on an order by order basis (without netting). 'Real Time' means the processing of instructions at the time they are received rather than at some later time; 'Gross Settlement' means the settlement of funds transfer instructions occurs individually (on an instruction by instruction basis). Considering that the funds settlement takes place in the books of the Reserve Bank of India, the payments are final and irrevocable. The RTGS system is primarily meant for large value transactions. The minimum amount to be remitted through RTGS is Rs.2 lakhs. There is no upper ceiling for RTGS transactions while conducted through branch.</p>
        <h2>CHARGES:</h2>
        <div class="midTable">
          <table width="60%" border="1" class="rateTable">
            <tbody>
              <tr>
                <td colspan="2"><b>RTGS</b></td>
              </tr>
              <tr>
                <td>2,00,001 to 5 Lakh</td>
                <td>Rs. 30.00 (including All Tax)</td>
              </tr>
              <tr>
                <td>Above 5 Lakh</td>
                <td>Rs. 59.00 (including All Tax)</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p><b>NEFT</b> -National Electronic Fund Transfer(NEFT) is a nation-wide payment system facilitating one-to-one funds transfer. Under this Scheme, individuals, firms and corporates can electronically transfer funds from any bank branch to any individual, firm or corporate having an account with any other bank branch in the country participating in the Scheme. However, maximum amount per transaction is limited to Rs.2 lakhs for transfer of funds using NEFT.</p>
        <h2>CHARGES:</h2>
        <div class="midTable">
          <table width="60%" border="1" class="rateTable">
            <tbody>
              <tr>
                <td colspan="2"><b>NEFT</b></td>
              </tr>
              <tr>
                <td>UptoRs. 10,000.00</td>
                <td>Rs. 3.00 (including All Tax)</td>
              </tr>
              <tr>
                <td>10,001 to 1 Lakh</td>
                <td>Rs. 6.00 (including All Tax)</td>
              </tr>
              <tr>
                <td>1,00,001 to 2 Lakh</td>
                <td>Rs. 18.00 (including All Tax)</td>
              </tr>
            </tbody>
          </table>
        </div>
        <h2>How RTGS is different from National Electronics Funds Transfer System (NEFT)?</h2>
        <p><b>Ans: NEFT</b> is an electronic fund transfer system that operates on a Deferred Net Settlement (DNS) basis which settles transactions in batches. In DNS, the settlement takes place with all transactions received till the particular cut-off time. These transactions are netted (payable and receivables) in NEFT whereas in RTGS the transactions are settled individually. For example, currently, NEFT operates in hourly batches. [There are twelve settlements from 8 am to 7 pm on week days and six settlements from 8 am to 1 pm on Saturdays.] Any transaction initiated after a designated settlement time would have to wait till the next designated settlement time Contrary to this, in the RTGS transactions are processed continuously throughout the RTGS business hours.</p>
      </div>
    </div>
  </div>
</section>
@endsection