@extends('layouts.app')
@section('content')
<section id="emi_calculator">
  <div class="container">
    <div class="row">
      <div class="mid-content">
        <div class="left-content">
          <div class="panel">
            <div class="panel-head">Loan EMI Calculator</div>
            <div class="panel-body">
              <div class="loan_amt">
                <div class="box-div">
                  <div class="left-box">Loan Amount</div>
                  <div class="right-box">
                    <div class="input-container">
                      <input class="input-field" id="textInputLoan" type="number" name="rangeInput" onchange="updateRangeLoan(this.value)">
                      <div class="icon">Rs.</div>
                    </div>
                  </div>
                </div>
                <div class="range-div">
                  <input type="range" name="rangeInput" id="rangeInputLoan" min="100000" max="20000000" value="5000000" onchange="updateTextInputLoan(this.value);">
                  <div id="loanamountsteps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">0</span></span><span class="tick d-none d-sm-table-cell" style="left: 12.5%;">|<br><span class="marker">25L</span></span><span class="tick" style="left: 25%;">|<br><span class="marker">50L</span></span><span class="tick d-none d-sm-table-cell" style="left: 37.5%;">|<br><span class="marker">75L</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">100L</span></span><span class="tick d-none d-sm-table-cell" style="left: 62.5%;">|<br><span class="marker">125L</span></span><span class="tick" style="left: 75%;">|<br><span class="marker">150L</span></span><span class="tick d-none d-sm-table-cell" style="left: 87.5%;">|<br><span class="marker">175L</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">200L</span></span></div>
                </div>
              </div>
              <div class="loan_rate">
                <div class="box-div">
                  <div class="left-box">Interest Rate</div>
                  <div class="right-box">
                    <div class="input-container">
                      <input class="input-field" id="textInputRate" type="number" name="rangeInput" onchange="updateRangeRate(this.value)">
                      <div class="icon">%</div>
                    </div>
                  </div>
                </div>
                <div class="range-div">
                  <input type="range" name="rangeInput" id="rangeInputInterest" min="5" max="20" value="10" onchange="updateTextInputRate(this.value);">
                  <div id="loanintereststeps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">5</span></span><span class="tick" style="left: 16.67%;">|<br><span class="marker">7.5</span></span><span class="tick" style="left: 33.34%;">|<br><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">12.5</span></span><span class="tick" style="left: 66.67%;">|<br><span class="marker">15</span></span><span class="tick" style="left: 83.34%;">|<br><span class="marker">17.5</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">20</span></span></div>
                </div>
              </div>
              <div class="loan_tenure">
                <div class="box-div">
                  <div class="left-box">Loan Tenure</div>
                  <div class="right-box">
                    <div class="input-container">
                      <input class="input-field" id="textInputTenure" type="number" name="rangeInput" min="1" onchange="updateRangeTenure(this.value)">
                      <!-- <div class="icon">Yr.</div> -->
                      <div class="icon">Mo.</div>
                    </div>
                  </div>
                </div>
                <div class="range-div">
                  <input type="range" name="rangeInput" id="rangeInputTenure" min="0" max="360" value="60" onchange="updateTextInputTenure(this.value);">
                  <div id="loantermsteps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">0</span></span><span class="tick" style="left: 16.67%;">|<br><span class="marker">60</span></span><span class="tick" style="left: 33.33%;">|<br><span class="marker">120</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">180</span></span><span class="tick" style="left: 66.67%;">|<br><span class="marker">240</span></span><span class="tick" style="left: 83.33%;">|<br><span class="marker">300</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">360</span></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="right-content">
          <div class="panel">
            <div class="panel-body">
              <div class="summary">
                <div class="summary_text">Loan EMI</div>
                <div class="summary_amt"><i class="fa fa-inr"></i> <span id="monthly-payment"></span></div>
              </div>
              <div class="summary">
                <div class="summary_text">Total Interest Payable</div>
                <div class="summary_amt"><i class="fa fa-inr"></i> <span id="total-interest"></span></div>
              </div>
              <div class="summary">
                <div class="summary_text">Total Payment
                  (Principal + Interest)</div>
                <div class="summary_amt"><i class="fa fa-inr"></i> <span id="total-repayment"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

<style>
  #border {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  #emi-calculation {
    width: 500px;
    height: 320px;
    border: 2px solid steelblue;
    box-shadow: 2px 5px 5px gray;
    border-radius: 5px;
    background-color: #CAFAFE;
  }

  #title {
    font-size: 30px;
    font-family: verdana;
    color: steelblue;
    text-align: center;
    text-decoration: underline;
  }

  #emi-output {
    width: 500px;
    height: 315px;
    border: 2px solid steelblue;
    box-shadow: 2px 5px 5px gray;
    border-radius: 5px;
    margin-top: 10px;
    background-color: #CAFAFE;
  }

  .section {
    margin-left: 10px;
    font-size: 20px;
    padding: 10px;
    font-family: verdana;
  }

  .result {
    margin-top: 20px;
    margin-left: 10px;
    font-size: 20px;
    padding: 5px;
    font-family: verdana;
  }

  .input {
    float: right;
    height: 20px;
    margin-right: 10px;
  }

  #calc,
  #reset {
    width: 200px;
    height: 55px;
    font-size: 20px;
    background-color: steelblue;
    box-shadow: 2px 5px 5px gray;
  }

  .submit {
    text-align: center;
    margin-top: 20px;
  }

  #reset {
    background-color: orange;
  }

  @media screen and (max-width: 500px) {
    #border {
      display: flex;
      flex-direction: column;
      width: 100%;
      margin-left: 5px;
      margin-right: 5px;
    }

    .label,
    .result {
      font-size: 10px;
    }

    #title {
      font-size: 20px;
    }

    #emi-calculation {
      max-width: 100%;
    }

    #emi-output {
      width: 100%;
      margin-left: 5px;
      margin-right: 5px;
    }

    .section {
      font-size: 16px;
    }

    .input {
      width: 100px;
    }

    #calc,
    #reset {
      width: 100px;
    }

  }
</style>
<script>
  function reset() {
    document.getElementById("value1").value = 0;
    document.getElementById("value2").value = 0;
    document.getElementById("value3").value = 0;

    document.getElementById("monthly-interest").innerHTML = "";
    document.getElementById("monthly-payment").innerHTML = "";
    document.getElementById("total-repayment").innerHTML = "";
    document.getElementById("total-interest").innerHTML = "";
  }

  function calculation() {

    var loanAmount = document.getElementById("value1").value;
    var interestRate = document.getElementById("value2").value;
    var loanDuration = document.getElementById("value3").value;

    //.......... declarations.............

    var interestPerYear = (loanAmount * interestRate) / 100;
    var monthlyInterest = interestPerYear / 12;


    var monthlyPayment = monthlyInterest + (loanAmount / loanDuration);
    var totalInterestCost = monthlyInterest * loanDuration;
    var totalRepayment = monthlyPayment * loanDuration;

    //----------------monthly interest----------------------

    document.getElementById("monthly-interest").innerHTML = " ₹ " + monthlyInterest.toFixed(2);

    //-------------Monthly payment------------

    document.getElementById("monthly-payment").innerHTML = " ₹ " + monthlyPayment.toFixed(2);

    //-------------Total repayment-----------

    document.getElementById("total-repayment").innerHTML = " ₹ " + totalRepayment.toFixed(2);

    //--------------Total Interest cost----------------

    document.getElementById("total-interest").innerHTML = " ₹ " + totalInterestCost.toFixed(2);

  }
</script>