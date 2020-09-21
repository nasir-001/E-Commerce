<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/fontawesome/css/all.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
  .ftco-animate {
  opacity: 0;
  visibility: hidden; }

.bg-primary {
  background: #6c63ff !important; }

.media-custom {
  background: #fff; }
  .media-custom .media-body .name {
    font-weight: 500;
    font-size: 16px;
    margin-bottom: 0;
    color: #6c63ff; }
  .media-custom .media-body .position {
    font-size: 13px;
    color: #d9d9d9; }

.about-author .desc h3 {
  font-size: 24px; }

.ftco-section {
  padding: 7em 0;
  position: relative; }
  @media (max-width: 767.98px) {
    .ftco-section {
      padding: 6em 0; } }

.ftco-no-pt {
  padding-top: 0; }

.ftco-no-pb {
  padding-bottom: 0; }

.ftco-bg-dark {
  background: #3c312e; }

.ftco-footer {
  font-size: 16px;
  background: #141414;
  padding: 7em 0; }
  .ftco-footer .ftco-footer-logo {
    text-transform: uppercase;
    letter-spacing: .1em; }
  .ftco-footer .ftco-footer-widget h2 {
    font-weight: normal;
    color: #fff;
    margin-bottom: 40px;
    font-size: 20px;
    font-weight: 700; }
  .ftco-footer .ftco-footer-widget ul li a {
    color: rgba(255, 255, 255, 0.8); }
    .ftco-footer .ftco-footer-widget ul li a span {
      color: #fff; }
  .ftco-footer .ftco-footer-widget .btn-primary {
    background: #fff !important;
    border: 2px solid #fff !important; }
    .ftco-footer .ftco-footer-widget .btn-primary:hover {
      background: #fff;
      border: 2px solid #fff !important; }
  .ftco-footer p {
    color: rgba(255, 255, 255, 0.7); }
  .ftco-footer a {
    color: rgba(255, 255, 255, 0.7); }
    .ftco-footer a:hover {
      color: #fff; }
  .ftco-footer .ftco-heading-2 {
    font-size: 17px;
    font-weight: 400;
    color: #000000; }

.ftco-footer-social li {
  list-style: none;
  margin: 0 10px 0 0;
  display: inline-block; }
  .ftco-footer-social li a {
    height: 50px;
    width: 50px;
    display: block;
    float: left;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    position: relative; }
    .ftco-footer-social li a span {
      position: absolute;
      font-size: 26px;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    .ftco-footer-social li a:hover {
      color: #fff; }

.footer-small-nav > li {
  display: inline-block; }
  .footer-small-nav > li a {
    margin: 0 10px 10px 0; }
    .footer-small-nav > li a:hover, .footer-small-nav > li a:focus {
      color: #6c63ff; }

.media .ftco-icon {
  width: 100px; }
  .media .ftco-icon span {
    color: #6c63ff; }

.ftco-media {
  background: #fff;
  border-radius: 0px; }
  .ftco-media .heading {
    font-weight: normal; }
  .ftco-media.ftco-media-shadow {
    padding: 40px;
    background: #fff;
    -webkit-box-shadow: 0 10px 50px -15px rgba(0, 0, 0, 0.3);
    box-shadow: 0 10px 50px -15px rgba(0, 0, 0, 0.3);
    -webkit-transition: .2s all ease;
    -o-transition: .2s all ease;
    transition: .2s all ease;
    position: relative;
    top: 0; }
    .ftco-media.ftco-media-shadow:hover, .ftco-media.ftco-media-shadow:focus {
      top: -3px;
      -webkit-box-shadow: 0 10px 70px -15px rgba(0, 0, 0, 0.3);
      box-shadow: 0 10px 70px -15px rgba(0, 0, 0, 0.3); }
  .ftco-media .icon {
    font-size: 50px;
    display: block;
    color: #6c63ff; }
  .ftco-media.text-center .ftco-icon {
    margin: 0 auto; }

.ftco-overflow-hidden {
  overflow: hidden; }

.padding-top-bottom {
  padding-top: 120px;
  padding-bottom: 120px; }

</style>
<body>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">About Us</h2>
                <p>This is a Online shopping store, where you can create your account and proceed to buy
                  our product at affordable price with fast delivery within 24hours.<br>Note: You can also buy product as a guest(without creating an account)</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Why Us?</h2>
                <ul class="list-unstyled">
                  <li><h6 style="color: white" class="py-2 d-block">Good Service</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Genuine Business</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Fast Reply</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Fast Delivery</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Discount on every transaction</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Blog</h6></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">How it works</h2>
                <ul class="list-unstyled">
                  <li><h6 style="color: white" class="py-2 d-block">Select product</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Add to cart</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Update quantity</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Proceed to checkout</h6></li>
                  <li><h6 style="color: white" class="py-2 d-block">Pay the bill</h6></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Want to know more?</h2>
                <div class="block-23 mb-3">
                  <ul class="list-unstyled">
                    <li class="mt-1"><span class="fas fa-globe" style="color: white"></span><span class="text" style="color: white"> No.12 Mamman Yola Street Hayind Dogo Samaru Zaria</span></li>
                    <li class="mt-1"><span class="fas fa-phone" style="color: white"></span><span class="text" style="color: white"> 08139332116</span></li>
                    <li class="mt-1"><span class="fas fa-envelope" style="color: white"></span><span class="text" style="color: white"> nasirlawal001@gmail.com</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
      
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i style="color: red" class="fas fa-heart" aria-hidden="true"></i> by Nasir
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
      
</body>
</html>
