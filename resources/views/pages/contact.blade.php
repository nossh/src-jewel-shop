@extends("layout.app")
@section("content");



  <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
                <hr>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->


  <!-- GENERAL SUBPAGE | CONTACT US -->
  <section class="srcj-subpage contact" id="srcjContact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 wow zoomIn">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497699.9973874144!2d77.35074421903857!3d12.95384772557775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1683096250613!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="abt-icon wow slideInDown delay-200ms">
                    <img src="imgs/icons/stone.svg" class="img-srcj">
                </div>
                <h2 class="text-center wow slideInDown delay-200ms">Need Help?</h2>
            </div>
            <div class="col-lg-4 wow slideInUp delay-400ms">
                <div class="contact-item">
                    <h6 class="ci-subhd">PHONE</h6>
                    (1900) 1300 100 423<br/>
                    (1900) 1300 678 267
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp delay-600ms">
                <div class="contact-item">
                    <h6 class="ci-subhd">CUSTOMER SERVICE</h6>
                    Monday to Friday: 8:00am – 4:00pm<br/>Sydney, NSW time (UTC +10)<br/>Saturday and Sunday closed
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp delay-800ms">
                <div class="contact-item">
                    <h6 class="ci-subhd">RETURNS</h6>
                    For information on Returns and Refunds<br/>
                    <a class="fclblk fwt600" href="javascript:void(0);">please click here.</a>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- /GENERAL SUBPAGE | CONTACT US -->


  <!-- CONTACT US FORM -->
  <section class="sec-contact-form">
    <div class="container">
        <div class="text-center wow slideInLeft delay-200ms">
            <h2>Send Us Your Questions!</h2>
            <span>We’ll get back to you within two days</span>
        </div>
        <form action="" class="row contact-form wow slideInRight delay-400ms">
            <div class="col-lg-6 form-group">
                <input placeholder="FULL NAME" type="text" class="form-control" name="" id="">
            </div>
            <div class="col-lg-6 form-group">
                <input placeholder="PHONE NUMBER" type="text" class="form-control" name="" id="">
            </div>
            <div class="col-lg-6 form-group">
                <input placeholder="EMAIL ADDRESS" type="text" class="form-control" name="" id="">
            </div>
            <div class="col-lg-6 form-group">
                <input placeholder="LOCATION" type="text" class="form-control" name="" id="">
            </div>
            <div class="col-lg-12 form-group">
                <textarea placeholder="FULL NAME" class="form-control" rows="5"></textarea>
            </div>
            <div class="col-lg-12 form-group text-right mar-off">
                <button class="btn-srcj" type="button">SUBMIT <span><i class="far fa-long-arrow-right"></i></span></button>
            </div>
        </form>
    </div>
  </section>
  <!-- /CONTACT US FORM -->

@endsection