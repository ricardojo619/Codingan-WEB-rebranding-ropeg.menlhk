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
  <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Carousel cards title </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
