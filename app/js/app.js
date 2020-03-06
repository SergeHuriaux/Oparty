var app = {
  init: function () {
    console.log('inittt');
    $('.flip').hover(function () {
      $(this).find('.card').toggleClass('flipped');


    });
    (function () {
      // We must use JS as we need to select previous
      // elements which can't be done with CSS.
      $('.skew-title').children('span').hover(function () {
        var $el, n;
        $el = $(this);
        n = $el.index() + 1;
        $el.addClass('flat');
        if (n % 2 === 0) {
          return $el.prev().addClass('flat');
        } else {
          if (!$el.hasClass('last')) {
            return $el.next().addClass('flat');
          }
        }
      }, function () {
        return $('.flat').removeClass('flat');
      });
    
    }).call(this);
  }
};

$(app.init);
