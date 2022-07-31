@extends('layouts.layouts')
@section('content')
<section class="single-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">   
					   <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>					   
						<li><a href="#">
							@if(Session()->get('lang')=='english')
										{{$singlepost->category->catname_en}}
										@else
										{{$singlepost->category->catname_bn}}
										@endif

						</a></li>


						<li><a href="#">
							@if(Session()->get('lang')=='english')
										{{$singlepost->subcategory->subcatname_en}}
										@else
										{{$singlepost->subcategory->subcatname_bn}}
										@endif</a></li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12"> 											
					<header class="headline-header margin-bottom-10">
						<h1 class="headline">
							@if(Session()->get('lang')=='english')
										{{$singlepost->title_en}}
										@else
										{{$singlepost->title_bn}}
										@endif


						</h1>
					</header>
		 
		 
				 <div class="article-info margin-bottom-20">
				  <div class="row">
						<div class="col-md-6 col-sm-6"> 
						 <ul class="list-inline">
						 
						 
						 <li>{{$singlepost->user->name}} </li>     <li><i class="fa fa-clock-o"></i>
						 	{{$singlepost->post_date}}
						 </li>
						 </ul>
						
						</div>
						<div class="col-md-6 col-sm-6 pull-right"> 						
						{{-- 	<ul class="social-nav">
								<li><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('#'),'facebook-share-dialog','width=626,height=436'); return false;" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="" onclick="javascript:window.open('https://twitter.com/share?text=‘#'); return false;" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="" onclick="window.open('https://plus.google.com/share?url=#'); return false;" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank" title="Print" rel="nofollow" class="print"><i class="fa fa-print"></i></a></li> --}}
						
							</ul>						   
						</div>						
					</div>				 
				 </div>				
			</div>
		  </div>
		  <!-- ******** -->
		  <div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="single-news">
					<img src="{{asset($singlepost->image)}}" alt="" />
					<h4 class="caption">
						@if(Session()->get('lang')=='english')
										{!!$singlepost->title_en!!}
										@else
										{!! $singlepost->title_bn !!}
										@endif

					</h4>
					<p>

						@if(Session()->get('lang')=='english')
										{!!$singlepost->details_en!!}
										@else
										{!! $singlepost->details_bn !!}
										@endif
									</p>
				</div>
				
				@php
					$more=DB::table('posts')->where('category_id',$singlepost->category_id)->limit(6)->get();
				@endphp
<hr>
				<div class="row">
					<div class="col-md-12"><h2 class="heading">
						@if(Session()->get('lang')=='english')
										More
										@else
										আরো সংবাদ
										@endif


					</h2></div>
<hr>
					@foreach($more as $row)


					<div class="col-md-4 col-sm-4">
						<div class="top-news sng-border-btm">
							<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="{{URL::to('view-post/'.$row->id)}}">
							@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn }}
										@endif
									</a> </h4>
						</div>
					</div>

					@endforeach


					
				</div>
				
			</div>
			<div class="col-md-4 col-sm-4">
				@php
				$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
				$favorite=DB::table('posts')->orderBy('id','DESC')->inRandomOrder(8)->get();
				$highest=DB::table('posts')->orderBy('id','ASC')->limit(8)->get();
			@endphp


					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
				<div class="tab-header">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">

							@if(Session()->get('lang')=='english')
									Latest
								@else
									সর্বশেষ 
								@endif</a></li>
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
											@endif</a> </h4>
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
									</a> </h4>
								</div>

								@endforeach
								
							</div>                                          
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab23">	
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
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>
		  </div>
		</div>
	</section>

@endsection