!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0],
    p=/^http:/.test(d.location)?'http':'https';
    if(!d.getElementById(id)){
        js=d.createElement(s);
        js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
        fjs.parentNode.insertBefore(js,fjs);
    }
}(document, 'script', 'twitter-wjs');

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

(function() {
    var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
    li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
})();


$(window).load(function() {
    $('.flexslider-produk').flexslider({
        animation: "slide",/*
        itemWidth: 420,
        itemMargin: 16,*/
        controlNav: "thumbnails",
        directionNav: false
    });

    $('#flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        directionNav: false,
        slideshow: true,
        slideshowSpeed: 5000,
        animationSpeed: 600
    });

    // Cart bubble
    $('.counter a').live('click', function(){
        $('.cartbubble').slideToggle();
    });
    $('#closeit').on('click',function(e){
        e.preventDefault;
        $('.cartbubble').slideUp();
    });
    
    // Tab function
    $('#myTab a, #myTab button').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    
    // Fancybox function
    $('.flexslider-produk .slides a').fancybox();

});

$(document).ready(function() {
    $('.search').on('click', function(event) {
        if ($('.search-column').hasClass('active')) {
            $('.search-column').hide().removeClass('active');
        }else{
            $('.search-column').show().addClass('active');
            $('#target').focus();
        }
        return false;
    });

    $('#target').blur(function () {
        $('.search-column').hide().removeClass('active');
    });

    $('.btn-search').on('click', function(){
        if ($('.mobilenav-search').hasClass('active')) {
            $('.mobilenav-search').hide().removeClass('active');
        }else{
            $('.btn-nav').addClass('collapsed');
            $('.nav-collapse').removeClass('in collapse');
            $('.nav-collapse').css('height', '0');
            $('.nav-collapse').addClass('collapse');

            $('.mobilenav-search').show().addClass('active');
            $('#target-mobile').focus();
            return $('.mobile-dropdown').trigger('close-mobile-nav');
        }
        return false;
    });

    $('#target-mobile').blur(function () {
        $('.mobilenav-search').hide().removeClass('active');
    });
});