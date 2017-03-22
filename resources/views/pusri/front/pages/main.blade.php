@extends('pusri.front.layout.master')
@section('content')
@if(isset($main_banner))
<section id="desktop image-slider">
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
@if(isset($company_overview['desktop']))
<section id="desktop company-overview" class="page">
	<!-- Begin page header-->
    <div class="page-header-wrapper">
        <div class="container">
            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2>{{ $company_overview['desktop']['title'] }}</h2>
                <div class="devider"></div>
                <h3 class="subtitle">{!! $company_overview['desktop']['side_description'] !!}</h3>
            </div>
        </div>
    </div>
    <div class="rotate-box-1-wrapper">
    	<div class="container">
	    	<div class="col-md-6">
	    		<div id="home-introduction-content" class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
	    			<div class="default-content">
	    				
	    				{!! $company_overview['desktop']['description_left'] !!}
	    				
	    			</div>
	    		</div>
	    	</div>

	    	<div class="col-md-6">
	    		<div id="home-introduction-content" class="skill-bar wow slideInRight" data-wow-delay="0.2s">
	    			<div class="default-content">
	    				<p>
	    					{!! $company_overview['desktop']['description_right'] !!}
	    					<a class="arrow-cta float-right-version">
	    						{{ trans('global_page.global_page_lable_link_cta') }}
	    					</a>
	    				</p>
	    			</div>
	    		</div>
	    	</div>
    	</div>
    </div>
</section>
@endif
@if(isset($category))
<section id="desktop content-news" class="bg-gray-transparant">
    <div class="container">

		<div class="page-header-wrapper">
	        <div class="container">
	            <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
	                <h2></h2>
	                <div class="devider"></div>
	            </div>
	        </div>
	    </div>

		<div class="col-md-12" style="margin-top: 2%">
			@foreach($category as $key=> $category_value)
			<div class="galleryItem">
				<a href="#"><img src="{{ $category_value['thumbnail_url'] }}" alt="" /></a>
			</div>
			@endforeach
		</div>

	</div>
</section>
@endif
@endsection