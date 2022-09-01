@extends('frontend.main')

@section('halamandinamis')
<br><br><br> <br>
<div class="container">
    <div class="row">
        {{-- 12 --}}
        
      <div class="col-9">
        <nav class="">
          <ol class="breadcrumb" style="padding: 10px 0 10px 0;">
            <li class="breadcrumb-item" style="padding-left: 15px;"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">BUP</li>
          </ol>
        </nav>
        <p class="text-capitalize fs-2 fw-bold">Data Batas Usia Pensiun (BUP) 2021</p>
        <p class=" fs-6" style="color: #a0a0a0b3;">2 juli 2022,   Dilihat 233 Kali</p>
        <p class=" fs-4" style="color: #000;">Bulan Maret</p>
        <table class="table table-bordered" border='1'style="border:#000 ;">
          <thead style="background:#005f73 ;color :white">
        <tr>
            <th rowspan="2" style="vertical-align: middle;text-align: center;" width="5%">No</th>
            <th rowspan="2" style="vertical-align: middle;text-align: center;" width="70%">Eselon I</th>
            <th colspan="2" style="vertical-align: middle;text-align: center;">Jenis Kelamin</th>
            <th rowspan="2" style="vertical-align: middle;text-align: center;" width="5%">Jumlah</th>
        </tr>
        <tr>
            <th width="10%" style="vertical-align: middle;text-align: center;">Laki-laki</th>
            <th width="10%" style="vertical-align: middle;text-align: center;">Perempuan</th>
        </tr>
    </thead>
    <tbody id="right">    <tr>
<td align="center" class="tableFont">1</td>
<td align="left" class="tableFont">Sekretariat Jenderal</td>
<td align="right" class="tableFont">0</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">1</td>
</tr>
<tr>
<td align="center" class="tableFont">2</td>
<td align="left" class="tableFont">Inspektorat Jenderal</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">0</td>
<td align="right" class="tableFont">1</td>
</tr>
<tr>
<td align="center" class="tableFont">3</td>
<td align="left" class="tableFont">Direktorat Jenderal Planologi Kehutanan dan Tata Lingkungan</td>
<td align="right" class="tableFont">3</td>
<td align="right" class="tableFont">0</td>
<td align="right" class="tableFont">3</td>
</tr>
<tr>
<td align="center" class="tableFont">4</td>
<td align="left" class="tableFont">Direktorat Jenderal Perhutanan Sosial dan Kemitraan Lingkungan</td>
<td align="right" class="tableFont">2</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">3</td>
</tr>
<tr>
<td align="center" class="tableFont">5</td>
<td align="left" class="tableFont">Direktorat Jenderal Pengendalian Perubahan Iklim</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">2</td>
</tr>
<tr>
<td align="center" class="tableFont">6</td>
<td align="left" class="tableFont">Direktorat Jenderal Pengendalian Daerah Aliran Sungai dan Hutan Lindung</td>
<td align="right" class="tableFont">5</td>
<td align="right" class="tableFont">2</td>
<td align="right" class="tableFont">7</td>
</tr>
<tr>
<td align="center" class="tableFont">7</td>
<td align="left" class="tableFont">Direktorat Jenderal Pengelolaan Sampah, Limbah dan Bahan Beracun Berbahaya</td>
<td align="right" class="tableFont">0</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">1</td>
</tr>
<tr>
<td align="center" class="tableFont">8</td>
<td align="left" class="tableFont">Direktorat Jenderal Pengelolaan Hutan Produksi Lestari</td>
<td align="right" class="tableFont">3</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">4</td>
</tr>
<tr>
<td align="center" class="tableFont">9</td>
<td align="left" class="tableFont">Direktorat Jenderal Penegakan Hukum Lingkungan Hidup dan Kehutanan</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">2</td>
</tr>
<tr>
<td align="center" class="tableFont">10</td>
<td align="left" class="tableFont">Direktorat Jenderal Konservasi Sumber Daya Alam dan Ekosistem</td>
<td align="right" class="tableFont">20</td>
<td align="right" class="tableFont">2</td>
<td align="right" class="tableFont">22</td>
</tr>
<tr>
<td align="center" class="tableFont">11</td>
<td align="left" class="tableFont">Badan Penyuluhan dan Pengembangan Sumber Daya Manusia</td>
<td align="right" class="tableFont">2</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">3</td>
</tr>
<tr>
<td align="center" class="tableFont">12</td>
<td align="left" class="tableFont">Badan Penelitian, Pengembangan dan Inovasi Lingkungan Hidup dan Kehutanan</td>
<td align="right" class="tableFont">3</td>
<td align="right" class="tableFont">1</td>
<td align="right" class="tableFont">4</td>
</tr>
<tr class="subTotal">
<td align="center" class="tableFont" colspan="2">TOTAL</td>
<td align="right" class="tableFont">41</td>
<td align="right" class="tableFont">12</td> 
<td align="right" class="tableFont">53</td> 
</tr> 
</tbody>
</table>
</table>
</div>
<div class="col-3">
  <span class="text-coulumn" style="margin-top: 5px">INFO LAIN</span>
  <hr class="mx-left" width="40%" style="height: 3px;margin: 0 0 15px 0; color: #000; background-color: #000;">
  <div class="card mb-3" style="max-width: 540px;border:1px solid #fff">
      <div class="row g-0">
        <div class="col-md-4"> 
          <img class="img-fluid rounded-start" src="{{ asset('img/imgcap.png')}}" alt="gambar">
        </div>
        <div class="col-md-8">
          <div class="card-body" style="padding: 5px;">
            <p class="p_font font_poppins_berita" style="width: 100%;height: 36px;overflow: hidden;text-overflow: ellipsis;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, dolore.</p>
            <p class="card-text mx-2"><small class="text-muted">Last updated 3 minutes ago</small></p>
          </div>
        </div>
      </div>
    </div>
    {{--  --}}
    <div class="card mb-3" style="max-width: 540px;border:1px solid #fff">
      <div class="row g-0">
        <div class="col-md-4"> 
          <img class="img-fluid rounded-start" src="{{ asset('img/imgcap.png')}}" alt="gambar">
        </div>
        <div class="col-md-8">
          <div class="card-body" style="padding: 5px;">
            <p class="p_font font_poppins_berita" style="width: 100%;height: 36px;overflow: hidden;text-overflow: ellipsis;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, dolore.</p>
            <p class="card-text mx-2"><small class="text-muted">Last updated 3 minutes ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;border:1px solid #fff">
      <div class="row g-0">
        <div class="col-md-4"> 
          <img class="img-fluid rounded-start" src="{{ asset('img/imgcap.png')}}" alt="gambar">
        </div>
        <div class="col-md-8">
          <div class="card-body" style="padding: 5px;">
            <p class="p_font font_poppins_berita" style="width: 100%;height: 36px;overflow: hidden;text-overflow: ellipsis;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, dolore.</p>
            <p class="card-text mx-2"><small class="text-muted">Last updated 3 minutes ago</small></p>
          </div>
        </div>
      </div>
    </div>


    {{-- cc --}}
    <span class="text-coulumn" style="margin-top: 5px">EVENT</span>
    <hr class="mx-left" width="40%" style="height: 3px;margin: 0 0 15px 0; color: #000; background-color: #000;">

    {{-- cc --}}
    <span class="text-coulumn" style="margin-top: 5px">PENGUMUMAN</span>
    <hr class="mx-left" width="40%" style="height: 3px;margin: 0 0 15px 0; color: #000; background-color: #000;">
</div>

</div>

<div class="col-9">
<hr>
<p>Bagikan</p>
<div class="social-buttons">
<a href="#" class="social-buttons__button social-button social-button--facebook" aria-label="Facebook">
  <i class="fab fa-facebook-f"></i>
</a>
<a href="#" class="social-buttons__button social-button social-button--twitter" aria-label="twitter">
  <i class="fa fa-twitter"></i>
</a>
<a href="#" class="social-buttons__button social-button social-button--envelope" aria-label="envelope">
  <i class="fa fa-envelope-o"></i>
</a>
<a href="#" class="social-buttons__button social-button social-button--whatsapp" aria-label="whatsapp">
  <i class="fa fa-whatsapp"></i>
</a>
<a href="#" class="social-buttons__button social-button social-button--linkedin" aria-label="linkedin">
  <i class="fa fa-linkedin"></i>
</a>
<a href="#" class="social-buttons__button social-button social-button--link" aria-label="link">
  <i class="fa fa-link"></i>
</a>
</div>
</div>
<div class="col-3"></div>

</div> 
<br>
<style>
hr {
opacity: 1.25;
}
a:hover{
text-decoration: auto;
}
.social-buttons {
display: flex;
flex-wrap: wrap;
justify-content: left;
margin-top: -10px;
}
.social-buttons__button {
margin: 10px 5px 0;
}

.social-button {
position: relative;
display: flex;
justify-content: center;
align-items: center;
outline: none;
width: 70px;
height: 70px;
text-decoration: none;
border-radius: 100%;
background: #fff;
text-align: center;
}
.social-button::after {
content: "";
position: absolute;
top: -1px;
left: 50%;
display: block;
width: 0;
height: 0;
border-radius: 100%;
transition: 0.3s;
}
.social-button:focus, .social-button:hover {
color: #fff;
}
.social-button:focus::after, .social-button:hover::after {
width: calc(100% + 2px);
height: calc(100% + 2px);
margin-left: calc(-50% - 1px);
}
.social-button i,
.social-button svg {
position: relative;
z-index: 1;
transition: 0.3s;
}
.social-button i {
font-size: 28px;
}
.social-button svg {
height: 40%;
width: 40%;
}
.social-button--mail {
color: #0072c6;
}
/* .social-button--mail::after {
background: #0072c6;
} */
.social-button--facebook {
color: #fff !important;
background: #3b5999 !important; 
}
.social-button--twitter{
color: #fff !important;
background: #55acee !important;
}
.social-button--envelope{
color: #fff !important;
background: #c4c4c4 !important;
}
.social-button--whatsapp{
color: #fff !important;
background: #25d366 !important;
}
.social-button--linkedin{
color: #fff !important;
background: #0077b5 !important;
} 
.social-button--link{
color: #fff !important;
background: #005f73 !important;
}


.social-button--facebook::after {
/* color: #fff !important; */
/* background: #3b5999 !important;  */
}
.social-button--linkedin {
color: #0077b5;
}
/* .social-button--linkedin::after {
background: #0077b5;
} */
.social-button--github {
color: #6e5494;
}
/* .social-button--github::after {
background: #6e5494;
} */
.social-button--codepen {
color: #212121;
}
/* .social-button--codepen::after {
background: #212121;
} */
.social-button--steam {
color: #7da10e;
}
/* .social-button--steam::after {
background: #7da10e;
} */
.social-button--snapchat {
color: #eec900;
}
/* .social-button--snapchat::after {
background: #eec900;
} */
.social-button--twitter {
color: #55acee;
}
/* .social-button--twitter::after {
background: #55acee;
} */
.social-button--instagram {
color: #e4405f;
}
/* .social-button--instagram::after {
background: #e4405f;
} */
.social-button--npmjs {
color: #c12127;
}
.social-button--npmjs::after {
background: #c12127;
}
/*  */
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
</style>
@endsection