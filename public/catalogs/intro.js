$(document).ready(function(){
    $(".intro-1").animate({opacity: "1"}, 1000, function() {
        $(".intro-2").animate({left: "10px"}, 500, function() {
            $(".intro-3").animate({left: "40px"}, 500, function() {
                $(".intro-4").animate({left: "70px"}, 500, function() {
                    $(".intro-5").animate({left: "81px"}, 500, function() {
                        $(".intro").animate({opacity: "0"}, 1500, function() {
                            $("#preload").css('display', 'none');
                        });
                    });
                });
            });
        });
    });
});