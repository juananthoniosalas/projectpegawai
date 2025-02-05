@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Individual HTML Parallax Template</title>
<!--

Template 2096 Individual

http://www.tooplate.com/view/2096-individual

-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" href="css/tooplate-style.css"><!-- tooplate style -->
  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="css/magnific-popup.css">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <style>

      .borderr{
        background: navy;
             border-radius: 0px;
             padding: 0;
             position: absolute;
             top:100%
             float:none;
      border-top: 3px soild white;
      border-bottom: 3px solid white;
      position: relative
      display: inline-table;
     width: 20%;

      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      </style>

      <body>
        <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

        <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-01.jpg">
          <section class="container tm-page-1-content">
            <div class="flex-center position-ref full-height">

            <div class="row">
              <div class="tm-text-white">
                <header><h1>Data pegawai</h1></header>
                <div class="card-body">
                  <p>Cari Data Pegawai :</p>
	<form action="/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
  <br><br>
                   <a href="/tambah" class="btn btn-primary">Input Pegawai Baru</a>
                   <a href="/home" class="btn btn-primary">Home Admin</a>
                   <br/>
                   <br/>
                   <table class="table table-bordered table-hover table-striped">
                       <thead>
                           <tr>
                               <th>Nama</th>
                               <th>Alamat</th>
                               <th>OPSI</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($pegawai as $p)
                           <tr>
                               <td>{{ $p->nama }}</td>
                               <td>{{ $p->alamat }}</td>
                               <td>
                                   <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                   <a href="/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                               </td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
               Halaman : {{ $pegawai->currentPage() }} <br/>
	             Jumlah Data : {{ $pegawai->total() }} <br/>
	             Data Per Halaman : {{ $pegawai->perPage() }} <br/>
	             {{ $pegawai->links() }}
                  <a href="#tm-section-2" class="btn btn-danger">Explore...</a>
              </div>
            </div>

          </section>
        </div>


        <div id="tm-section-2" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-02.jpg">
          <section class="container tm-page-1-content tm-page-2">
            <div class="row">
              <article class="col-md-6 tm-article tm-bg-white-transparent">
                <header><h2 >Left Column</h2></header>
                <b>Donec id augue ac risus faucibus elementum. Quisque tincidunt, sapien et tincidunt suscipit, diam ipsum iaculis augue, nec semper orci ex a arcu. Donec efficitur sem sed ligula mollis.</b>
              </article>

              <article class="col-md-6 tm-article tm-bg-white-transparent">
                <header><h2>Right Column</h2></header>
                <b>Donec id augue ac risus faucibus elementum. Quisque tincidunt, sapien et tincidunt suscipit, diam ipsum iaculis augue, nec semper orci ex a arcu. Duis commodo orci libero.</b>

                  <a href="#tm-section-3" class="btn btn-danger ml-auto mr-0 tm-btn-block">Details...</a>
              </article>
            </div>
          </section>
        </div>
        <div id="tm-section-3" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-03.jpg">
          <section class="container tm-page-1-content">
            <div class="row1">
              <div class="col-xl-6 col-md-8 ml-auto">
                <article class="tm-bg-white-transparent-page3">
                  <header><h5 class="tm-bg-white">Individual HTML5 Web Template</h5></header>
                  <p class="tm-bg-white2">Do you like this template? Please tell your friends about Tooplate website. Thank you. Praesent scelerisque erat placerat tempus laoreet. Vivamus pellentesque tempor congue. Vestibulum ac diam dui. Vivamus a fringilla velit. Proin mauris enim.</p>
                    <a href="#tm-section-4" class="btn btn-danger tm-btn-right">Read More</a>
                </article>
              </div>
            </div>
          </section>
        </div>
        <div id="tm-section-4" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-04.jpg">

          <div class="row tm-page-4-content">
            <article  class="col-xs-6 col-md-4 tm-bg-white-transparent">
              <header><h3>Nunc sagittis</h3></header>
              <p>Orci varius natoque penatibus et  magnis dis parturient montes, nascetur ridiculus mus. Praesent vel est varius nisi posuere aliquet. Aliquam luctus, dolor vel euismod scelerisque, sem mi commodo nisi.</p>
            </article>
            <article class="col-xs-6 col-md-4 tm-bg-white-transparent">
              <header><h3>Duis euismod</h3></header>
              <p>Orci varius natoque penatibus et  magnis dis parturient montes, nascetur ridiculus mus. Praesent vel est varius nisi posuere aliquet. Aliquam luctus, dolor vel euismod scelerisque, sem mi commodo nisi.</p>
            </article>
            <article class="col-xs-6 col-md-4 tm-bg-white-transparent">
              <header><h3>Ipsum vitae mattis</h3></header>
              <p>Orci varius natoque penatibus et  magnis dis parturient montes, nascetur ridiculus mus. Praesent vel est varius nisi posuere aliquet. Aliquam luctus, sem mi commodo nisi.</p>
            </article>
          </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-img-05.jpg">
          <div class="container">
            <div class="row">
              <div class="tm-img-container">
                <div class="tm-img-slider">

                    <a class="image-link" href="img/gallery-img-01.jpg"><img src="img/gallery-img-01-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-02.jpg"><img src="img/gallery-img-02-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-03.jpg"><img src="img/gallery-img-03-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-04.jpg"><img src="img/gallery-img-04-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-05.jpg"><img src="img/gallery-img-05-tn.jpg" alt="Image" class="tm-slider-img"></a>
                    <a class="image-link" href="img/gallery-img-06.jpg"><img src="img/gallery-img-06-tn.jpg" alt="Image" class="tm-slider-img"></a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="parallax-window tm-position-relative tm-form-section" data-parallax="scroll" data-image-src="img/bg-img-06.jpg">
          <div class="container ">
            <div class="row1 ">
              <div class="col-xs-12">
                <header><h5>Contact Us</h5></header>
              </div>
            </div>
            <div class="row tm-page-5-content">
              <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="contact_message">
                  <form action="#contact" method="post" class="contact-form">
                    <div class="form-group">
                      <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                    </div>
                    <div class="form-group">
                      <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                    </div>
                    <div class="form-group">
                      <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger tm-btn-submit">Submit</button>
                  </form>
                </div>
              </div>
              <div class="col-lg-8 col-md-6 col-xs-12">
                <div class="tm-address-box">
                  <p>Integer pretium volutpat tempor. Maecenas condimentum tincidunt leo. Paesent scelerisque erat placerat tempus laoreet. Vivamus pellentesque tempor congue. Vestibulum ac diam dui. Vivamus a fringilla velit.
                  </p>
                  <br>
                  <address>
                    <b>Our Address</b><br>
                    <br>
                    440-660 Proin mauris enim,<br>
                    dignissim sit amet ligula id,<br>
                    finibus tempus erat 10200
                  </address>
                </div>
              </div>
            </div>

            <div class="footer">
              <p>Copyright © 2018 Your Company
                . Design: Tooplate</p>
              </div>
            </div>

          </div>


          <!-- load JS files -->
          <script src="js/jquery-1.11.3.min.js"></script>        <!-- jQuery (https://jquery.com/download/) -->
          <script src="js/parallax.min.js"></script>

          <script type="text/javascript" src="slick/slick.min.js"></script>
          <!-- Slick Carousel -->

          <!-- Magnific Popup core JS file -->
          <script src="js/jquery.magnific-popup.min.js"></script>


          <script>

            function setCarousel() {

              var slider = $('.tm-img-slider');

              if (slider.hasClass('slick-initialized')) {
                slider.slick('destroy');
              }

              if($(window).width() > 991){
                  // Slick carousel
                  slider.slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1
                  });
                }
                else {
                 slider.slick({
                  dots: true,
                  infinite: true,
                  slidesToShow: 2,
                  slidesToScroll: 1
                });
               }
             }

             $(document).ready(function(){

              setCarousel();
              $('.tm-img-slider').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image'
                // other options

              });

              $(window).resize(function() {
                setCarousel();
              });
            });

          </script>
        </body>
        </html>
@endsection
