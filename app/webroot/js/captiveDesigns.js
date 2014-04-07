/**
 * Created with JetBrains PhpStorm.
 * User: ivan
 * Date: 5/11/13
 * Time: 11:47
 */


var captiveDesign = captiveDesign || {};

captiveDesign.init = function(){
    captiveDesign.preview.desktop();
    captiveDesign.preview.mobile();
};

captiveDesign.preview = {
    desktop: function(){
        var that = this;
        $('.desktop-preview').click(function(){
            that.openPreview('desktop', $(this).attr('href'));
            return false;
        });
    },
    mobile: function(){
        var that = this;
        $('.mobile-preview').click(function(){
            that.openPreview('mobile', $(this).attr('href'));
            return false;
        });
    },
    openPreview: function (type, url){
        var width = '1136px';
        var height = '640px';
        if(type == 'mobile'){
            width = '380px';
            height = '500px'
        }
        var mywindow = window.open('','Desktop preview','menubar=no,toolbar=no,personalbar=no,location=yes,status=no,resizable=yes,fullscreen=no,scrollbars=yes,width=' + width + ',height=' + height);
        mywindow.location = url;
    }
}

$(document).ready(function(){
    captiveDesign.init();
});