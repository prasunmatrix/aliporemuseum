@extends('layouts.app')
@section('content')
<div class="container" style="padding:0px">
  <div class="row">
    <div class="card col-md-12">
      <div class="card-body green-div">
        <div class="" style="text-align:center">
          <h3 style="text-align:center">EMI Calculator</h3>
          <div id="border">
            <!--border-->

            <div id="emi-calculation">
              <!--calculation part-->

              <!-- <p id="title"><strong>EMI Calculator<strong></p> -->

              <div class="section">
                <!--loan amount with input-->
                <label id="loanamount" class="label">Loan Amount:(Rs.)</label>
                <input type="number" class="input" id="value1" placeholder="Enter Loan amount.."></input>
              </div>
              <!--loan amount with input closing-->

              <div class="section">
                <!--interest rate with input-->
                <label id="interestrate" class="label">Interest Rate:(%)</label>
                <input type="number" class="input" id="value2" placeholder="Enter IR per year.."></input>
              </div>
              <!--interest rate with input closing-->

              <div class="section">
                <!--loan terms with input-->
                <label id="loanduration" class="label">Loan Duration(Months):</label>
                <input type="number" class="input" id="value3" placeholder="Enter loan duration.."></input>
              </div>
              <!--loan terms with input closing-->



              <div class="submit">
                <!--button-->
                <button type="submit" id="calc" style="cursor:pointer;" onclick="calculation()">Calculate</button>
              </div>
              <!--button closing-->

            </div>
            <!--Calculation part closing-->

            <div id="emi-output">
              <div class="result">Monthly Interest: <span id="monthly-interest"></span>
              </div>
              <div class="result">Monthly Payment: <span id="monthly-payment"></span>
              </div>
              <div class="result">Total Repayment: <span id="total-repayment"></span>
              </div>
              <div class="result">Total Interest Cost: <span id="total-interest"></span>
              </div>

              <div class="submit">
                <!--button-->
                <button type="submit" id="reset" style="cursor:pointer;" onclick="reset()">Reset</button>
              </div>
              <!--button closing-->

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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