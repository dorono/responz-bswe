(function($) {
    var BSWE = BSWE || {};
    BSWE.applySkipClass = function (list) {
        $.each(list, function(index , item) {
            var currentSelector = item;

            $(currentSelector).each(function() {
               $(this).addClass('skip');
            });
        });
    };

    BSWE.distributeAds = function(settings) {
        var adArray = [];

        // randomize the array
        function shuffle(array) {
            var m = array.length, t, i;

            // While there remain elements to shuffle...
            while (m) {
                // Pick a remaining element…
                i = Math.floor(Math.random() * m--);

                // And swap it with the current element.
                t = array[m];
                array[m] = array[i];
                array[i] = t;
            }

            return array;
        }

        $('.sidebar-boxunit').each(function () {
            // put all ads into an array
            adArray.push({
                adSlot: $(this).data('boxunit-slot'),
                adContainer: $(this).parents('.boxunit-container').attr('id')
            });
        });

        var shuffledAdArray = shuffle(adArray),
            adIdentifier,
            currentAd,
            adNum = 0,
            contentContainer = settings.contentContainer, // '#loops-wrapper',
            adParent,
            sourceAd;

        $(contentContainer).find(settings.adDivider).each(function (index) {
            if ((index + 1) % settings.frequency === 0 && $('.widgetwrap .sidebar-boxunit').length > adNum) {
                adIdentifier = shuffledAdArray[adNum].adSlot;
                adParent = shuffledAdArray[adNum].adContainer;

                currentAd = '.sidebar-boxunit[data-boxunit-slot=' + adIdentifier + ']';
                sourceAd = $('#' + adParent).find(currentAd);
                sourceAd.clone().insertAfter(contentContainer + ' '+ settings.adDivider + ':eq(' + index + ')').prepend('<div class=\'sponsored\'>Sponsored</div>');
                sourceAd.parents('.widgetwrap').addClass('hide-mobile');

                adNum++;
            }
        });
    };


    // list of elements that should not be counted
    // as part of the distribution of ads in content
    BSWE.skipList = ['.writer_promo p'];

    // Feed the skip list to a function that adds the skip class to
    // the elements to be skipped.
    BSWE.applySkipClass(BSWE.skipList);

    if($('body').hasClass('grid2')) {
        BSWE.distributeAds({
            contentContainer: '#loops-wrapper',
            adDivider: 'article',
            frequency: 2
        });
    } else if($('body').hasClass('single-format-standard')) {
        BSWE.distributeAds({
            contentContainer: 'article',
            adDivider: 'p:not(.skip)',
            frequency: 4
        });
    }
})(jQuery);

(function($) {

  $('.boxunit a').on('click', function() {
      var label = $(this).data('slot-name');

      ga('send', {
        hitType: 'event',
        eventCategory: 'Advertisements',
        eventAction: 'Banner Click',
        eventLabel: label
      });

    });
})(jQuery);
