<!DOCTYPE html>
<html lang="en-GB" class="csstransforms csstransforms3d csstransitions skrollr skrollr-desktop">
	<head>
		@include('pusri.front.partials.header')
	</head>

	<body>
		<!-- PRELOADER -->
		<img id="preloader" src="{{ asset('themes/pusri/front/images/preloader.gif') }}" alt="Loading Page" title="Loading Page" />

		<!-- //PRELOADER -->
		<div class="preloader_hide">

			<!-- PAGE -->
			<div id="page">
				@include('pusri.front.partials.menu')

				@yield('content')
				
			</div>
			@include('pusri.front.partials.footer')

			<!-- MAP -->
			<div id="map">
				<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
				<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
			</div><!-- //MAP -->

		</div>
			
	</body>
</html>


