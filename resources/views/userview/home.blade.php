@include('userview.include.header')
<div class="banner">
<div class="container">	
		<h2>Contrary to popular belief, Lorem Ipsum simply</h2>
		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
		<a href="#section1" >READ MORE</a>
	</div>
</div>
<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						@foreach($catlist as $key => $list)
						<li role="{{strtolower(str_replace(' ', '', $list->title))}}" class="{{$key==0?'active':''}}"><a href="#{{strtolower(str_replace(' ', '', $list->title))}}" id="{{strtolower(str_replace(' ', '', $list->title))}}" role="tab" data-toggle="tab" aria-controls="{{strtolower(str_replace(' ', '', $list->title))}}">{{$list->title}}</a></li>
						@endforeach
						
					</ul>
					<div id="myTabContent" class="tab-content">
					
							@foreach($catlist as $key => $list)
								<div role="tabpanel" class="tab-pane fade {{$key==0?'active':''}}" id="{{strtolower(str_replace(' ', '', $list->title))}}" aria-abelledby="{{strtolower(str_replace(' ', '', $list->title))}}">
									<p>{{$list->title}}</p>
									<div class="col-md-4 col-sm-5 tab-image">
										<img src="images/f2.jpg" class="img-responsive" alt="{{$list->title}}">
									</div>
									<div class="col-md-4 col-sm-5 tab-image">
										<img src="images/f4.jpg" class="img-responsive" alt="{{$list->title}}">
									</div>
									<div class="col-md-4 col-sm-5 tab-image">
										<img src="images/f3.jpg" class="img-responsive" alt="{{$list->title}}">
									</div>
									<div class="clearfix"></div>
								</div>
							@endforeach
						
						
						<!-- <div role="tabpanel" class="tab-pane fade" id="{{$list->title}}" aria-labelledby="safari-tab">
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/t1.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/t2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/t3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/m2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/m1.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="images/m3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>









	<div class="technology" id="section1">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div id="fullview" class="tech-no">
			<!-- technology-top -->
			
			
			<div class="clearfix"></div>
			<!-- technology-top -->
			<!-- technology-top -->
			
			<!-- technology-top -->
			<div  id="test" class="test">
			@foreach($postdetails as $val)
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
							<a href="{{url('singleview/'.$val->id)}}"><img src="{{asset('post/'.$val->ImageFile)}}" class="img-responsive" alt=""></a>
						</div>
				 </div>
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href="{{url('singleview/'.$val->id)}}">{{ $val->title }}</a></h3>
						<h6>BY <a href="{{url('singleview/'.$val->id)}}">{{$val->User}} </a>{{$val->post_date}}.</h6>
							<p>{{ strip_tags(html_entity_decode(substr($val->details,0,40)))  }}.</p>
							<div class="bht1">
								@if(strlen($val->details)>10)
								<a href="{{url('singleview/'.$val->id)}}">Read More</a>
								@endif
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>									
									<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					
				 </div>
					<div class="clearfix"></div>
			</div>
			@endforeach
		</div>
			</div>
		</div>

		<!-- technology-right -->
		@include('userview.include.sidebar')

<script src="{{asset('UserAsset/js/smootscroll.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@include('userview.include.footer')