

<div id="panel"></div>
<div id="layers"></div>
<div id="layout" class="layout">
  <div id="layout1" class="layout sdEl">
  </div>
</div>
<div id="orderBar"></div>

<script>
  <?= $d['adminJs'] ?>
  Ngn.sd.init(<?= $d['bannerId'] ?>);
  Ngn.toObj('Ngn.sd.baseUrl', 'http://<?= SITE_DOMAIN ?>');
</script>
