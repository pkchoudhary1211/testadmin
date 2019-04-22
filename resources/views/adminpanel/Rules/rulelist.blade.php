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
	<a href="{{url('rules')}}" class="btn btn-primary" >Add New Role</a>
    <div class="inbox">
    	 
    	  <h2>Role List</h2>

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
				                <th>Display Name</th>
				                <th>Details</th>
				                <th>Action</th>
				                
				            </tr>
				        </thead>
				        <tbody>
				        @foreach($list as $val)
				            <tr>
				                <td>{{$val->name}}</td>
				                <td>{{$val->display_name}}</td>
				                <td>{{$val->description}}</td>
				                <td>
				                @if(Entrust::can('editrole'))
				                		<a href="{{url('editrole/'.$val->id)}}">Edit</a>
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
               <div class="tab-pane text-style" id="tab2">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    
	               </div>
	             </div>   
               </div>
               <div class="tab-pane text-style" id="tab3">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                
	               </div>   
               </div>
               <div class="tab-pane text-style" id="tab4">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>

	               </div>   
               </div>
               <div class="tab-pane text-style" id="tab5">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				      
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Post List </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>	                        
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>	                        
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                20 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                           <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                25 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                26 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                28 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
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