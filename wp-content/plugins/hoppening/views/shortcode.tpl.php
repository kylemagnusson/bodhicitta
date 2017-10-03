<?php
$widget_id=uniqid();
?>
<div id="<?php echo $widget_id?>">
</div>
<script src="https://w.gigtime.co/sdk.min.js"></script>
<script type='text/javascript'>
	var conf_wheight = '<?php echo $height; ?>';
	var conf_wwidth = '<?php echo $width; ?>';
	var inverse_header = '<?php echo $inverse_header; ?>';
	var language = '<?php echo $language; ?>';
  var params={'headerDark': '<?php echo ($inverse_header == 'true') ? 'true' : 'false' ?>','bodyDark':'<?php echo ($inverse_body == 'true') ? 'true' : 'false' ?>','actionColor':'<?php echo $font_color; ?>','backColor':'<?php echo $bg_color; ?>','locale':'<?php echo $language; ?>', 'v': '2'}
  var widgets = Hoppening.widget.init('<?php echo $widget_id;?>','<?php echo $widget_type; ?>','<?php echo $user_id ?>','https://w.gigtime.co/#/');
	var default_view = '<?php echo ($default_view === "map") ? "map" : "list" ?>';
  widgets.show(default_view,(conf_wwidth === "") ? '100%' : conf_wwidth, conf_wheight,params);
	if (conf_wheight === "") {
		widgets.resize();
	}
</script>
