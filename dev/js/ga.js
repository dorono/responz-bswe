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
