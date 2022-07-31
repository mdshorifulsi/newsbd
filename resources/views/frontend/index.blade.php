@php 

  $firstsectionbig=App\Models\Post::where('headline',1)->orderBy('id','DESC')->first();
  $firstsection=App\Models\Post::where('first_section',1)->limit(8)->orderBy('id','DESC')->get();

@endphp

@extends('layouts.layouts')
@section('content')

<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-lg-1"></div>

						{{-- @php

						 $slug=preg_replace('/\s+/u','-', trim($firstsectionbig->title_bn));
					
						@endphp --}}

						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
								<div class="service-img"><a href="{{URL::to('view-post/'.$firstsectionbig->id)}}"><img src="{{asset($firstsectionbig->image)}}" style="height:500px" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01" ><a href="{{URL::to('view-post/'.$firstsectionbig->id)}}">

								@if(Session()->get('lang')=='english')
										{{$firstsectionbig->title_en}}
										@else
										{{$firstsectionbig->title_bn}}
										@endif

							</a> </h4>
								</div>
							</div>
						</div>
						
					</div>
						<div class="row">

							


							@foreach($firstsection as $row)
								<div class="col-md-3 col-sm-3" b>
									<div class="top-news" border>
										<a href="{{URL::to('view-post/'.$row->id.'/')}}"><img src="{{asset($row->image)}}" style="height:80px" ></a>
										<h4 class="heading-02" ><a href="{{URL::to('view-post/'.$row->id)}}">
											@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
										@endif
										</a> </h4>
									</div>
								</div>
								@endforeach
								


								
								
								
								
								
							</div>
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="add"><img src="{{('assets/frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					@php 
					  $firstcategory=App\Models\Category::first();
					  $firstcatpostbig=App\Models\Post::where('category_id',$firstcategory->id)->where('first_section_thumbnail',1)->first();

					  $firstcatpostsmall=App\Models\Post::where('category_id',$firstcategory->id)->where('first_section_thumbnail',Null)->limit(3)->get();
					  

					@endphp
					<!-- news-start -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title">
									@if(Session()->get('lang')=='english')
										{{$firstcategory->catname_en}}
										@else
										{{$firstcategory->catname_bn}}
										@endif
										<a href="{{URL::to('view-catpost/'.$firstcategory->id)}}">

									 <span>
									 	@if(Session()->get('lang')=='english')
									 	 more
										@else
										 আরও
										@endif


									 	 <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="{{URL::to('view-post/'.$firstcatpostbig->id)}}"><img src="{{asset($firstcatpostbig->image)}}" alt="Notebook"></a>
											<h4 class="heading-02"><a href="{{URL::to('view-post/'.$firstcatpostbig->id)}}">

											@if(Session()->get('lang')=='english')
										{{$firstcatpostbig->title_en}}
										@else
										{{$firstcatpostbig->title_bn}}
										@endif

									</a> </h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">

										@foreach($firstcatpostsmall as $row)
										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
											
											<h4><a href="{{URL::to('view-post/'.$row->id)}}">@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
										@endif
									</a> </h4>
										</div>

										@endforeach
										
									</div>


								</div>

							</div>

							<br>
									<br>
									<br>
						</div>


						@php 
					  $secondcategory=App\Models\Category::skip(1)->first();
					  $secondcatpostbig=App\Models\Post::where('category_id',$secondcategory->id)->orderBy('id','DESC')->first();

					  $secondcatpostsmall=App\Models\Post::where('category_id',$firstcategory->id)->where('big_thumbnail',Null)->orderBy('id','DESC')->limit(3)->get();
					  

					@endphp



						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title"><a href="#">

									@if(Session()->get('lang')=='english')
										{{$secondcategory->catname_en}}
										@else
										{{$secondcategory->catname_bn}}
										@endif

										<a href="{{URL::to('view-catpost/'.$secondcategory->id)}}">

								 <span>
								 	@if(Session()->get('lang')=='english')
									 	 more
										@else
										 আরও
										@endif 

										<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">

									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="{{URL::to('view-post/'.$secondcatpostbig->id)}}"><img src="{{asset($secondcatpostbig->image)}}" alt="Notebook"></a>
											<h4 class="heading-02"><a href="#">

												@if(Session()->get('lang')=='english')
										{{$secondcatpostbig->title_en}}
										@else
										{{$secondcatpostbig->title_bn}}
										@endif

											</a> </h4>
										</div>
									</div>


									<div class="col-md-6 col-sm-6">
										@foreach($secondcatpostsmall as $row)
										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
									@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif

									</a> </h4>
										</div>
										@endforeach
									
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-3 col-sm-3">
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{asset('assets/frontend/assets/img/add_01.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					@php 
					  
					  // $livetv=App\Models\LiveTv::first();
					  $livetv=DB::table('live_tvs')->first()

					@endphp
					@if($livetv->status==1)

					<!-- youtube-live-start -->	
					<div class="cetagory-title-03">
						 @if(Session()->get('lang')=='english')
						Live Tv
						@else
						লাইভ টিভি 
						@endif


					 </div>
					<div class="photo">
						<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">

							{!! $livetv->embed_code !!}

						</div>
					</div><!-- /.youtube-live-close -->	
					@endif

					<!-- facebook-page-start -->
					<div class="cetagory-title-03">ফেসবুকে আমরা</div>
					<div class="fb-root">
						facebook page here
					</div><!-- /.facebook-page-close -->	
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{asset('assets/frontend/assets/img/add_01.jpg')}}" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	
				</div>
			</div>
		</div>
	</section><!-- /.1st-news-section-close -->
			@php 
			  $thirdcategory=App\Models\Category::skip(2)->first();
			  $thirdcatpostbig=App\Models\Post::where('first_section',1)->where('category_id',$thirdcategory->id)->orderBy('id','DESC')->first();

			  $thirdcatpostsmall=App\Models\Post::where('category_id',$firstcategory->id)->where('big_thumbnail',Null)->orderBy('id','DESC')->limit(3)->get();
			  
				@endphp

	<!-- 2nd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">

							@if(Session()->get('lang')=='english')
										{{$thirdcategory->catname_en}}
										@else
										{{$thirdcategory->catname_bn}}
										@endif

										<a href="{{URL::to('view-catpost/'.$thirdcategory->id)}}">

						 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>

						 	@if(Session()->get('lang')=='english')
								All news
							@else
								সব খবর 
							@endif


						 </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$thirdcatpostbig->id)}}"><img src="{{asset($thirdcatpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$thirdcatpostbig->id)}}">

										@if(Session()->get('lang')=='english')
										{{$thirdcatpostbig->title_en}}
										@else
										{{$thirdcatpostbig->title_bn}}
									@endif

								</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">

								@foreach($thirdcatpostsmall as $row)
								<div class="image-title">
									<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
										@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif

									</a> </h4>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>

				@php 
			  $fourcategory=App\Models\Category::skip(3)->first();
			  $fourdcatpostbig=App\Models\Post::where('first_section',1)->orderBy('id','DESC')->first();

			  $fourdcatpostsmall=App\Models\Post::where('category_id',$fourcategory->id)->where('big_thumbnail',Null)->orderBy('id','DESC')->limit(3)->get();
			  
				@endphp


				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							@if(Session()->get('lang')=='english')
										{{$fourcategory->catname_en}}
										@else
										{{$fourcategory->catname_bn}}
										@endif

										<a href="{{URL::to('view-catpost/'.$fourcategory->id)}}">


						 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
						 @if(Session()->get('lang')=='english')
										All News
										@else
										সব খবর 
									@endif

						  </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$fourdcatpostbig->id)}}"><img src="{{asset($fourdcatpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$fourdcatpostbig->id)}}">
										
										@if(Session()->get('lang')=='english')
										{{$fourdcatpostbig->title_en}}
										@else
										{{$fourdcatpostbig->title_bn}}
									@endif

									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($fourdcatpostsmall as $row)
								<div class="image-title">
									<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
										@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif

									</a> </h4>
								</div>

								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>

			@php 
			  $fivecategory=App\Models\Category::skip(4)->first();
			  $fivecatpostbig=App\Models\Post::where('first_section',1)->where('category_id',$fivecategory->id)->orderBy('id','DESC')->first();

			  $fivecatpostsmall=App\Models\Post::where('category_id',$fivecategory->id)->where('big_thumbnail',Null)->orderBy('id','DESC')->limit(3)->get();
			  
				@endphp



			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">

							@if(Session()->get('lang')=='english')
										{{$fivecategory->catname_en}}
										@else
										{{$fivecategory->catname_bn}}
										@endif

										<a href="{{URL::to('view-catpost/'.$fivecategory->id)}}">

						 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>

						 	@if(Session()->get('lang')=='english')
								All news
							@else
								সব খবর 
							@endif


						 </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$fivecatpostbig->id)}}"><img src="{{asset($fivecatpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$fivecatpostbig->id)}}">

										@if(Session()->get('lang')=='english')
										{{$fivecatpostbig->title_en}}
										@else
										{{$fivecatpostbig->title_bn}}
									@endif

								</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">

								@foreach($fivecatpostsmall as $row)
								<div class="image-title">
									<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
										@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif

									</a> </h4>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>

				@php 
			  $sixcategory=App\Models\Category::skip(5)->first();
			  $sixdcatpostbig=App\Models\Post::where('first_section',1)->where('category_id',$sixcategory->id)->orderBy('id','DESC')->first();

			  $sixdcatpostsmall=App\Models\Post::where('category_id',$sixcategory->id)->where('big_thumbnail',Null)->orderBy('id','DESC')->limit(3)->get();
			  
				@endphp


				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							@if(Session()->get('lang')=='english')
										{{$sixcategory->catname_en}}
										@else
										{{$sixcategory->catname_bn}}
										@endif

										<a href="{{URL::to('view-catpost/'.$sixcategory->id)}}">


						 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
						 @if(Session()->get('lang')=='english')
										All News
										@else
										সব খবর 
									@endif

						  </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$sixdcatpostbig->id)}}"><img src="{{asset($sixdcatpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$sixdcatpostbig->id)}}">
										
										@if(Session()->get('lang')=='english')
										{{$sixdcatpostbig->title_en}}
										@else
										{{$sixdcatpostbig->title_bn}}
									@endif

									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($sixdcatpostsmall as $row)
								<div class="image-title">
									<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
										@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif

									</a> </h4>
								</div>

								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ******* -->
			
			<!-- add-start -->	
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{asset('assets/frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{asset('assets/frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
			</div><!-- /.add-close -->	
			
		</div>
	</section><!-- /.2nd-news-section-close -->
		@php 
			  
			  $countrybigpost=App\Models\Post::whereNotNull('district_id')->orderBy('id','DESC')->first();

			  $countryfirst=App\Models\Post::whereNotNull('district_id')->skip(1)->orderBy('id','DESC')->limit(3)->get();
			  $countrysecond=App\Models\Post::whereNotNull('district_id')->skip(2)->orderBy('id','DESC')->limit(3)->get();
			  

			 
		@endphp


	<!-- 3rd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="cetagory-title-02">
						@if(Session()->get('lang')=='english')
										Country
										@else
										সারাদেশে
									@endif

							<a href="{{URL::to('view-Country_post/'.$sixcategory->id)}}">


								
						{{--   <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> 

						  @if(Session()->get('lang')=='english')
										All news
										@else
										সব খবর
									@endif

								  </span> --}}</a></div>
					
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="top-news">
								<a href="{{URL::to('view-post/'.$countrybigpost->id)}}"><img src="{{asset($countrybigpost->image)}}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="{{URL::to('view-post/'.$countrybigpost->id)}}">
									@if(Session()->get('lang')=='english')
										{{$countrybigpost->title_en}}
										@else
										{{$countrybigpost->title_bn}}
									@endif

								</a> </h4>
							</div>
						</div>

						<div class="col-md-4 col-sm-4">
							@foreach($countryfirst as $row)
							<div class="image-title">
								<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
									@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif
								</a> </h4>
							</div>
							@endforeach
						
						</div>

						<div class="col-md-4 col-sm-4">
							@foreach($countrysecond as $row)
							<div class="image-title">
								<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">
									@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif
								</a> </h4>
							</div>

							@endforeach
						
						</div>
					</div>
					<!-- ******* -->
					<br />

					@php 
			  
			  $countrybigpost1=App\Models\Post::whereNotNull('district_id')->orderBy('id','DESC')->first();

			  $countryall=App\Models\Post::whereNotNull('district_id')->skip(2)->orderBy('id','DESC')->limit(4)->get();

			  $countryall2=App\Models\Post::whereNotNull('district_id')->skip(3)->orderBy('id','DESC')->limit(4)->get();
			  
			  

			 
		@endphp


					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="cetagory-title-02"><a href="#">
								@if(Session()->get('lang')=='english')
										Country
										@else
										সব খবর
									@endif  

								{{-- 	<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> 
								@if(Session()->get('lang')=='english')
										All news
										@else
										সব খবর
									@endif  </span> --}}</a></div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="bg-gray">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$countrybigpost1->id)}}"><img src="{{asset($countrybigpost1->image)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$countrybigpost1->id)}}">
										@if(Session()->get('lang')=='english')
										{{$countrybigpost1->title_en}}
										@else
										{{$countrybigpost1->title_bn}}
									@endif
								</a> </h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							@foreach($countryall as $row)
							<div class="news-title">
								<a href="">
									@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif
								</a>
							</div>
							@endforeach


						</div>


						<div class="col-md-4 col-sm-4">

							@foreach($countryall2 as $row)
							<div class="news-title">
								<a href="{{URL::to('view-post/'.$row->id)}}">
									@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn}}
									@endif

								</a>
							</div>
							@endforeach
							
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{asset('assets/frontend/assets/img/top-ad.jpg')}}" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	


				</div>

			@php
				$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
				$favorite=DB::table('posts')->orderBy('id','DESC')->inRandomOrder(8)->get();
				$highest=DB::table('posts')->orderBy('id','ASC')->limit(8)->get();
			@endphp
				<div class="col-md-3 col-sm-3">
					<div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">

							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
								@if(Session()->get('lang')=='english')
									Latest
								@else
									সর্বশেষ 
								@endif


							</a></li>

							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
								@if(Session()->get('lang')=='english')
									Favorite
								@else
									জনপ্রিয় 
								@endif


							</a></li>

							<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
								@if(Session()->get('lang')=='english')
									Highest
								@else
									সর্বাধিক
								@endif

							</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								


								<div class="news-titletab">
									@foreach($favorite as $row)
									<div class="news-title-02">
										<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">

											@if(Session()->get('lang')=='english')
												{{$row->title_en}}
											@else
												{{$row->title_bn}}
											@endif

							</a> </h4>
									</div>
									
									@endforeach
									
									
								</div>




							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">

									
										@foreach($latest as $row)
									<div class="news-title-02">
										<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">

											@if(Session()->get('lang')=='english')
												{{$row->title_en}}
											@else
												{{$row->title_bn}}
											@endif

							</a> </h4>
									</div>
									
									@endforeach
									

							
									
									
								</div>                                          
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab23">	
								<div class="news-titletab">

									<div class="news-titletab">
									@foreach($highest as $row)
									<div class="news-title-02">
										<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id)}}">

											@if(Session()->get('lang')=='english')
												{{$row->title_en}}
											@else
												{{$row->title_bn}}
											@endif

							</a> </h4>
									</div>
									
									@endforeach
									
									
								</div>

									
								</div>						                                          
							</div>
						</div>
					</div>
					<!-- Namaj Times -->
					@php
						$namaj=DB::table('namajs')->first();
					@endphp

						
					<!-- Namaj Times -->
					<div class="cetagory-title-03">

						@if(Session()->get('lang')=='english')
										Prayer Time
										@else
										নামাজের সময়সূচি 
										@endif

						</div>

					
					<table class="table">
						<tr>
							<th>
								@if(Session()->get('lang')=='english')
								Fajar
								@else
								ফজর
								@endif
								{{$namaj->jummah}}
							</th>
							
						</tr>
						<tr>

							<th>
								@if(Session()->get('lang')=='english')
								johor
								@else
								জোহর
								@endif
								{{$namaj->johor}}
							</th>
							
						</tr><tr>
							<th>
								@if(Session()->get('lang')=='english')
								asor
								@else
								আসর
								@endif
								{{$namaj->asor}}
							</th>
							
						</tr><tr>
							<th>
								@if(Session()->get('lang')=='english')
								magrib
								@else
								মাগরিব
								@endif
								{{$namaj->magrib}}
							</th>
							
						</tr><tr>
							<th>
								@if(Session()->get('lang')=='english')
								esha
								@else
								এসা
								@endif
								{{$namaj->Esha}}
							</th>
							
						</tr>
						<tr>
							<th>
								@if(Session()->get('lang')=='english')
								jummah
								@else
								জুম্মাহ
								@endif
								{{$namaj->jummah}}
							</th>
							
						</tr>


					</table>


					<!-- Namaj Times -->
			{{-- 		<div class="cetagory-title-03">পুরানো সংবাদ  </div>
					<form action="" method="post">
						<div class="old-news-date">
						   <input type="text" name="from" placeholder="From Date" required="">
						   <input type="text" name="" placeholder="To Date">			
						</div>
						<div class="old-date-button">
							<input type="submit" value="খুজুন ">
						</div>
				   </form> --}}
				   <!-- news -->
				   
				   <div class="cetagory-title-04">
				    @if(Session()->get('lang')=='english')
						Importent Website
						@else
						গুরুত্বপূর্ণ ওয়েবসাইট 
						@endif

					 </div>
				   <div class="">

				   	@php
				   		$website=DB::table('websites')->get();
				   	@endphp
					
				   	@foreach($website as $row)
				   	<div class="news-title-02">
				   		<h4 class="heading-03"><a href="{{$row->website_link}}" target="_blank"><i class="fa fa-check" aria-hidden="true"></i> 


				   		 @if(Session()->get('lang')=='english')
							{{$row->website_name_en}}
							
						@else
						{{$row->website_name_bn}}
						@endif


						 </a> 
						</h4>
				   	</div>
				   	@endforeach

				  
				   	
				   </div>

				</div>
			</div>
		</div>
	</section><!-- /.3rd-news-section-close -->
	


	


	


	<!-- gallery-section-start -->	
	<section class="news-section">
		<div class="container-fluid">

			@php
			$photobig=DB::table('photo_galleries')->where('type',1)->orderBy('id','DESC')->first();
			$photosmall=DB::table('photo_galleries')->orderBy('id','DESC')->get();
			
			@endphp

			<div class="row">
				<div class="col-md-8 col-sm-7">
					<div class="gallery_cetagory-title">
						@if(Session()->get('lang')=='english')
						Photo Gallery
						@else
						Photo Gallery bangla 
						@endif


					 </div>

					<div class="row">

	                    <div class="col-md-8 col-sm-8">
	                        <div class="photo_screen">
	                            <div class="myPhotos" style="width:100%">
                                      <img src="{{asset($photobig->photo)}}"  alt="Avatar">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                        <div class="photo_list_bg">
	                            @foreach($photosmall as $row)
	                            <div class="photo_img photo_border active">
	                                <img src="{{asset($row->photo)}}" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">

	                                    @if(Session()->get('lang')=='english')
											{{$row->title_en}}
											@else
											{{$row->title_bn}}
											@endif
	                                </div>
	                            </div>
	                            @endforeach

	                            

	                            

	                           

	                          

	                        </div>
	                    </div>
	                </div>

	                <!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->

                            <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                      showDivs(slideIndex += n);
                                    }

                                    function currentDiv(n) {
                                      showDivs(slideIndex = n);
                                    }

                                    function showDivs(n) {
                                      var i;
                                      var x = document.getElementsByClassName("myPhotos");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

                <!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->

				</div>
				
			</div>
		</div>
	</section><!-- /.gallery-section-close -->

	@endsection