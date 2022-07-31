@php 
  $category=App\Models\Category::orderBy('id','ASC')->get();
  $seo=App\Models\Seo::first();
  $social=App\Models\Social::first();

@endphp

@php
	function bn_date($str){

		$en=array(1,2,3,4,5,6,7,8,9,0);
		$bn=array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
		$str=str_replace($en,$bn,$str);

		$en=array('January',' February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

		$en_short=array('Jan',' Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

		$en=array('জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');

		$str=str_replace($en,$bn,$str);
		$str=str_replace($en_short,$bn,$str);


		$en=array('Saterday','Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thrusday', 'Friday');
		$en_short=array('Sat','Sun', 'Mon', 'Tue', 'Wed', 'Thr', 'Fri');
		$bn=array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার');
		$bn_short=array('শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র');
		
		$str=str_replace($en,$bn,$str);
		$str=str_replace($en_short,$bn_short,$str);

		$en=array('am','pm');
		$en=array('পূর্বাহ্ণ','অপরাহ্ণ');

		$str=str_replace($en,$bn,$str);
		$str=str_replace($en_short,$bn_short,$str);

		$en=array('১২','২৪');
		$en=array('৬','১২');

		$str=str_replace($en,$bn,$str);
		return $str;

	}


@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta name="author" content="{{$seo->meta_author}}">
        <meta name="meta_keyword" content="{{$seo->meta_keyword}}">
        <meta name="meta_description" content="{{$seo->meta_description}}">
        <meta name="google_analytics" content="{{$seo->google_analytics}}">
        <meta name="google_verification" content="{{$seo->google_verification}}">
        <meta name="alexa_analytics" content="{{$seo->alexa_analytics}}">

        <title>{{$seo->meta_title}}</title>

	    <link href="{{asset('assets/frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	    <link href="{{asset('assets/frontend/assets/css/menu.css')}}" rel="stylesheet">
	    <link href="{{asset('assets/frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
	    <link href="{{asset('assets/frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
	    <link href="{{asset('assets/frontend/assets/css/responsive.css')}}" rel="stylesheet">
	    <link href="{{asset('assets/frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/frontend/style.css')}}" rel="stylesheet">

    </head>
    <body>
    <!-- header-start -->
	<section class="hdr_section">
		<div class="container-fluid">			
			<div class="row">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<div class="header_logo">
						<a href="{{URL::to('/')}}"><img src="{{asset($seo->logo)}}" style="height:60px"></a> 
					</div>
				</div>              
				<div class="col-xs-6 col-md-8 col-sm-8">
					<div id="menu-area" class="menu_area">
						<div class="menu_bottom">
							<nav role="navigation" class="navbar navbar-default mainmenu">
						<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collection of nav links and other content for toggling -->
								<div id="navbarCollapse" class="collapse navbar-collapse">
									<ul class="nav navbar-nav">

							 @foreach($category as $row)
							 @php 
						$subcategory=App\Models\SubCategory::where('category_id',$row->id)->get();

							@endphp
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										@if(Session()->get('lang')=='english')
										{{$row->catname_en}}
										@else
										{{$row->catname_bn}}
										@endif
									</a>
								<ul class="dropdown-menu">
									@foreach($subcategory as $row)
									<li><a href="{{URL::to('subcat_posts/'.$row->id)}}">
										@if(Session()->get('lang')=='english')
										{{$row->subcatname_en}}
										@else
										{{$row->subcatname_bn}}
										@endif
									</a></li>

									@endforeach

								</ul>
								</li>

							@endforeach



										
									</ul>
								</div>
							</nav>											
						</div>
					</div>					
				</div> 
				<div class="col-xs-12 col-md-2 col-sm-12">
					<div class="header-icon">
						<ul>
							<!-- version-start -->
							@if(Session()->get('lang')=='english')
							<li class="version"><a href="{{route('lang.bangla')}}">Bangla</a></li>
							@else
							<li class="version"><a href="{{route('lang.english')}}">English</a></li>
							@endif
							<!-- login-start -->
						
							<!-- search-start -->
							<li><div class="search-large-divice">
								<div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="modal fade bd-example-modal-lg" action="" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12">
															<div class="custom-search-input">
																<form>
																	<div class="input-group">
																		<input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
																		<span class="input-group-btn">
																		<button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
																	</span> </div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></li>
							<!-- social-start -->
							<li>
								<div class="dropdown">
								  <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
								  <div class="dropdown-content">
									<a href="{{$social->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
									<a href="{{$social->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
									<a href="{{$social->youtube}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>

									<a href="{{$social->github}}" target="_blank"><i class="fa fa-git-play" aria-hidden="true"></i> github</a>
									<a href="{{$social->linkedin}}" target="_blank"><i class="fa fa-link-play" aria-hidden="true"></i> Linkedin</a>
									
								  </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.header-close -->
	
    <!-- top-add-start -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="top-add"><img src="{{('assets/frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
			</div>
		</div>
	</section> <!-- /.top-add-close -->
	
	<!-- date-start -->
    <section>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
					<div class="date">
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>  

								@if(Session()->get('lang')=='english')
										Dhaka
										@else
										ঢাকা 
										@endif


							</li>
							<li><i class="fa fa-calendar" aria-hidden="true">	
							</i>

							@if(Session()->get('lang')=='english')
										{{Date('D M Y,i,h:i:s a')}}
										@else
										{{bn_date(date('d M Y,l,h:i:s a'))}}
										@endif


							

						</li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> 

								@if(Session()->get('lang')=='english')
										Update 5 minute
										@else
										আপডেট ৫ মিনিট আগে
										@endif


							</li>
						</ul>
						
					</div>
				</div>
    		</div>
    	</div>
    </section><!-- /.date-close -->  

	<!-- notice-start -->
	 @php

	 

	 $headline=App\Models\Post::orderBy('id','DESC')->limit(8)->get();
	 $notice=App\Models\Notice::orderBy('id','DESC')->limit(5)->get();


	 @endphp
    <section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">

					@if(Session()->get('lang')=='english')
						Headline :
						@else
						শিরোনাম : 
						@endif


					
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
					<marquee>
						@foreach($headline as $row)
						<a href="" style="color: White;">
							 @if(Session()->get('lang')=='english')
							* {{$row->title_en}}
							 @else
							* {{$row->title_bn}}
							 @endif
							</a>
							@endforeach

					</marquee>
				</div>
			</div>
    	</div>
    </section>

    <section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">

					@if(Session()->get('lang')=='english')
						Notice :
						@else
						নোটিশ : 
						@endif


					
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
					<marquee>
						@foreach($notice as $row)
						<a href="" style="color: green;">
							 @if(Session()->get('lang')=='english')
							* {{$row->notice_en}}
							 @else
							* {{$row->notice_bn}}
							 @endif
							</a>
							@endforeach

					</marquee>
				</div>
			</div>
    	</div>
    </section>     

	<!-- 1st-news-section-start -->	
	@yield('content')
	
	
	<!-- top-footer-start -->
	<section>
		<div class="container-fluid">
			<div class="top-footer">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="foot-logo">
							<img src="{{asset('assets/frontend/assets/img/demo_logo.png')}}" style="height: 50px;" />
						</div>
					</div>
					<div class="col-md-6 col-sm-4">
						 <div class="social">
                            <ul>
                                <li><a href="" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                                <li><a href="" target="_blank" class="android"> <i class="fa fa-android"></i></a></li>
                                <li><a href="" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="apps-img">
							<ul>
								<li><a href="#"><img src="{{asset('assets/frontend/assets/img/apps-01.png')}}" alt="" /></a></li>
								<li><a href="#"><img src="{{asset('assets/frontend/assets/img/apps-02.png')}}" alt="" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.top-footer-close -->
	
	<!-- middle-footer-start -->	
	<section class="middle-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="editor-one">

						<div class="btm-foot-menu">
						<ul>
							@foreach($category as $row)
							<li><a href="{{URL::to('view-catpost/'.$row->id)}}">
								
								@if(Session()->get('lang')=='english')
										{{$row->catname_en}}
										@else
										{{$row->catname_bn}}
										@endif</a></li>
							@endforeach
						</ul>
					</div>


						

					</div>
				</div>
				
				
			</div>
		</div>
	</section><!-- /.middle-footer-close -->
	
	<!-- bottom-footer-start -->	
	<section class="bottom-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="copyright">						
						All rights reserved © 2020 LearnHunter
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="btm-foot-menu">
						<ul>
							<li><a href="#">About US</a></li>
							<li><a href="#">Contact US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	
		<script src="{{asset('assets/frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/frontend/assets/js/main.js')}}"></script>
		<script src="{{asset('assets/frontend/assets/js/owl.carousel.min.js')}}"></script>
	</body>
</html> 