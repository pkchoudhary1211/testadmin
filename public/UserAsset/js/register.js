
  $("#register").validate({
    errorClass:"error",
    
    rules:{
      'name':{
        required:true,

      },
      'email':{
        required:true,
        email:true,
      },
      'password':{
        minlength: 8,
        required:true,
      },
      'confirm':{
        minlength: 8,
        required:true,
        equalTo : '[name="password"]',
      }
    },
    messages:{
        'name':{
        required:'Please Enter Your Name',
      },
      'email':{
        required:'Please Enter email Id',
        
      },
      'password':{
       
        required:'Please Enter Password',
         
      },
      'confirm':{
        
        required:'Please Enter confirm Password',
        
      }
    }


  } );
  
