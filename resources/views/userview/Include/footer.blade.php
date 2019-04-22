<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>About Me</h4>
				<p>I am Prakhas Choudhary From Rajasthan.</p>
				<img src="images/t4.jpg" class="img-responsive" alt="">
					<div class="bht1">
			
					</div>
			</div>
			<div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<h4>Latest Tweet</h4>
			<div class="mid-btm">
				<p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				
			</div>
			
				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
			
		
			</div>
			<div class="col-md-4 footer-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>Newsletter</h4>
				@if(Session::has('message'))
					<p class="alert alert-info">{{ Session::get('message') }}</p>
				@endif
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
						<div class="name">
							<form action="{{url('subscribe')}}" name="subscribe" id="subscribe" method="post">
								{{csrf_field()}}
								<input type="text" name="name"  placeholder="Your Name" required="">
								<input type="text" name="Email" placeholder="Your Email" required="">
								{!! Form::submit('Subscribed Now') !!}
								
							</form>
						
						</div>	
						
							<div class="clearfix"> </div>
					
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="container">
					<p>HappyPerks | Design  & Developed by Prakash Choudhary <a href="https://happyperks.com//"></a></p>
				</div>
			</div>
			@include('userview.include.script')
			<style type="text/css">
				.errors{
					color: red;
				}
			</style>
			<script src="{{asset('UserAsset/js/subscribe.js')}}"></script>
</body>

</html>