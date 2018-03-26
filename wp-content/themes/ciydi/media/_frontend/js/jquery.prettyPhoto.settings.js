function social_tools( src , title ){
    return '<div class="pp_social">' +
    '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' + location.href + '" data-text="' + title + '" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>' +
    '<g:plusone size="medium"  href="' + location.href + '"></g:plusone>' + 
    '<script type="text/javascript">' +
    "(function() {" +
    "var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;" +
    "po.src = 'https://apis.google.com/js/plusone.js';" +
    "var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);" +
    '})();' +
    '</script>' +
    '<a href="http://pinterest.com/pin/create/button/?url=' +  location.href + '&media=' + src + '" class="pin-it-button" count-layout="horizontal">' + 
    '<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a><script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>' + 
    '<iframe src="http://www.facebook.com/plugins/like.php?href=' + location.href + '&amp;layout=button_count&amp;show_faces=false&amp;&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" height="24" width="200"></iframe>' + 
    '</div>';
}

jQuery(document).ready(function(){
    /* show images inserted in gallery */    
    jQuery( "a[data-gal^='prettyPhoto']" ).prettyPhoto({
        autoplay_slideshow: false,
        theme: 'pp_default',
        social_tools: ''
    });
});