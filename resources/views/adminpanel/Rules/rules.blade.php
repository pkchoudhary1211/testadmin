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
				<form action="{{ url('rulessubmit')}}" name="PremissionForm" id="PremissionForm" enctype="multipart/form-data" method="Post">
					{{csrf_field()}}
					<input type="text" name="name" id="name" placeholder="Premission Name" required="">
					<input type="text" name="displayname" id="displayname" placeholder="Display Name" required="">
					<textarea class="form-control" id="details"  name="details" placeholder="Details" rows="3"></textarea>
			
					
				</br>
					
					    @foreach($check as $box)

					    <input type="checkbox" id="brand1" name="permissions[]" value="{{$box->id}}">
									<label for="brand1"><span></span >{{$box->display_name}}</label>
								</br>
					    @endforeach

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
  
  $("#PremissionForm").validate({
    errorClass: "error",
    rules:{
    	'name':{
    		required:true,
    	},
    	'displayname':{
    		required:true,
    	},
    	'details':{
    		required:true,
    	

    	
    },
},
    messages:{
    	'name':{
    		required:"Please Enter Role Name"
    	},
    	'displayname':{
    	required:"Please Enter Display Name"
    	},
    	'details':{
    		required:"Please Enter Details"
    	},	
    }

});

</script>
@include('adminpanel.include.sidebar')