$(function() {
    // $('#USERS').on('click', function() {
    //     $(this).parent().siblings().children().removeClass('selected');
    //     $(this).addClass('selected');
    // });
    // $('#PRODDUCTS').on('click', function() {
    //     $(this).parent().siblings().children().removeClass('selected');
    //     $(this).addClass('selected');
    // });
    // $('#ORDERS').on('click', function() {
    //     $(this).parent().siblings().children().removeClass('selected');
    //     $(this).addClass('selected');
    // });
    $(".show-hide-button").click( function(){
        $(".wrapper").css('margin-left',0);
    })
    $(".exit-button").click( function(){
        $(".wrapper").css('margin-left',"-20vh");
    })

});
