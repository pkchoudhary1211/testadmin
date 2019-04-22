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
    	<h2>Post List</h2>
    	<div class="blankpage-main">
    		@if(Session::has('message'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
    		<table id="example" class="display" style="width:100%">
				        <thead>
				            <tr>
				                <th>Image</th>
				                <th>Title</th>
				                
				                <th>Action</th>
				                
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($list as $val)
				            <tr>
				                <td><img src="{{asset('post/'.$val->ImageFile)}}" width="20px" height="20px"></td>
				                <td>{{$val->title}}</td>
				                
				                <td>
				                	<a href="{{url('ViewPost/'.$val->id)}}">View</a>
				                	@if(Entrust::can('editpost'))
				                		<a href="{{url('Updatepost/'.$val->id)}}">Update</a>
				                	@else Permission Not Given
				                	@endif
				                	@if(Entrust::can('deletepost'))
				                		<a href="{{url('deletepost/'.$val->id)}}" onclick="return confirm('Are You Sure To Delete This Post')">Delete</a>
				                	@endif
													                	 
				                </td>
				              
				            </tr>
				            @endforeach
				        
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>Image</th>
				                <th>Title</th>
				          
				                <th>Action</th>
				            </tr>
				        </tfoot>
				    </table>
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