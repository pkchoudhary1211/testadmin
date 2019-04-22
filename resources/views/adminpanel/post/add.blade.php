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
    	 		
				<h1>New Post </h1>
			</div>
			<div class="signup-block">
				<form action="{{url('UploadPost')}}" id="postdata" name="postdata" enctype="multipart/form-data" method="Post">
					{{csrf_field()}}
					<input type="text" name="title" id="title" placeholder="Title">
					
				</br>
					<textarea class="form-control" placeholder="Details" id="Details" name="details" rows="3"></textarea>
				</br>
				
					@foreach($cat as $val)
						<input type="checkbox" value="{{$val->id}}" name="categary[]"> {{$val->title}}</br>
					@endforeach
					<br/>
					<a href="{{url('categatypage')}}" class="btn btn-info">Add New Categary</a>
					
					<input type="file"  class="form-control" name="imgFile" id="imgFile"  placeholder="Image">

					<div class="forgot-top-grids">
						
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Upload">														
				</form>
				<div class="sign-down">
				
				 
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
    	'categary':{
    		required:true,
    	},
    	'details':{
    		required:true,
    	},
    	'imgFile':{
    		required:true,
    		// allowedExtensions: ['jpg', 'jpeg'],

    	}
    },
    messages:{
    	'title':{
    		required:"Please Enter Title",
    	},
    	'categary':{
    	required:"Please Select Categary",
    	},
    	'details':{
    		required:"Please Enter Details",
    	},
    	'imgFile':{
    		required:"Please Select Image file"
    	}

    	
    }

});

</script>
@include('adminpanel.include.sidebar')