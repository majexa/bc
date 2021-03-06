Ngn.sd.BlockBClipart = new Class({
  Extends: Ngn.sd.BlockBImage,
  canEdit: function() {
    return false;
  }
});

window.addEvent('sdPanelComplete', function() {
  Ngn.sd.ClipartInsertDialog = new Class({
    Extends: Ngn.sd.ImageInsertDialog,
    options: {
      id: 'clipart',
      title: Locale.get('Sd.insertClipart'),
      url: '/cpanel/' + Ngn.sd.bannerId + '/ajax_clipartSelect'
    },
    createImageUrl: function(url) {
      return '/cpanel/' + Ngn.sd.bannerId + '/json_createClipartBlock?url=' + url
    }
  });
  new Ngn.Btn(Ngn.sd.fbtn(Locale.get('Sd.addClipart'), 'clipart'), function() {
    new Ngn.sd.ClipartInsertDialog();
  });
});