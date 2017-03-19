@extends('pusri.front.layout.master')
@section('content')
@if(isset($main_banner))
<section id="image-slider">
	<!-- Slider -->
    <div id="slider">
      	<div class="slides">
      		@foreach($main_banner as $key=> $banner)
	        <div class="slider">
	          	<div class="legend"></div>
	          	<div class="content">
	            	<div class="content-txt">
	              		<h1>{{ $banner['title'] }}</h1>
	              		<h2>{{ $banner['description'] }}</h2>
	            	</div>
	          	</div>
	          	<div class="image">
	            	<img src="{{ $banner['image_url'] }}">
	          	</div>
	        </div>
	        @endforeach
      	</div>
      	<div class="switch">
	        <ul>
	        @for($i=0;$i < count($main_banner); $i++)
	        	@if($i == 0)
		        <li>
		            <div class="on"></div>
		        </li>
		        @else
		        <li></li>
		        @endif
		    @endfor
	        </ul>
      	</div>
    </div>
</section>
@endif
@endsection