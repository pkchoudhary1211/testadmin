
    $(document).ready(function(){
        var id= $("input[name=Postid]").val();
         var  viewurl= base_url+"viewcont/"+id
         console.log(viewurl);
        $.ajax({ url: viewurl,
        context: document.body,
        success: function(data){

      
        }});
});
        //