<h1>サンプルアプリ12</h1>

<<<<<<< HEAD

<h2>問い合わせフォーム161120のブランチテスト後これは3回目</h2>

=======

<h2>問い合わせフォーム161120のブランチテストこれは3回目</h2>

>>>>>>> master



<?php echo $this->Form->create('Contact',array(

	'type' => 'POST',

	'url' => 'edit',

	'encodint' => 'Shift_JIS',

)); ?>

<?php

echo $this->Form->file('name');

?>

<?php echo $this->Form->end(array(

	'label' => 'ブランチ2を作った、そしてさらにブランチ2のみ変更した',
<<<<<<< HEAD
	'name' => 'これがやり直した部分',
	'order' => 'これがやり直した部分2',
	'recursive' => 0',
=======

	'name' => 'confirm',

>>>>>>> master
	'div' => array(

		'class' => 'formConfirm'

	)

)); ?>







