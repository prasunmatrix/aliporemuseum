function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
  }
  
  $("#bannerSlider").owlCarousel({
    autoplay: true,
    loop: 1,
    items: 1
  });
  
  $("#smallSlider").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 2,
        nav: false
      }
    }
  });
  
  
  $(document).ready(function () {
    $(".searchicon").click(function () {
      $("#searchDIV").slideToggle();
    });
  });
  
  
  
  var acc = document.getElementsByClassName("accordion");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
  
  
  
  var rangeInputLoan = $('#rangeInputLoan').val();
  document.getElementById('textInputLoan').value = rangeInputLoan;
  // function updateTextInputLoan(val) {
  //   document.getElementById('textInputLoan').value=val; 
  // }
  var rangeInputInterest = $('#rangeInputInterest').val();
  document.getElementById('textInputRate').value = rangeInputInterest;
  // function updateTextInputRate(val) {
  //   document.getElementById('textInputRate').value=val; 
  // }
  var rangeInputTenure = $('#rangeInputTenure').val();
  document.getElementById('textInputTenure').value = rangeInputTenure;
  // function updateTextInputTenure(val) {
  //   document.getElementById('textInputTenure').value=val; 
  // }
  
  // emi calculation & assign
  var interestPerYear = (rangeInputLoan * rangeInputInterest) / 100;
  var monthlyInterest = interestPerYear / 12;
  //console.log(monthlyInterest);
  var monthlyPayment = monthlyInterest + (rangeInputLoan / rangeInputTenure);
  //console.log(monthlyPayment);
  var totalInterestCost = monthlyInterest * rangeInputTenure;
  //console.log(totalInterestCost);
  var totalRepayment = monthlyPayment * rangeInputTenure;
  //console.log(totalRepayment);
  document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
  document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
  document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  // emi calculation & assign
  
  function updateTextInputLoan(val) {
    document.getElementById('textInputLoan').value = val;
  
    var textInputRate = $('#textInputRate').val();
    var textInputTenure = $('#textInputTenure').val();
    var interestPerYear = (val * textInputRate) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (val / textInputTenure);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenure;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenure;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
  function updateTextInputRate(val) {
    document.getElementById('textInputRate').value = val;
    var textInputLoan = $('#textInputLoan').val();
    var textInputTenure = $('#textInputTenure').val();
    //console.log(rangeInputLoan);
    var interestPerYear = (textInputLoan * val) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textInputLoan / textInputTenure);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenure;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenure;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
  
  function updateTextInputTenure(val) {
    //console.log(val);
    if (val == 0) {
      //return false;
      document.getElementById('textInputTenure').value = 1;
      var textInputLoan = $('#textInputLoan').val();
      var textInputRate = $('#textInputRate').val();
  
      var interestPerYear = (textInputLoan * textInputRate) / 100;
      var monthlyInterest = interestPerYear / 12;
      //console.log(monthlyInterest);
      var monthlyPayment = monthlyInterest + (textInputLoan / 1);
      //console.log(monthlyPayment);
      var totalInterestCost = monthlyInterest * 1;
      //console.log(totalInterestCost);
      var totalRepayment = monthlyPayment * 1;
      //console.log(totalRepayment);
      document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
      document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
      document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
    }
    else {
      document.getElementById('textInputTenure').value = val;
      var textInputLoan = $('#textInputLoan').val();
      var textInputRate = $('#textInputRate').val();
  
      var interestPerYear = (textInputLoan * textInputRate) / 100;
      var monthlyInterest = interestPerYear / 12;
      //console.log(monthlyInterest);
      var monthlyPayment = monthlyInterest + (textInputLoan / val);
      //console.log(monthlyPayment);
      var totalInterestCost = monthlyInterest * val;
      //console.log(totalInterestCost);
      var totalRepayment = monthlyPayment * val;
      //console.log(totalRepayment);
      document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
      document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
      document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
    }
  }
  
  function updateRangeLoan(textval) {
    document.getElementById('rangeInputLoan').value = textval;
    var textInputRate = $('#textInputRate').val();
    var textInputTenure = $('#textInputTenure').val();
  
    var interestPerYear = (textval * textInputRate) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textval / textInputTenure);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenure;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenure;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
  
  function updateRangeRate(textval) {
    document.getElementById('rangeInputInterest').value = textval;
    var textInputLoan = $('#textInputLoan').val();
    var textInputTenure = $('#textInputTenure').val();
  
    var interestPerYear = (textInputLoan * textval) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textInputLoan / textInputTenure);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenure;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenure;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
  
  function updateRangeTenure(textval) {
  
    document.getElementById('rangeInputTenure').value = textval;
    var textInputLoan = $('#textInputLoan').val();
    var textInputRate = $('#textInputRate').val();
  
    var interestPerYear = (textInputLoan * textInputRate) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textInputLoan / textval);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textval;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textval;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
  
  $('#textInputTenure').keypress(function (evt) {
    if (evt.which === 48) {
      return false;
    }
  });
  
  // $("#textInputTenure").keyup(function() {
  //   if (this.value == '') {
  //     console.log('test');
  //     //return false;
  //     document.getElementById('monthly-payment').innerHTML = "";
  //   document.getElementById('total-interest').innerHTML = "";
  //   document.getElementById('total-repayment').innerHTML = "";
  //   }   
  // });
  
  
  
  