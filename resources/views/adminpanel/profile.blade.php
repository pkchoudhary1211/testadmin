
@include('adminpanel.include.Header')

<div class="market-updates">
			
<!------ Include the above in your HEAD tag ---------->

<br><br>
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="https://secure.gravatar.com/avatar/de9b11d0f9c0569ba917393ed5e5b3ab?s=140&r=g&d=mm" class="img-circle">
        </div>
        
        <div class="span8">
            <h3> Name :{{Auth::user()->name}}</h3>
            <h6>Email :{{Auth::user()->email}} </h6>
            <h6>Role : {{Auth::user()->Role}}</h6>
           
           
        </div>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon-wrench"></span> Modify</a></li>
                  
                </ul>
            </div>
        </div>
</div>
</div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!------ Include the above in your HEAD tag ---------->



@include('adminpanel.include.sidebar')
