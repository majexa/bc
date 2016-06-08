Ngn.sd.BlockBClipart = new Class({
  Extends: Ngn.sd.BlockBImage
});

Ngn.sd.ClipartInsertDialog = new Class({
  Extends: Ngn.sd.ImageInsertDialog,
  options: {
    title: 'Insert clipart',
    url: '/cpanel/' + Ngn.sd.bannerId + '/ajax_clipartSelect'
  },
  createImageUrl: function(url) {
    return '/cpanel/' + Ngn.sd.bannerId + '/json_createClipartBlock?url=' + url
  }
});

window.addEvent('sdPanelComplete', function() {
  new Ngn.Btn(Ngn.sd.fbtn('Add clipart', 'clipart'), function() {
    new Ngn.sd.ClipartInsertDialog();
  });
});