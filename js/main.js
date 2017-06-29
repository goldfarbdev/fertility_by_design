/*global jQuery*/
(function($) {
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn(250);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeOut(250);
    });

    $(window).load(function(){
        heightmatch();
    });


    function heightmatch () {
        var heightMatchContainer = $('.height-match');

        heightMatchContainer.each(function() {
            var ht = 0,
                heightChildren = $(this).children();

            if (!$(this).hasClass('height-matched')) {
                $(this).addClass('height-matched');
                heightChildren.each(function () {
                    var childHt = $(this).innerHeight();

                    if (childHt > ht) {
                        ht = childHt;
                        if ($(this).find('.float-bottom').length > 0) {
                            childHt = childHt + 15;
                        }
                        heightChildren.innerHeight(childHt);
                    }
                });
            }
        });
    }
}(jQuery));
