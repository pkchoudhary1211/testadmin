@include('userview.include.header')
<link rel="stylesheet" type="text/css" href="{{asset('UserAsset/css/register.css')}}">



  
<div>
<div class="container" >
    <div class="col-md-6" >
        <div id="logbox"  >
            <form   id="register" action="{{url('createaccount')}}" method="post" name="register">
              {{csrf_field()}}
                <h1>Create an Account</h1>
                <input name="name"  id="name" type="text" placeholder="Your Name" class="input pass"/>
				        <input name="email" type="email" placeholder="Email address" class="input pass"/>
                <input name="password" id="password" type="password" placeholder="Choose a password"  class="input pass"/>
                <input name="confirm"id="confirm" type="password" placeholder="Confirm password"  class="input pass"/>
                <input type="submit" value="Sign me up!" class="inputButton"/>

            </form>
        </div>
    </div>
    <!--col-md-6-->


</div>
</div>


@include('userview.include.footer')

