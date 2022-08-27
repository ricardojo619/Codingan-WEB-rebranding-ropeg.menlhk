    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('footer/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('footer/assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> --}}
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> 
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;700&display=swap" rel="stylesheet">
    <style>
      body
      {
        font-family: 'Poppins', sans-serif;
      }
      /* #001219 */
      .navbar-nav .nav-link {
    color: #f5f9f6 !important ;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<style>
      .p_font { 
    font-size: 16px;
    overflow: hidden;
    line-height: normal;
    text-overflow: ellipsis;
    white-space: normal;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    padding: 0 10px 5px 10px; 
  }.p_font{
    display: -webkit-box;
  }
    .bg-navbarr {
      background-color: #005f73;
      
  }
  .bg-darkku{
      background-color: #005f73;
      font-size: 14px;
  }.round {
      border-radius: 1.05rem!important;
  }
  .title-linekita {
      position: relative; /* important for absolute child to work */
      font-size: 18px;
      font-weight: normal;
      padding: 0 0 4px;
      text-align: left;
  }
  H5{
      margin-left: 80px;
  }

  .title-linekita::after {
      content: ''; /* required to display pseudo elements */
      height: 1px; /* this works like a border-width */
      width: 10%; /* you can use a percentage of parent or fixed px value */
      background: #CCC; /* the color of border */
      position: absolute;
      bottom: 0; /* position it at the bottom of parent */
      margin: 0 auto; left: 0;  /* horizontal centering */
  }
</style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">