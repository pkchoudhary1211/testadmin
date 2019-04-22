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
    <div class="inbox">
  
    	 <div class="col-md-4 compose">   	 	
    	 	
    	 	
    	 	<div class="compose-bottom">
    	 		 
    	 	</div>
    	 </div>
    	
    	 <div class="col-md-8 mailbox-content  tab-content tab-content-in">
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				       
				        
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Post List </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                               
	                            </div>
	                            	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	               
    	 	<div class="compose-block">
    	 		
				<h1>Update Data</h1>
			</div>
			<div class="signup-block">
				<form action="{{url('UpdatePostData')}}" name="UpdatePostData" id="postdata" enctype="multipart/form-data" method="Post">
					<img src="{{asset('Post/'.$list->ImageFile)}}">
					{{csrf_field()}}
					<input type="hidden" value="{{$list->id}}" name="PostId"/>
					<input type="text" name="title" value="{{$list->title}}" id="title" placeholder="Title" required="">
					
				</br>
					<textarea class="form-control" id="details" value="" placeholder="Details" id="Details" name="details" rows="3">{{$list->details}}</textarea>
				<br/>
					@foreach($cate_list as $key => $val)
			
<br>
						<input type="checkbox" value="{{$val}}"  {{ in_array($val,$catpost) ? 'checked':'unchecked'}}  name="categary[]">{{$key}}
					
					
					
					
					@endforeach
					<input type="file"  class="form-control" name="imgFile" id="imgFile"  placeholder="Image">
					
					    <br/>
					

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
    	
    	'details':{
    		required:true,
    	},
    	
    },
    messages:{
    	'title':{
    		required:"Please Enter Title",
    	},
    	
    	'details':{
    		required:"Please Enter Details",
    	},
    	

    	
    }

});

</script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>  
<script>  
    CKEDITOR.replace('details');  
    
  
    function getData() {  
        //Get data written in first Editor   
        var editor_data = CKEDITOR.instances['details'].getData();  
        //Set data in Second Editor which is written in first Editor  
       
    }  
</script> 
@include('adminpanel.include.sidebar')