<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?= SITE_TITLE ?></title>
  {sflm}
  <? if ($d['sfl'] != 'sdSite') { ?>
    <script src="/i/js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
  <? } ?>
</head>
<style>
/*---------- FROM edit.css ------------ */
.body {
  -webkit-user-select: none;
  cursor: default;
}

/* ---------------- главная панель --------------- */
#panel {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2000;
  height: 50px;
}
#panel .cont {
  position: fixed;
  padding: 5px 0 0 0;
  z-index: 10;
  width: 100%;
  background: #212121;
}
#panel .logo {
  margin: 5px 0 0 5px;
  display: block;
  background: url(/sd/img/smLogo.png);
  width: 50px;
  height: 50px;
  float: left;
}
.tit {
  float: left;
  color: #fff;
  font-size: 10px;
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  text-shadow: 1px 2px 4px #000;
}
.cont .tit {
  border-right: 1px solid #444;
  margin-left: 9px;
}
.btnBlock,
.featureBtnWrapper {
  margin: 5px 5px 5px 5px;
  height: 50px;
  width: 50px;
  margin-bottom: 10px;
  float: left;
}
.panelBtn {
  display: block;
  background: url(/sd/img/icons/guitar.png) no-repeat top center;
  border-left: 1px solid #2f2f2f;
  color: #ccc;
  text-decoration: none;
  padding-top: 28px;
  font-size: 8px;
  text-align: center;
}
.panelBtn:hover {

  color: #fff;
}

.blockPreview {
  box-sizing: border-box;
  /*border: 1px dashed #555;*/
  top: 0px;
  left: 0px;
  width: 50px;
  height: 50px;
  background: url(/sd/img/news.png);
}
.block {
  background: rgba(0, 170, 238, 0.3);
}
.block.highlight {
  background: rgba(0, 270, 138, 0.3);
}
.block .cont a {
  cursor: default;
}

/* --------------- панель разделов ----------- */
.dropRightMenu {
  width: 200px;
  background: #AEAA9F url(/sd/img/panelBg.png) repeat-y top left;
  color: #ccc;
  position: fixed !important;
  top: 0px;
  left: 61px;
  z-index: 9;
  border-bottom-right-radius: 7px;
}
.dropRightMenu .fieldSet {
  padding: 10px;
  padding-top: 5px;
}
.dropRightMenu .fieldSet .bottomBtns a {
  color: #ccc !important;
}

.dropRightMenu .fieldSet .bottomBtns a:hover {
  color: #fff !important;
}
.dropRightMenu .fieldSet input {
  margin-right: 5px;
  width: 130px;
  background: #242424;
  color: #ccc;
  font-size: 11px;
  padding: 3px 5px;
  border: 1px solid #555;
}
.dropRightMenu .rowElement {
  padding-left: 7px;
}

#panel .tit#pageTitle {
  font-size: 14px;
  border-top: 0px;
}

.hidebleBarHandler.horizontal {
  height: 40px;
  width: 16px;
  background: url(/i/img/white/arrow-left.png) center center no-repeat;
  top: 0px;
}
.hidebleBarHandler.show {
  background: #555 url(/i/img/white/arrow-right.png) center center no-repeat;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  position: fixed;
}

/* ------------ панель дополнительных блоков -------------- */

.extraBlocks {
  top: 70px !important;
}
.dropRightMenu.extraBlocks {
  width: 60px;
  height: 158px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

/* ------------ иконки блоков -------------- */
.btnBlock {
  display: inline-block;
  width: 30px;
  height: 30px;
  background: url(/i/img/icons/page-block-icons.png) no-repeat;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.btnBlock.type_text {
  background-position: -89px -11px;
}
.btnBlock.type_font {
  background-position: -203px -11px;
}
.btnBlock.type_menu {
  background-position: -127px -11px;
}
.btnBlock.type_image {
  background-position: -50px -11px;
}
.btnBlock.type_feedback {
  background-position: -241px -11px;
}
.btnBlock.type_blog {
  background-position: -280px -11px;
}
.btnBlock.type_button {
  background-position: -319px -11px;
}
.btnBlock.type_auth {
  background-position: -11px -11px;
}
.btnBlock.type_tpl {
  background-position: -359px -11px;
}
.btnBlock.type_svg {
  background-position: -399px -11px;
}
.btnBlock.type_select {
  background-position: -449px -11px;
}
/* ------------ конец иконки блоков -------------- */

/* ------------ контролы блоков -------------- */

.btnResize {
  position: absolute;
  bottom: -1px;
  right: -1px;
  width: 8px;
  height: 8px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  background: rgba(0, 0, 0, 0.1);
  cursor: se-resize;
  z-index: 10;
}
.btnResize:hover {
  border-color: rgba(0, 0, 0, 0.5);
  background: rgba(0, 0, 0, 0.3);
}

.btnRotate {
  position: absolute;
  top: -1px;
  right: -1px;
  width: 12px;
  height: 12px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  background: rgba(0, 0, 0, 0.1);
  cursor: n-resize;
  z-index: 10;
  border-radius: 10px;
}
.btnRotate:hover {
  border-color: rgba(0, 0, 0, 0.5);
  background: rgba(0, 0, 0, 0.3);
}

.lCont > .btnSet {
  right: auto;
  left: 6px;
}
.btnSet {
  z-index: 1;
  position: absolute;
  right: 0px;
  top: 3px;
}
#layout2 > .btnSet {
  top: 23px;
}
.block .btnSet {
  /*
  background: rgba(0, 170, 238, 0.3);
  border-bottom-left-radius: 4px;
  padding: 0px 0px 3px 3px;
  bottom: -20px;
  */
  border-top-right-radius: 10px;
  background: #91DEFF;
  bottom: 0px;
  top: auto;
  right: auto;
}
#containerfooter .block .btnSet {
  top: -20px;
  bottom: auto;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
  padding: 3px 0px 0px 3px;
}
.block {
  border: 1px solid rgba(255, 255, 255, 0.2);
}
.block:hover {
  border-color: rgba(255, 255, 255, 0.5);
}
.dragBox {
  width: 15px;
  height: 15px;
  border-radius: 4px;
  margin: 0px 3px 0px 0px;
}
.btn.dragBox2 {
  float: left;
  width: 17px;
  height: 17px;
  bottom: -2px;
  z-index: 2;
  margin-left: 2px;
  margin-right: 3px;
  position: relative;
}

/* ------------ конец контролов блоков -------------- */

.preview .btnSet,
.preview .control {
  display: none;
}
.btnSet a.smIcons.bordered {
  margin-right: 0px;
  padding: 3px;
  border: 0px;
  border-radius: 12px;
}
.btnSet a.smIcons.bordered:hover {
  background: #FFEB87 !important;
}
.btnSet a.smIcons.bordered:active {
  background: #E8CF4F;
  box-shadow: inset 0 1px 2px rgba(121, 120, 112, 0.5);
}
.preview .block {
  background: none;
  border-color: rgba(0, 0, 0, 0);
}
.preview#layout .container, .preview .lCont {
  border-color: rgba(0, 0, 0, 0);
}
.ctrlTitle {
  float: left;
  font-size: 10px;
  padding: 2px 5px 0px 0px;
  background: #F05030;
  color: #000;
  display: inline-block;
  border-radius: 2px;
  padding: 1px 3px;
  margin-top: 2px;
  margin-right: 9px;
}

.loginForm {
  margin-top: 30px;
  margin-left: 30%;
  margin-right: 30%;
  padding-top: 50px;
  padding-left: 230px;
  height: 220px;
  background: url(http://sitedraw.ru/m/img/logo.png) no-repeat;
}

/* ------------------------ диалоги ------------ */
.settingsDialog select {
  max-width: 115px;
}
.compactFields .element {
  float: left;
  max-width: 160px;
}
.compactFields input[type=text], .compactFields select {
  max-width: 150px;
}
.compactFields .label {
  white-space: nowrap;
}

/* ------------------------ контрол dialogSelect ------------ */

.element.dialogSelectEl {
  clear: both;
}
.element.type_fontFamilyCufon .dialogSelect {
  width: 320px;
}
.dialogSelect {
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
  border: 1px solid #E9E8DB;
  margin-bottom: 1px;
  border-radius: 5px;
  white-space: nowrap;
  padding: 3px;
  cursor: pointer;
  -webkit-user-select: none;
}
.dialogSelect:hover {
  border-color: #CCCAB3;
}
.rightFading {
  background: url(/i/img/black/right-fading.png) repeat-y;
  position: absolute;
  top: 0px;
  right: 0px;
  width: 49px;
  height: 100%;
  z-index: 1;
}

.element.type_svgSelect .dialogSelect {
  width: 100px;
  height: 100px;
}
.element.type_svgSelect .dialogSelect svg {
  margin: 10px;
  width: 70px;
  height: 70px;
}

.block.type_blog .btnResize {
  cursor: e-resize;
}

/* ------------------------ диалог выбра шрифта и svg ------------ */

.selectDialog .dialog-message {
  padding-top: 10px;
}
.selectDialog .selectItems .item {
  float: left;
  border: 1px solid #E9E8DB;
  padding: 5px 8px 0px 8px;
  margin: 0px 0px 10px 10px;
  cursor: pointer;
  overflow: hidden;
  box-sizing: border-box;
  -webkit-user-select: none;
}
.selectDialog .selectItems .item.selected, .selectItems .item:active {
  border-color: #A8A68D;
  background-color: #FFFCCF;
}
.selectDialog .selectItems .item:hover {
  border-color: #CCCAB3;
}
/* ------------------------ диалог выбра шрифта ------------ */
#fontSelect_dialog .selectItems .item {
  width: 170px;
  height: 90px;
}
.type_fontFamilyCufon .font {
  font-size: 30px;
}
#fontSelect_dialog .selectItems .item .font {
  font-size: 32px;
}
/* ------------------------ диалог выбра svg ------------ */
.selectDialog .selectItems svg {
  margin: 5px;
  width: 50px;
  height: 50px;
}
.selectDialog .selectItems .tit {
  text-align: center;
  margin: 5px 0px 5px 0px;
  font-size: 10px;
  width: 60px;
  text-align: center;
  white-space: nowrap;
}

/* -- меняем тень -- */
.dialog-shade {
  opacity: 0;
}

#orderBar {
  display: none;
  position: absolute;
  top: 0px;
  right: 0px;
  width: 150px;
  height: 90%;
  background: #fff;
  z-index: 100;
  border: 1px solid #F00;
}
#orderBar .item {
  padding: 3px 10px;
  border-bottom: 1px solid #ccc;
}
#orderBar .item:hover {
  color: #f00;
}

.openBtnsGroupBar {
  border: 1px solid #f00;
  width: 4px;
  height: 10px;
}
/*===============================================*/

  #layout1 {
    margin-top: 100px;

  }
  .contentOverlay {
    position: absolute;
    z-index: 200;
    background: #555;
    width: 2000px;
    height: 2000px;
    opacity: 0.7;
    pointer-events: none;
  }
  .preview .contentOverlay {
    background: #fff;
    opacity: 1;
  }
  .preview #layers, .preview #panel {
    visibility: hidden;
  }
  .contentOverlayBorder {
    position: absolute;
    z-index: 200;
    border: 1px solid #555;
    box-sizing: border-box;
    width: 100%;
    pointer-events: none;
  }
  .preview .contentOverlayBorder {
    border: none;
  }
  .contentOverlayLeft {
    left: -2000px;
  }
  .contentOverlayTop {
    left: -1000px;
    top: -2000px;
  }
  .contentOverlayBottom {
    left: 0;
  }
  .contentOverlayRight {
    top: 0;
  }

  /* ---------------- панель управления порядком блоков --------------- */
  #globalLoader {
    z-index: 2100;
  }
  #layers {
    position: absolute;
    top: 70px;
    left: 0;
    z-index: 2000;
  }
  #layers .item {
    position: relative;
  }
  #layers .btns {
    position: absolute;
    top: 0;
    right: 0;
    height: 30px;
    padding-left: 15px;
    width: 70px;
  }
  #layers .btns .smIcons {
    margin-top: 7px;
  }
  #layers .btns .smIcons.dummy {
    width: 16px;
    height: 16px;
    margin-right: 4px;
  }
  #layers .cont {
    position: fixed;
    padding: 10px 0;
    width: 200px;
    background: #AEAA9F url(/sd/img/panelBg.png) repeat-y top left;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-bottom-left-radius: 7px;
  }
  #layers .title {
    float: left;
    color: #fff;

    padding-left: 15px;
    text-align: left;
    border-bottom: 1px solid #444;
    cursor: pointer;
  }
  #layers .title:hover {
    text-decoration: underline;
  }
  #layers .title:active,
  #layers .title.drag {
    cursor: url(http://www.google.com/intl/en_ALL/mapfiles/closedhand.cur) 4 4, move;
    text-decoration: underline;
    color: #00A6CF;
    border-bottom-color: #00A6CF;
  }
  #layers .title img {
    max-height: 20px;
    max-width: 20px;
    margin: 0;
  }
  #layers .title .ico {
    margin-right: 10px;
    display: inline-block;
    width: 20px;
    height: 20px;
    vertical-align: middle;
    text-align: center;
  }
  /* -- */
  body {
    height: 100%;
  }
  .body {
    overflow: hidden;
    height: 100%;
  }

  /* -- background, button -- dialogs */
  #background_message,
  #button_message {
    padding: 10px;
  }
  #background_message img,
  #button_message img{
    cursor: pointer;
    display: block;
    float: left;
    margin: 0 1px 2px 0;
    padding: 2px;
    border: 1px solid #fff;
  }
  #background_message img:hover,
  #button_message img:hover {
    border: 1px solid #ccc;
  }
  #background_message img.selected,
  #button_message img.selected{
    background: #bfdeff;
    border-color: #555;
  }

  #button_message img {
    max-width: 100px;
    max-height: 50px;
  }

  /*------loginForm--------*/
  .loginForm {
    padding: 50px;
  }

</style>
