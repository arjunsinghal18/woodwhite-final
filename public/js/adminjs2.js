$('#preview_para').click(function(){
    $('#preview_img').click();
});

$('#display_para').click(function(){
    $('#display_img').click();
});

$(document).ready(function(){
    $('.add_coupon_field').hide(2000);
});

$('.coupon_add_btn').click(function(){
    $('.add_coupon_field').show(2000);
});