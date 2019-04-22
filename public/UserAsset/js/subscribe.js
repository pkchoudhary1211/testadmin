$("#subscribe").validate({
	 errorClass: 'errors',
	rules:{
		'name':{
			required:true,

		},
		'Email':{
			required:true,
			email:true,
		}
	},
	messages:{
		'name':{
			required:"Please Enter Your Name ",
		},
		'Email':{
			required:"Please Enter Your Email Id",
		}
	}

});