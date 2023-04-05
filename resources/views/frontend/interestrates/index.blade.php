@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="midTable">
        <table width="100%" border="1" class="rateTable">
          <tbody>
            <tr>
              <td colspan="6" class="bold-text center-text">REVISED RATE OF INTEREST ON DEPOSIT</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td colspan="2" class="bold-text">Existing Rate</td>
              <td colspan="2" class="bold-text">Revised Rate</td>
            </tr>
            <tr class="blue-strip">
              <td class="bold-text">SL No</td>
              <td class="bold-text">Tenure</td>
              <td class="bold-text">For General</td>
              <td class="bold-text">Senior Citizen</td>
              <td class="bold-text">For General</td>
              <td class="bold-text">Senior Citizen</td>
            </tr>
            <tr>
              <td>1</td>
              <td>07-14 days</td>
              <td class="bold-text">3.80</td>
              <td class="bold-text">3.80</td>
              <td class="bold-text">3.80</td>
              <td class="bold-text">3.80</td>
            </tr>
            <tr>
              <td>2</td>
              <td>15-29 days</td>
              <td class="bold-text">3.85</td>
              <td class="bold-text">3.85</td>
              <td class="bold-text">3.85</td>
              <td class="bold-text">3.85</td>
            </tr>
            <tr>
              <td>3</td>
              <td>30-45 days</td>
              <td class="bold-text">4.00</td>
              <td class="bold-text" class="bold-text">4.00</td>
              <td class="bold-text">4.00</td>
              <td class="bold-text">4.00</td>
            </tr>
            <tr>
              <td>4</td>
              <td>46-90 days</td>
              <td class="bold-text">4.20</td>
              <td class="bold-text">4.60</td>
              <td class="bold-text">4.20</td>
              <td class="bold-text">4.40</td>
            </tr>
            <tr>
              <td>5</td>
              <td>91-180 days</td>
              <td class="bold-text">4.50</td>
              <td class="bold-text">4.70</td>
              <td class="bold-text">4.40</td>
              <td class="bold-text">4.60</td>
            </tr>
            <tr>
              <td>6</td>
              <td>181-364 days</td>
              <td class="bold-text">5.00</td>
              <td class="bold-text">5.20</td>
              <td class="bold-text">4.80</td>
              <td class="bold-text">5.20</td>
            </tr>
            <tr>
              <td>7</td>
              <td>1 Year</td>
              <td class="bold-text">6.20</td>
              <td class="bold-text">6.60</td>
              <td class="bold-text">5.70</td>
              <td class="bold-text">6.10</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Above 1 year to less than 3 years</td>
              <td class="bold-text">6.00</td>
              <td class="bold-text">6.40</td>
              <td class="bold-text">5.60</td>
              <td class="bold-text">6.00</td>
            </tr>
            <tr>
              <td>9</td>
              <td>3 year to less than 5 years</td>
              <td class="bold-text">5.90</td>
              <td class="bold-text">6.30</td>
              <td class="bold-text">5.50</td>
              <td class="bold-text">5.90</td>
            </tr>
            <tr>
              <td>10</td>
              <td>5 year to 10 years</td>
              <td class="bold-text">5.70</td>
              <td class="bold-text">6.10</td>
              <td class="bold-text">5.40</td>
              <td class="bold-text">5.80</td>
            </tr>
            <tr class="blue-strip">
              <td class="bold-text">SL No</td>
              <td class="bold-text">Tenure</td>
              <td colspan="2" class="bold-text">Existing Rate</td>
              <td colspan="2" class="bold-text">Revised Rate</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Reserve Fund, Bad Debt Fund, Agriculture Credit Stabilisation Fund</td>
              <td colspan="2" class="bold-text">6.60</td>
              <td colspan="2" class="bold-text">6.20</td>
            </tr>
            <tr class="blue-strip">
              <td class="bold-text">SL No</td>
              <td colspan="3" class="bold-text">Tenure</td>
              <td class="bold-text">For General</td>
              <td class="bold-text">Senior Citizen</td>
            </tr>
            <tr>
              <td>1</td>
              <td colspan="3">For MIS Individual upto 3 years</td>
              <td class="bold-text">5.80</td>
              <td class="bold-text">6.20</td>
            </tr>
            <tr>
              <td>2</td>
              <td colspan="3">For MIS Individual for 3 to 5 years</td>
              <td class="bold-text">5.70</td>
              <td class="bold-text">6.10</td>
            </tr>
            <tr>
              <td>3</td>
              <td colspan="3">For QIS Individual for 2 years</td>
              <td class="bold-text">5.60</td>
              <td class="bold-text">6.00</td>
            </tr>
            <tr>
              <td>4</td>
              <td colspan="3">For QIS Individual for above 2 to 5 years</td>
              <td class="bold-text">5.50</td>
              <td class="bold-text">5.90</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="center-text">Savings Account Interest Rate</p>
      <div class="divider"></div>
      <div class="midTable">
        <table width="100%" border="1" class="rateTable">
          <tbody>
            <tr class="blue-strip">
              <td class="bold-text">Type</td>
              <td class="bold-text">Existing Rate</td>
              <td class="bold-text">Revised Rate</td>
            </tr>
            <tr>
              <td>General Public</td>
              <td class="bold-text">3.50</td>
              <td class="bold-text">3.50</td>
            </tr>
            <tr>
              <td>Senior Citizen</td>
              <td class="bold-text">4.00</td>
              <td class="bold-text">4.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="center-text">Rate of Interest on the following Loans also has been revised as follows :</p>
      <div class="divider"></div>
      <div class="midTable">
        <table width="100%" border="1" class="rateTable">
          <tbody>
            <tr class="blue-strip">
              <td class="bold-text">LOAN TYPE</td>
              <td class="bold-text">REMARKS</td>
              <td class="bold-text">Existing Rate</td>
              <td class="bold-text">Revised Rate</td>
            </tr>
            <tr>
              <td class="bbn">Home Loan</td>
              <td>Salary linked</td>
              <td class="bold-text">9.00</td>
              <td class="bold-text">7.50</td>
            </tr>
            <tr>
              <td>Fixed</td>
              <td>Non-Salary linked</td>
              <td class="bold-text">9.50</td>
              <td class="bold-text">8.50</td>
            </tr>
            <tr>
              <td rowspan="2">Home Loan (Floating Interest)</td>
              <td>Salary linked</td>
              <td class="bold-text">7.90</td>
              <td class="bold-text">7.40</td>
            </tr>
            <tr>
              <td>Non-Salary linked</td>
              <td class="bold-text">8.20</td>
              <td class="bold-text">8.20</td>
            </tr>
            <tr>
              <td rowspan="2">House Repairing Loan</td>
              <td>Salary linked</td>
              <td class="bold-text">10.70</td>
              <td class="bold-text">10.50</td>
            </tr>
            <tr>
              <td>Non-Salary linked</td>
              <td class="bold-text">10.80</td>
              <td class="bold-text">10.80</td>
            </tr>
            <tr>
              <td>Land Purchase</td>
              <td>Maximum Team-5 Years</td>
              <td class="bold-text">10.90</td>
              <td class="bold-text">10.50</td>
            </tr>
            <tr>
              <td rowspan="3">Personal Loan</td>
              <td>Salary linked (with 5% collateral security)</td>
              <td class="bold-text">12.00</td>
              <td class="bold-text">11.50</td>
            </tr>
            <tr>
              <td>Salary linked (without collateral security)</td>
              <td class="bold-text">12.50</td>
              <td class="bold-text">12.00</td>
            </tr>
            <tr>
              <td>Non Salary Earner (with 10% collateral security)</td>
              <td class="bold-text">13.00</td>
              <td class="bold-text">13.00</td>
            </tr>
            <tr>
              <td rowspan="2">Cash Credit</td>
              <td>Upto 10 Lacs</td>
              <td class="bold-text">10.50</td>
              <td class="bold-text">10.00</td>
            </tr>
            <tr>
              <td>Above 10 Lacs</td>
              <td class="bold-text">10.75</td>
              <td class="bold-text">10.00</td>
            </tr>
            <tr>
              <td>ECCS</td>
              <td></td>
              <td class="bold-text">10.20</td>
              <td class="bold-text">10.00</td>
            </tr>
            <tr>
              <td>Loan Against NSC/KVP/LIC (100% Security)</td>
              <td></td>
              <td class="bold-text">10.00</td>
              <td class="bold-text">09.00</td>
            </tr>
            <tr>
              <td rowspan="2">Car/Motorcycle Loan</td>
              <td>Maximum term 7 Years (Salary linked)</td>
              <td class="bold-text">9.00</td>
              <td class="bold-text">9.00</td>
            </tr>
            <tr>
              <td>Maximum term 7 Years (Non-Salary linked) (with 20% collateral security)</td>
              <td class="bold-text">10.00</td>
              <td class="bold-text">10.00</td>
            </tr>
            <tr>
              <td>BSKP/PMEGP</td>
              <td></td>
              <td class="bold-text">13.00</td>
              <td class="bold-text">13.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection