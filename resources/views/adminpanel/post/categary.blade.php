	@include('adminpanel.include.Header')
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
    
    	
    	 <div class="col-md-8 mailbox-content  tab-content tab-content-in">
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				       
				        
				        <div class="clearfix"> </div>
				    </div>
				    
	               </div>
	                	
	                	
    	 	<div class="compose-block">
    	 		
				<h1>New Categary </h1>
			</div>
			<div class="signup-block">
				<form action="{{url('Uploadcategary')}}" id="postdata" name="postdata" enctype="multipart/form-data" method="Post">
					{{csrf_field()}}
					<input type="text" name="title" id="title" placeholder="Title">
					
				</br>
					
							<input type="submit" name="" class="btn btn-primary" value="Add"/>										
				</form>
				<div class="sign-down">
				<ul>
					@foreach($cat as $val)
						<li>{{$val->title}}</li>
					@endforeach
				</ul>
				 
				</div>
		
    	 		</div>
    	 	 


	               </div>   
               </div>
               
            </div>
          <div class="clearfix"> </div>

   </div>
</div>
<script type="text/javascript">
	
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
  
  $("#postdata").validate({
    errorClass: "error",
    rules:{
    	'title':{
    		required:true,
    	},
    	
    },
    messages:{
    	'title':{
    		required:"Please Enter Title",
    	},
    	

    	
    }

});

</script>
@include('adminpanel.include.sidebar')