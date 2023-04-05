function toggleMobileMenu(menu){
    menu.classList.toggle('open');
}

$("#bannerSlider").owlCarousel({
    autoplay : true,
    loop : 1,
    items: 1
});

$("#smallSlider").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:1,
        nav: false
      },
      600:{
        items:2,
        nav: false
      },
      1000:{
        items:2,
        nav: false
      }
    }
});


  $(document).ready(function(){
    $(".searchicon").click(function(){
        $("#searchDIV").slideToggle();
      });
  });



var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

var rangeInputLoan=$('#rangeInputLoan').val();
document.getElementById('textInputLoan').value=rangeInputLoan;
function updateTextInputLoan(val) {
  document.getElementById('textInputLoan').value=val; 
}
var rangeInputInterest=$('#rangeInputInterest').val();
document.getElementById('textInputRate').value=rangeInputInterest;
function updateTextInputRate(val) {
  document.getElementById('textInputRate').value=val; 
}
var rangeInputInterest=$('#rangeInputTenure').val();
document.getElementById('textInputTenure').value=rangeInputInterest;
function updateTextInputTenure(val) {
  document.getElementById('textInputTenure').value=val; 
}