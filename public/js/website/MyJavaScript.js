// Show all products
$("#all").on('click',function(){
    $("#target-jackets,#target-shirts,#target-shoes,#target-suits").removeClass('hide');
  });
// Show Jackets
$("#4").on('click',function(){
    $("#target-jackets").removeClass('hide').siblings('').addClass('hide');
  });
// Show shirts

  $("#3").on('click',function(){
    $("#target-shirts").removeClass('hide').siblings('').addClass('hide');
  });
// Show shoes
  $("#2").on('click',function(){
    $("#target-shoes").removeClass('hide').siblings('').addClass('hide');
  });
  // Show suits
  $("#1").on('click',function(){
    $("#target-suits").removeClass('hide').siblings('').addClass('hide');
  });
// qty adding

