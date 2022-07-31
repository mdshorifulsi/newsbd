@extends('layouts.layouts')
@section('content')
<section class="single-page">
		<div class="container-fluid">

			<div class="col-md-12"><h2 class="heading">
						@if(Session()->get('lang')=='english')
										All News
										@else
										সব সংবাদ
										@endif


					</h2></div>
			
			


		  <!-- ******** -->
		  <div class="row">
			<div class="col-md-8 col-sm-8">
				@foreach($subcat_posts as $row)
				<div class="single-news">
				


					<div class="col-md-4 col-sm-4">
						<div class="top-news sng-border-btm">
							<a href="{{URL::to('view-post/'.$row->id)}}"><img src="{{asset($row->image)}}" alt="Notebook" style="height:80px"></a>
							<h4 class="heading-02"><a href="{{URL::to('view-post/'.$row->id)}}">
							@if(Session()->get('lang')=='english')
										{{$row->title_en}}
										@else
										{{$row->title_bn }}
										@endif
									</a> </h4>
						</div>
					</div>

					
				</div>
				@endforeach

			<h3 align="center">{{ $subcat_posts->links() }}</h3>
				
				
	
				
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