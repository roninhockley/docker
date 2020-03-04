$(document).ready(function(){

	var user_href;
	var user_href_splitted;
	var user_id;
	var image_src;
	var image_href_splitted;
	var image_name;
	var photo_id;


	$(".modal_thumbnails").click(function(){

		$("#set_user_image").prop('disabled',false);
		user_href = $("#user-id").prop('href')
		user_href_splitted = user_href.split("=");
		user_id = user_href_splitted[user_href_splitted.length - 1];
		

		image_src = $(this).prop('src');
		image_href_splitted = image_src.split("/");
		image_name = image_href_splitted[image_href_splitted.length - 1];
		

		photo_id = $(this).attr("data");

		$.ajax({
			url: "includes/ajax_code.php",
			data:{photo_id:photo_id},
			type: "POST",
			success:function(data){
				if(!data.error) {
					//alert(data);
					//die("just after alert of data");
					$("#modal_sidebar").html(data);
				}
			}
		});
	});

	$("#set_user_image").click(function(){

		//die("just after set_user_image button is clicked");
		//throw new Error("just after set_user_image button is clicked");
		//alert(user_id+"      "+image_name);
		//die("just after alert");
		$.ajax({
			url: "includes/ajax_code.php",
			data:{image_name:image_name, user_id:user_id},
			type: "POST",
			success:function(data){
				if(!data.error) {
					//alert(data);
					//die("just after alert of data");
					//location.reload(true);

					$(".user_image_box a img").prop('src', data);
					
				}

			}


		});
	});
	
	function die(msg = ''){
	    if(msg){
	        document.getElementsByTagName('html')[0].innerHTML = msg;
	    }else{
	        document.open();
	        document.write(msg);
	        document.close();
	    }
	    throw msg;
	}

	tinymce.init({selector:'textarea'});

});