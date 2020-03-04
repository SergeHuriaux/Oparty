var app = {
  init: function() {
    console.log('inittt');
    $('.flip').hover(function(){
      $(this).find('.card').toggleClass('flipped');

});
  }
};

$(app.init);
