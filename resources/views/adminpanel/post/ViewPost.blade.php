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
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Post List </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                               
	                            </div>
	                            	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <h1><b> {{$list->title}}<b/> : 
	                	@foreach($cat as $catval)
	                	<font color="blue"> :{{$catval->title}} </font>
	                	@endforeach
	                  <h1>
	                	<img src="{{url('post/'.$list->ImageFile)}}/" width="400px" height="200px">
	                <h5>{!! $list->details !!}</h5> 

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
@include('adminpanel.include.sidebar')