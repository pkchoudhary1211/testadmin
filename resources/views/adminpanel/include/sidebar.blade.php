	
<!--COPY rights end here-->
</div>

<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="{{url('Dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		         
		          <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Post</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		           @if(Entrust::can('newpost'))


		          		 <li id="menu-academico-boletim" ><a href="{{url('addpost')}}">Add New Post</a></li>

		          	@endif	 

		      
		            <li id="menu-academico-avaliacoes" ><a href="{{url('postDetails')}}">Post List</a></li>		           
		          </ul>
		        </li>

		        <li id="menu-comunicacao" ><a href="{{url('Users')}}"><i class="fa fa-book nav_icon"></i><span>Users</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		          	@if(Entrust::can('adduser'))
		            	<li id="menu-mensagens" style="width: 120px" ><a href="{{url('add')}}">Add New User</a></li>
		            @endif	
		          
		            <li id="menu-arquivos" ><a href="{{url('Users')}}">User List</a></li>
		             
		          </ul>
		        </li>
		         
		       
		        
		        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
		        <li><a href="{{url('permission')}}"><i class="fa fa-envelope"></i><span>Permission</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
		        	 @if(Entrust::can('addpermission'))
			          	  	<li id="menu-academico-avaliacoes" ><a href="{{url('permission')}}">Add  New Permission</a></li>
			        @endif
			            <li id="menu-academico-boletim" ><a href="{{url('preslist')}}">Permission List</a></li>
		             </ul>
		        </li>
		         <li><a href="{{url('rules')}}"><i class="fa fa-cog"></i><span>Rules</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
		         	 
		         	 	@if(Entrust::can('addrole'))
			           		<li id="menu-academico-avaliacoes" ><a href="{{url('rules')}}">Add New Roles</a></li>
			            @endif
			            <li id="menu-academico-boletim" ><a href="{{url('ruleslist')}}">Rules List</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
		         </li>
		      </ul>
		    </div>

	 </div>
	<div class="clearfix"> </div>
</div>

<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('js/scripts.js')}}"></script>
		<!--//scrolling js-->
<script src="{{asset('AdminAsset/js/bootstrap.js')}}"> </script>
<!-- mother grid end here-->
</body>
</html>