
var skip=5;
var limit =5;
$(window).scroll(function () {
    var  viewurl= base_url+"scrollview/"+skip;
    console.log(viewurl);
    	//console.log("under if condiaction");
    	//console.log($(window).height());
   // alert($(window).height() + $(window).scrollTop() == $(document).height()-100);
  //  console.log($(window).height() + $(window).scrollTop())
   // 	console.log((window).height() + $(window).scrollTop() == $(document).height()-100);
  // console.log($(window).height());
    	if ($(window).height() + $(window).scrollTop() > 1900){
    		//console.log("not found");
        
        	skip=skip+limit;
            console.log("perffect");
            $.ajax({

              type: "get",
                url: viewurl,
                //data: datas,
                //cache: false,
                success: function(data){
                	//console.log(data);
                	$(".test").append(data)
                }
            });
        
       } 
    
});