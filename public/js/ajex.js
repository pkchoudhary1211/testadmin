
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $(".PostComment").click(function(e){

        e.preventDefault();



        var Postid = $("input[name=Postid]").val();
        console.log("post id :"+Postid);
        
        var comment = $("textarea[name=comment]").val();
        
        console.log("comment :"+comment);

      

 console.log(base_url+'postcomment');

        $.ajax({

           type:'POST',

           url: base_url+'postcomment',


           data:{Postid:Postid, comment:comment},

           success:function(data){
            
             console.log(data);
             $('#comment').val("");
              $(".test").append(data)
           

           }

        });



  });