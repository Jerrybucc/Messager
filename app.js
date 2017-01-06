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
        // window.location.href="/No.100/index.php/Home/Index/warn#invalid";
      }else{
        $.post("/No.100/index.php/Home/Index/post",{
          name:_name,
          note:_note
        },function () {
          window.location.href="/No.100/index.php/Home/Index/messager";
        })
      }
  });

// done && undone
  $('.done').click(function () {
      var uid = $(this).siblings('.id').text();
        $.post("/No.100/index.php/Home/Index/done",{
          id:uid
        },function () {
          window.location.reload();
        });
  });

  $('.undone').click(function () {
      var uid = $(this).siblings('.id').text();
        $.post("/No.100/index.php/Home/Index/undone",{
          id:uid
        },function () {
          window.location.reload();
        });
  });

//delete
  $('.delete').click(function () {
      var uid = $(this).siblings('.id').text();
        $.post("/No.100/index.php/Home/Index/delete",{
          id:uid
        },function () {
          window.location.reload();
        });
  });

// clear
  $('#clear').click(function () {
        $.get("/No.100/index.php/Home/Index/cleardata",
          function () {
            window.location.href="/No.100/index.php/Home/Index/messager";
        })
  });

  //copyright
  var Copyright = "<p class='form'>Copyright Jerry Chen</p>"
  $("div[data-role='footer']").append(Copyright);
})();