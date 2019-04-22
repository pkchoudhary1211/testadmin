<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
	@include('adminpanel.include.Header')
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2>Rules</h2>
    	<div class="blankpage-main">
    		<div class="signup-block">
    			@if(Session::has('message'))
						<p class="alert alert-info">{{ Session::get('message') }}</p>
					@endif
				<form action="{{ url('roleupdate')}}" enctype="multipart/form-data" method="Post">
					{{csrf_field()}}
					<input type="hidden" value="{{$roles->id}}" name="roleid">
					<input type="text" name="name" value="{{$roles->name}}" placeholder="Premission Name" required="">
					<input type="text" name="displayname" value="{{$roles->display_name}}" placeholder="Display Name" required="">
					<textarea class="form-control" id="exampleFormControlTextarea4" value=""  name="details" placeholder="Details" rows="3">{{$role->description}}</textarea>
			
					
				</br>
				
			@foreach($per as $key => $permission)
			
			<br>

			<input type="checkbox" value="{{$key}}"  {{ in_array($key,$list) ? 'checked':'unchecked'}}  name="permission[]">	{{$permission}} : {{$key}}
			@endforeach
					
					 


					<div class="forgot-top-grids">
						
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Update">														
				</form>
				<div class="sign-down">
				
				 
				</div>
		
    	 	</div>

    	</div>
    </div>
</div>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!--inner block end here-->
<!--copy rights start here-->
@include('adminpanel.include.sidebar')