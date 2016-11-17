$(function(){
	$(".hit").click(function(){
		var	id = $(this).attr("id");
		// alert(id);return false;
		$.ajax({
		   type: "GET",
		   url: "hit",
		   data: {
		   	id:id,
		   },
		   success: function(msg){
		    	if(msg==1){
		    		location.href="roomcon?r_id="+id;
		    	}
		   }
		});
	});
})