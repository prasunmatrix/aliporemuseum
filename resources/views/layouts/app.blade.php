<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <title>RCCB</title>



  <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet" />


  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/searchbuilder/1.3.4/css/searchBuilder.dataTables.min.css">
  <link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.3.4/js/dataTables.searchBuilder.min.js"></script>
  <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>


</head>

<body>
  @include('layouts.header')
  @if(Route::currentRouteName()!='home')
  @include('layouts.inner')
  @endif
  @yield('content')
  @include('layouts.footer')

  <script src="{{asset('assets/frontend/js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Qlfrtip',
        order:[[0,'desc']],
      });
    });
  </script>
  <script type="text/javascript">
  const modal = document.querySelector(".modal");
  //const trigger = document.querySelector(".trigger");
  const closeButton = document.querySelector(".close-button");

  function toggleModal(param) {
    //console.log(param);
    if(param==true)
    {
    modal.classList.add("show-modal");
    //console.log('hi');
    }
    else if(param==false)
    {
      //console.log('hi hide');
      modal.classList.remove("show-modal");
    }
    
  }

  // function windowOnClick(event) {
  //   console.log('test');
  //   $('#myModal').hide();
  //   if (event.target === modal) {
  //     toggleModal(false);
  //   }
  // }

  //trigger.addEventListener("click", toggleModal);
  //closeButton.addEventListener("click", toggleModal(false));
  //window.addEventListener("click", windowOnClick);
</script>