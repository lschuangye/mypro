/**
 * Created by bluewaitor on 2016/4/7.
 */
var Tool = {
    loading: function(msg){
        var _msg = msg || '';
        var html = $("<div class='loading'>"+_msg+"</div>");
        $("body").append(html);
    },
    removeLoading: function(){
        $(".loading").remove();
    }
};

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).on(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});
