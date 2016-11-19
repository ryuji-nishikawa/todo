<h1>サンプルアプリ12</h1>
<h2>問い合わせフォーム161120その1</h2>

<?php echo $this->Form->create('Contact',array(
	'type' => 'POST',
	'url' => 'edit',
	'encodint' => 'Shift_JIS',
)); ?>
<?php
echo $this->Form->file('name');
?>
<?php echo $this->Form->end(array(
	'label' => '確認',
	'name' => 'confirm',
	'div' => array(
		'class' => 'formConfirm'
	)
)); ?>







