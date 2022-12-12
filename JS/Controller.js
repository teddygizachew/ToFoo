$(document).on('click', '.btn-category', function(e){
  var $type = $(this).data("cat-source");
  if($type == "all"){
    $('.cat-block').fadeOut(0);
    $('.cat-block').fadeIn(1000);
  }else{
    $('.cat-block').hide();
    $('#'+$type + ".cat-block").fadeIn(1000);
  }
})