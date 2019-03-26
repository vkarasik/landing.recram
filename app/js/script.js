$(function () {
    $('a[href^="#"]').click(function () {
        var $linkHref = $(this).attr("href");
        var $ancorName = $('a[name="' + $linkHref.slice(1) + '"]');
        var ancorPosition = $ancorName.offset();
        $('body, html').animate({
            scrollTop: ancorPosition.top
        }, 550);
    })

    $('.product').hover(function(){
        $(this).find('.brands').stop(true);
        $(this).find('.arrow').fadeToggle(50);
        $(this).find('.brands').slideToggle();
    })

    $('form').submit(function(e){
        e.preventDefault();// Cancel reload page submit
        var $form = $(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
            success: function(response){
                $form[0].reset();
                $('.form-msg').slideDown().text(response);
                setTimeout(function(){$('.form-msg').slideUp().text('')}, 3000);
            },
            error: function(response){
                alert('An error occurred! Please resend yor message!');
            }
        });
    });
});
