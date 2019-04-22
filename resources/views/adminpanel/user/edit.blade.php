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
				<form action="{{url('userroleupdate')}}"  name="userform" id="userform" enctype="multipart/form-data" method="Post">
					{{csrf_field()}}
					<input type="text" name="name" id="name" placeholder="Username" readonly="" value="{{$user->name}}" required="">
					<input type="text" name="email"  id="email" placeholder="Email" readonly="" value="{{$user->email}}" required="">
					<input type="hidden" value="{{$user->id}}" name="usss">
					<input type="hidden" name="userid" value="{{$user->id}}">
					
			
					
				</br>
				
			{!! Form::select('Role',$roles,$role->name,['class'=>'form-control']); !!}
					
					    <br/>
					

					<div class="forgot-top-grids">
						
						
						<div class="clearfix"> </div>
					</div>
					{!! Form::submit('Update',['class'=>'']); !!}													
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