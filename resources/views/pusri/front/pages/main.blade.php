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
@if(isset($news_event))
<section id="latest-news" class="bg-gray-transparant">
	<div class="container">
		<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
            <h2>Berita Terkini</h2>
            <div class="devider"></div>
        </div>
        @foreach($news_event['1'] as $key=> $news)
		<div class="row-fluid skill-bar wow slideInLeft" data-wow-delay="0.4s">
			<div class="news_landing_grid">
				<img src="{{ $news['thumbnail_url'] }}" alt="{{ $news['title'] }}">
				<h2>{{ $news['title'] }}</h2>
				<p>
				{{ $news['side_description'] }}
				</p>
				<center>
				<a href="{{ $news['slug'] }}" class="arrow-cta float-center-version text-center">
	    			{{ trans('global_page.global_page_lable_link_cta') }}
	    		</a>
	    		</center>
			</div>
		</div>
		@endforeach
		@foreach($news_event['2'] as $key=> $event)
		<div class="row-fluid skill-bar wow slideInRight" data-wow-delay="0.4s">
			<div class="news_landing_grid">
				<img src="{{ $event['thumbnail_url'] }}" alt="{{ $event['title'] }}">
				<h2>{{ $event['title'] }}</h2>
				<p>
				{{ $event['side_description'] }}
				</p>
				<center>
				<a href="{{ $event['slug'] }}" class="arrow-cta float-center-version text-center">
	    			{{ trans('global_page.global_page_lable_link_cta') }}
	    		</a>
	    		</center>
			</div>
		</div>
		@endforeach
	</div>
</section>
@endif
@if(isset($gcg_overview))
<section id="category-landing-pages">
	<div class="container">
		<div class="row">
			<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
	            <h2 class="font-courgette">{{ $gcg_overview['title'] }}</h2>
	            <div class="devider"></div>
	            <h3 class="subtitle">
	            	{!! $gcg_overview['side_description'] !!}	
	            </h3>
	        </div>
	        <div class="col-md-5 skill-bar wow slideInLeft" data-wow-delay="0.4s">
	        	<img class="img-responsive img-rounded img-with-opacity" src="{{ $gcg_overview['thumbnail_url'] }}">
	        </div>
	        <div class="col-md-7 skill-bar wow slideInRight" data-wow-delay="0.4s">
	        	{!! $gcg_overview['description'] !!}

	        	<blockquote class="font-slabo">
	        	{!! $gcg_overview['blockquote'] !!}
	        	</blockquote>

	        	<a href="{{ $gcg_overview['slug'] }}" class="arrow-cta float-right-version">
					{{ trans('global_page.global_page_lable_link_cta') }}
				</a>
	        </div>
		</div>
	</div>
</section>
@endif
<section class="banner-images" style="background:url('bin/db/images/banner/banner-career.jpg');">
</section>
<section id="gallery-landing-pages">
	<div class="container">
		<div class="row">
			<div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
	            <h2 class="font-courgette">Images Gallery</h2>
	            <div class="devider"></div>
	            <h3 class="subtitle">
	            	Gallery foto from our businnes and product PT. Pusri Sriwidjaja Palembang	
	            </h3>
	        </div>
	        <div class="container">
		        <div class="galleryItem margin-top wow fadeInUp" data-wow-delay="0.3s">
		        	<img class="img-responsive" src="{{ asset('bin/db/images/default_images/thumbnail-mini.jpg') }}">
		        </div>
		        <div class="galleryItem margin-top wow fadeInDown" data-wow-delay="0.3s">
		        	<img class="img-responsive" src="{{ asset('bin/db/images/default_images/thumbnail-mini.jpg') }}">
		        </div>
		        <div class="galleryItem margin-top wow fadeInUp" data-wow-delay="0.3s">
		        	<img class="img-responsive" src="{{ asset('bin/db/images/default_images/thumbnail-mini.jpg') }}">
		        </div>
		        <div class="galleryItem margin-top wow fadeInDown" data-wow-delay="0.3s">
		        	<img class="img-responsive" src="{{ asset('bin/db/images/default_images/thumbnail-mini.jpg') }}">
		        </div>
		        <div class="galleryItem margin-top wow fadeInUp" data-wow-delay="0.3s">
		        	<img class="img-responsive" src="{{ asset('bin/db/images/default_images/thumbnail-mini.jpg') }}">
		        </div>
		    </div>
	    </div>
	</div>
</section>
@endsection