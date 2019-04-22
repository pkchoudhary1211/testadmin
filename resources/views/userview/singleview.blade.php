@include('userview.include.header')


<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="agileinfo">

		  <h2 class="w3">{{$postdetails->title}}</h2>
			<div class="single">
			   <img src="images/sing-1.jpg" class="img-responsive" alt="">
			    <div class="b-bottom"> 
			      <h5 class="top">	@foreach($cat as $cate) 
			      						{{$cate->title}}
			      					@endforeach

			      </h5>
				   <p class="sub">{!! $postdetails->details !!}.</p>
			      <p> Post By: {{$postdetails->User}} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span> On Date :{{$postdetails->post_date}} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{$postdetails->views}} </a></p>
				 
				</div>
			 </div>
			  

						<div class="response">
					<h4>Comments</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
					<div  id="test" class="test">
						@foreach($comm as $con)
							
								<div class="media-body response-text-right">
									<p>{{$con->comment}}.</p>
									<ul>
										<lli>By :{{$con->name}}</lli>
										<li>On :{{$con->cdate}}</li>
										
									</ul>
									
								</div>

						@endforeach
					</div>

								<div class="clearfix"> </div>
						
						
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img src="images/sin1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>	
				<div class="coment-form">
					<h4>Leave your comment</h4>
					@if(!Auth::check()) 
					<a href="{{ route('userlogin') }}">Click Here To Log In </a>
					@else
					<form>
						{{csrf_field()}}
						<meta name="csrf-token" content="{{ csrf_token() }}">
						<input type="hidden" name="Postid" id="Postid" value="{{$postdetails->id}}"/>
						<textarea    name="comment" id="comment"  required="" placeholder="Enter Your Comment..."></textarea>
						<input type="submit"  class="PostComment" value="Submit Comment">
					</form>
					@endif

				</div>	
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- technology-right -->
@include('userview.include.sidebar')


@include('userview.include.footer')