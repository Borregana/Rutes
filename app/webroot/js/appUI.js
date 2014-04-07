/**
 * User: Miquel Ramon Ortega i Tido
 * Date: 08/03/13
 * Time: 22:42
 */
var appUI = appUI || {};

appUI.init = function(){
  this.form = $('.form');

  this.tootTips.init();
  this.subMenu.init();

  if(this.form.length != 0){
    this.formProcess.init();
  }
  if($("a#bookmark").length != 0){
      this.addBookmark.init();
  }
};

appUI.subMenu = {
  parent: appUI,
  init: function(){
    $('.subnavbar .'+this.active).addClass('active');
  }
};


appUI.formProcess = {
  parent: appUI,
  init: function(){
    if(this.parent.form.find('.error-message').length != 0){
      this.errors();
    }
  },
  errors: function(){
    var that = this;
    this.parent.form.find('.error-message').each(function(){
      $(this).prev().append($('<span class="help-inline">').html($(this).html()));
      $(this).remove();
    });
  },
  validate: function(){
    this.parent.form.validate();
  }
};

appUI.tootTips = {
  parent: appUI,
  init: function(){
    $('[data-toggle=tooltip]').tooltip();
  }
};

appUI.addBookmark = {
    parent: appUI,
    init: function(){
        var that = this;
        console.log(that.errorMsg)
        $("a#bookmark").click(function(){
            var bookmarkUrl = this.href;
            var bookmarkTitle = this.title;

            if ($.browser.mozilla) // For Mozilla Firefox Bookmark
            {
                window.sidebar.addPanel(bookmarkTitle, bookmarkUrl,"");
            }
            else if($.browser.msie) // For IE Favorite
            {
                window.external.AddFavorite( bookmarkUrl, bookmarkTitle);
            }
            else if($.browser.opera ) // For Opera Browsers
            {
                $(this).attr("href",bookmarkUrl);
                $(this).attr("title",bookmarkTitle);
                $(this).attr("rel","sidebar");
                $(this).click();
            }
            else // for other browsers which does not support
            {
                alert(that.errorMsg);
            }
            return false;
        });
    }
}

$(document).ready(function(){
  appUI.init();
});
