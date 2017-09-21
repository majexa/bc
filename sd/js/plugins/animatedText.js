Ngn.sd.blockTypes.push({
  title: 'Text',
  data: {
    type: 'animatedText',
    subType: 'text'
  }
});

Ngn.sd.BlockBAnimatedText = new Class({
  Extends: Ngn.sd.BlockBFont,
  hasAnimation: function() {
    return this.data.font && this.data.font.text && this.data.font.text.length > 1;
  }
});

window.addEvent('sdPanelComplete', function() {
  new Ngn.Btn(Ngn.sd.fbtn('Add text', 'text'), function() {
    var data = Ngn.sd.getBlockType('animatedText');
    data.data.position = {
      x: 0,
      y: 0
    };
    Ngn.sd.block(Ngn.sd.elBlock().inject(Ngn.sd.eLayoutContent), {
      data: data.data,
      html: ''
    }).setToTheTop().save(true);
  });
});