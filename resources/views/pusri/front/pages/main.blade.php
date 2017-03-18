@extends('pusri.front.layout.master')
@section('content')

	<!-- Slider -->
    <div id="slider">
      <div class="slides">
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('bin/db/images/banner/slide1_bg.jpg') }}">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('bin/db/images/banner/slide1_bg.jpg') }}">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('bin/db/images/banner/slide1_bg.jpg') }}">
          </div>
        </div>
        <div class="slider">
          <div class="legend"></div>
          <div class="content">
            <div class="content-txt">
              <h1>Lorem ipsum dolor</h1>
              <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
            </div>
          </div>
          <div class="image">
            <img src="{{ asset('bin/db/images/banner/slide1_bg.jpg') }}">
          </div>
        </div>
      </div>
      <div class="switch">
        <ul>
          <li>
            <div class="on"></div>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
@endsection