$(function () {
	// hide id
	$('.hide').hide();

	//primary
	$('.postM').hide();

	//post
	$('#postMessager').click(function () {
		var _name = $('#name').val();
  		var _note = $('#note').val();
  		if (_name==""||_note=="") {
  			// window.location.href="/Messager/index.php/Home/Index/warn#invalid";
  		}else{
  			$.post("/Messager/index.php/Home/Index/post",{
  				name:_name,
  				note:_note
  			},function () {
  				window.location.href="/Messager/index.php/Home/Index/messager";
  			})
  		}
	});

// done && undone
	$('.done').click(function () {
			var uid = $(this).siblings('.id').text();
  			$.post("/Messager/index.php/Home/Index/done",{
  				id:uid
  			},function () {
  				window.location.reload();
  			});
	});

	$('.undone').click(function () {
			var uid = $(this).siblings('.id').text();
  			$.post("/Messager/index.php/Home/Index/undone",{
  				id:uid
  			},function () {
  				window.location.reload();
  			});
	});

//delete
	$('.delete').click(function () {
			var uid = $(this).siblings('.id').text();
  			$.post("/Messager/index.php/Home/Index/delete",{
  				id:uid
  			},function () {
  				window.location.reload();
  			});
	});

// clear
	$('#clear').click(function () {
  			$.get("/Messager/index.php/Home/Index/cleardata",
  				function () {
  					window.location.href="/Messager/index.php/Home/Index/messager";
  			})
	});
	
	//scroll
	if ($('.top .prev').text()=="prev") {
					$('.top').html('<a class="refresh" href="/Messager/index.php/Home/Index/messager/p/1.html" data-role="button">Refresh</a>');
				} else{
					$('.top').remove();
				};
				$('.num').remove();
				$('.current').remove();
				$('.top .next').remove();
				$('.top .prev').remove();
				$('.bottom .prev').remove();
				$('.bottom .next').text('Load more');
				$('.bottom .next').attr("data-role","button");
});