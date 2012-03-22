<?php
if(is_fan() == true){?>
	<div class="page_image_fan">
		<img src="<?=$config['fan_image']['value']?>">
	</div>
	<div class="custom_content_fan">
		<?=$config['page_custom_fan']['value']?>
	</div>

<?}else {?>
	<div class="page_image_nonfan">
		<img src="<?=$config['nonfan_image']['value']?>" alt="nonfan" >
	</div>
	<div class="custom_content_nonfan">
		<?=$config['page_custom_nonfan']['value']?>
	</div>
<?}?>

