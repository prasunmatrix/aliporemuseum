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
//new function for change month and change year 
function changeMonth() {
  $('#monthRange').show();
  $('#yearRange').hide();
  $('#month').addClass('selector');
  $('#year').removeClass('selector');
  var rangeInputTenure = $('#rangeInputTenure').val();
  $('#textInputTenureMonth').show();
  $('#textInputTenure').hide();
  document.getElementById('textInputTenureMonth').value = rangeInputTenure;
}
function changeYear() {
  $('#monthRange').hide();
  $('#yearRange').show();
  $('#year').addClass('selector');
  $('#month').removeClass('selector');
  var rangeInputTenureYear = $('#rangeInputTenureYear').val();
  $('#textInputTenure').show();
  $('#textInputTenureMonth').hide();
  document.getElementById('textInputTenure').value = rangeInputTenureYear;
}
//new function for change month and change year


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
// var rangeInputTenure = $('#rangeInputTenure').val();
// document.getElementById('textInputTenure').value = rangeInputTenure;
var rangeInputTenureYear = $('#rangeInputTenureYear').val();
document.getElementById('textInputTenure').value = rangeInputTenureYear;
// function updateTextInputTenure(val) {
//   document.getElementById('textInputTenure').value=val; 
// }

// emi calculation & assign
var interestPerYear = (rangeInputLoan * rangeInputInterest) / 100;
var monthlyInterest = interestPerYear / 12;
//console.log(monthlyInterest);
rangeInputTenure = rangeInputTenureYear * 12;
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
  var textInputTenureMonth = $('#textInputTenureMonth').val();
  if (textInputTenureMonth == "") {
    console.log(textInputTenure);
    textInputTenure = textInputTenure * 12;
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
  else {
    console.log(textInputTenureMonth);
    var interestPerYear = (val * textInputRate) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (val / textInputTenureMonth);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenureMonth;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenureMonth;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);

  }
}
function updateTextInputRate(val) {
  document.getElementById('textInputRate').value = val;
  var textInputLoan = $('#textInputLoan').val();
  var textInputTenure = $('#textInputTenure').val();
  var textInputTenureMonth = $('#textInputTenureMonth').val();
  //console.log(rangeInputLoan);
  if (textInputTenureMonth == "") {
    console.log(textInputTenure);
    textInputTenure = textInputTenure * 12;
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
  else {
    console.log(textInputTenureMonth);
    var interestPerYear = (textInputLoan * val) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textInputLoan / textInputTenureMonth);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenureMonth;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenureMonth;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
}

function updateTextInputTenure(val) {
  console.log(val);
  if (val == 0) {
    //return false;
    document.getElementById('textInputTenureMonth').value = 1;
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
    document.getElementById('textInputTenureMonth').value = val;
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
function updateTextInputTenureYear(val) {
  //console.log(val);
  if (val == 0) {
    //return false;
    document.getElementById('textInputTenure').value = 1;
    var textInputLoan = $('#textInputLoan').val();
    var textInputRate = $('#textInputRate').val();

    var interestPerYear = (textInputLoan * textInputRate) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textInputLoan / 12);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * 12;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * 12;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
  else {
    document.getElementById('textInputTenure').value = val;
    var textInputLoan = $('#textInputLoan').val();
    var textInputRate = $('#textInputRate').val();
    val = val * 12;

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
  var textInputTenureMonth = $('#textInputTenureMonth').val();
  if (textInputTenureMonth == "") {
    console.log(textInputTenure);
    textInputTenure = textInputTenure * 12;
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
  else {
    console.log(textInputTenureMonth);
    var interestPerYear = (textval * textInputRate) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textval / textInputTenureMonth);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenureMonth;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenureMonth;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
}

function updateRangeRate(textval) {
  document.getElementById('rangeInputInterest').value = textval;
  var textInputLoan = $('#textInputLoan').val();
  var textInputTenure = $('#textInputTenure').val();
  var textInputTenureMonth = $('#textInputTenureMonth').val();
  if (textInputTenureMonth == "") {
    console.log(textInputTenure);
    textInputTenure = textInputTenure * 12;
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
  else {
    console.log(textInputTenureMonth);
    var interestPerYear = (textInputLoan * textval) / 100;
    var monthlyInterest = interestPerYear / 12;
    //console.log(monthlyInterest);
    var monthlyPayment = monthlyInterest + (textInputLoan / textInputTenureMonth);
    //console.log(monthlyPayment);
    var totalInterestCost = monthlyInterest * textInputTenureMonth;
    //console.log(totalInterestCost);
    var totalRepayment = monthlyPayment * textInputTenureMonth;
    //console.log(totalRepayment);
    document.getElementById('monthly-payment').innerHTML = monthlyPayment.toFixed(2);
    document.getElementById('total-interest').innerHTML = totalInterestCost.toFixed(2);
    document.getElementById('total-repayment').innerHTML = totalRepayment.toFixed(2);
  }
}

function updateRangeTenure(textval) {
  console.log(textval);
  document.getElementById('rangeInputTenureYear').value = textval;
  var textInputLoan = $('#textInputLoan').val();
  var textInputRate = $('#textInputRate').val();
  textval = textval * 12;

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
function updateRangeTenureMonth(textval) {
  //console.log('month');
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

// $('#textInputTenure').keypress(function (evt) {
//   if (evt.which === 48) {
//     return false;
//   }
// });

// $("#textInputTenure").keyup(function() {
//   if (this.value == '') {
//     console.log('test');
//     //return false;
//     document.getElementById('monthly-payment').innerHTML = "";
//   document.getElementById('total-interest').innerHTML = "";
//   document.getElementById('total-repayment').innerHTML = "";
//   }
// });



