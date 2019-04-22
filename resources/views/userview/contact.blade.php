@include('userview.include.header')

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





	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="contact-section">
				<h2 class="w3">CONTACT</h2>
					@if(Session::has('message'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
					@endif
				
					<div class="contact-grids">
						<div class="col-md-8 contact-grid">
							
							<p>Nemo enim ips voluptatem voluptas sitsper natuaut odit aut fugit consequuntur magni dolores eosqratio nevoluptatem  amet eism com odictor ut ligulate cot ameti dapibu</p>
							<form action="{{url('sendmail')}}" method="post">
								{{csrf_field()}}
								<input type="text" name="Name" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								
								<textarea type="text" name="Msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
								<input type="submit" value="Send">
							</form>
						</div>
						<div class="col-md-4 contact-grid1">
							<h4>Address</h4>
							<div class="contact-top">
								
								
								<div class="clearfix"></div>
							</div>
							<ul>
									<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
									<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
									<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:info@example.com">info@example.com</a></li>
									<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
								</ul>

						</div>
						<div class="clearfix"></div>
					</div>
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8679554096!2d150.65178930803913!3d-33.847403996396665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1470643502584" allowfullscreen></iframe>
					</div>
				
			</div>
		</div>
	



	
		<!-- technology-right -->
		@include('userview.include.sidebar')


@include('userview.include.footer')