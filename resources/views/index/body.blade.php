<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Title</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('footer/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('footer/assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
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


    <!-- Custom styles for this template -->
    <link href="{{ asset('carousel/carousel.css') }}" rel="stylesheet">
  </head>
  <body>

@include('index.assets.navbar')

<main>
  @include('index.assets.carousel')

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
    <h1 class="text-center mb-4 text-underline" style="text-decoration: underline;">
        Info Terbaru
    </h1>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Test</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu fringilla lacus. Morbi rhoncus magna non ipsum posuere lacinia. Etiam metus sapien, mollis vel venenatis eu, ornare sed dui.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Test</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu fringilla lacus. Morbi rhoncus magna non ipsum posuere lacinia. Etiam metus sapien, mollis vel venenatis eu, ornare sed dui.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu fringilla lacus. Morbi rhoncus magna non ipsum posuere lacinia. Etiam metus sapien, mollis vel venenatis eu, ornare sed dui.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    
    <h1 class="text-center mb-4" style="color: black;">
      Gallery
  </h1>
  <hr class="hr-bold mx-auto">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <div class="container text-center">
    <div class="row">
      <div class="col" style="background-color: rgba(2, 83, 107, 0.811);color: rgb(255, 255, 255);"><br>
        <span class="text-coulumn" style="margin-top: 12px">INFO LAIN</span>
        <hr class="mx-auto" width="60%">
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:rgb(255, 255, 255)">Pengadaan CPNS 2022</a></div><br>
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:rgb(255, 255, 255)">Pengadaan CPNS 2022</a></div><br>
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:rgb(255, 255, 255)">Pengadaan CPNS 2022</a></div><br>
        <br>
      </div>
      <div class="col" style="background-color: rgba(226, 223, 223, 0.825);color:rgb(0, 0, 0));"><br>
        <span class="text-coulumn" style="margin-top: 12px">EVENT</span>
        <hr class="mx-auto" width="60%">
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:black">Sosialisasi SIMPEG & SAPK 2022</a></div><br>
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:black">Sosialisasi SIMPEG & SAPK 2022</a></div><br>
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:black">Sosialisasi SIMPEG & SAPK 2022</a></div><br>
        <br>
         <div class="text-center">
          <a href="#" class="btn btn-dark mb-4 mt-2 justify-content-center" style="border-radius: 30px">
            <span style="color: rgba(226, 223, 223, 0.825);">LIHAT SEMUA</span>
        </a>
          </div>
      </div>
      <div class="col" style="background-color: rgba(2, 83, 107, 0.811);color: rgb(255, 255, 255);"><br>
        <span class="text-coulumn" style="margin-top: 12px">PENGUMUMAN</span>
        <hr class="mx-auto" width="60%">
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:rgb(255, 255, 255)">Bimbingan Teknis Pengelola Adm</a></div><br>
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:rgb(255, 255, 255)">Bimbingan Teknis Pengelola Adm</a></div><br>
        <div class="text-start font-poppin">Tgl Bln Thn</div>
        <div class="text-start font-poppin" style="font-size: 20px" <i class="fa fa-text-width" aria-hidden="true"></i><a href="#" style="color:rgb(255, 255, 255)">Bimbingan Teknis Pengelola Adm</a></div><br>
        <br>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="page-wrapper">
    <div class="container">
      <div class="text-center">
        <h2>Serba Serbi</h2>
      </div>
      <div class="text-center">
        <a href="#" class="btn btn-danger mb-4 mt-2 justify-content-center">Struktur Organisasi</a>
      </div>
    </div>
  </div>

</main>

@include('index.assets.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
