	@include('adminpanel.include.header')
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
	<a href="{{url('add')}}" class="btn btn-primary" >Add New User</a>
    <div class="inbox">
    	 
    	  <h2>User List</h2>

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
	               @if(Session::has('message'))
						<p class="alert alert-info">{{ Session::get('message') }}</p>
					@endif
	                <table id="example" class="display" style="width:100%">
				        <thead>
				            <tr>
				                <th>Name</th>
				                <th>Email</th>
				                <th>Role</th>
				                <th>Action</th>
				                
				            </tr>
				        </thead>
				        <tbody>
				        @foreach($list as $val)
				            <tr>
				                <td>{{$val->name}}</td>
				                <td>{{$val->email}}</td>
				                <td>{{$val->Role}}</td>
				                <td>
				                	@if(Entrust::can('edituser'))

				                		<a href="{{url('edituser/'.$val->id)}}">Edit</a>
				                	@else
				                		Permission Not Given	
				                	@endif
				                </td>
				              
				            </tr>
				        @endforeach
				        
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>Name</th>
				                <th>Email</th>
				                <th>Role</th>
				                <th>Action</th>
				            </tr>
				        </tfoot>
				    </table>
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
@include('adminpanel.include.sidebar')