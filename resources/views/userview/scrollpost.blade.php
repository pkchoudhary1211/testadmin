@foreach($req as $val)
<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
							<a href="{{url('singleview/'.$val->id)}}"><img src="{{asset('post/'.$val->ImageFile)}}" class="img-responsive" alt=""></a>
						</div>
				 </div>
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href="{{url('singleview/'.$val->id)}}">{{ $val->title }}</a></h3>
						<h6>BY <a href="{{url('singleview/')}}">{{$val->User}} </a>{{$val->post_date}}.</h6>
							<p>{{substr($val->details,0,40)}} .</p>
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