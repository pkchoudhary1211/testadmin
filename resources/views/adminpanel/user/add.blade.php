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
    	<h2>Add New User</h2>
    	<div class="blankpage-main">
    		<div class="signup-block">
				<form action="{{ route('store') }}"  name="userform" id="userform" enctype="multipart/form-data" method="Post">
					{{csrf_field()}}
					<input type="text" name="name" id="name" placeholder="Username" required="">
					<input type="text" name="email"  id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" class="lock" placeholder="Password">
					
			
					
				</br>
					<select  class="form-control" name="Role" id="Role">
					      <option value="">Please Select User Role</option>
					      @foreach($list as $val)
					      	<option value="{{$val->id}}">{{$val->name}}</option>
					      @endforeach
					  
					     
					</select>
					    <br/>
					

					<div class="forgot-top-grids">
						
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Save">														
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
<script>
  
  $("#userform").validate({
    errorClass: "error",
    rules:{
    	'name':{
    		required:true,
    	},
    	'email':{
    		required:true,
    	},
    	'Role':{
    		required:true,
    	},
    	'password':{
    		required:true,
    		minlength:8,
    	}

    	
    },
    messages:{
    	'name':{
    		required:"Please Enter User name",
    	},
    	'email':{
    	required:"Please Enter User Email Id",
    	},
    	'Role':{
    		required:"Please Select Role",
    	},
    	'password':{
    		required:"Please Enter password"
    	}
    	

    	
    }

});

</script>
@include('adminpanel.include.sidebar')