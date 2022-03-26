<!-- Extending main layout -->
@extends('layouts.mainlay')
@section('container')
  <div class="header">
    <div class="row">
      <div class="col-lg-12">
        <p>#Meet the team</p>
        <h1>Meet our team that build this wonderful blog.</h1>
        <p class="mt-3">We are working to connect users around the world.</p>
      </div>
      <div class="col-4 mt-5">
        <div class="profile">
          <img src="images/about-us/1.jpg" alt="1" class="img-about ab-hover">
          <div class="overlay">
            <div class="text">Hello World</div>
          </div>
        </div>
        <div class="about-detail">
          <h5 class="about-name">Zack Steffen</h5>
          <p class="about-job">Product Manager</p>
        </div>
      </div>
      <div class="col-4 mt-5">
        <div class="profile">
          <img src="images/about-us/2.jpg" alt="1" class="img-about">
          <div class="overlay">
            <div class="text">
              Hello World
            </div>
          </div>
        </div>
        <div class="about-detail">
          <h5 class="about-name">Vladimir Bobby</h5>
          <p class="about-job">Developer</p>
        </div>
      </div>
      <div class="col-4 mt-5">
        <div class="profile">
          <img src="images/about-us/3.jpg" alt="1" class="img-about">
          <div class="overlay">
            <div class="text">Hello World</div>
          </div>
        </div>
        <div class="about-detail">
          <h5 class="about-name">Lia</h5>
          <p class="about-job">UI/UX Designer</p>
        </div>
      </div>
    </div>
  </div>
@endsection