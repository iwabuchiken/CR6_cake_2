<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Word</h1>
<?php
echo $this->Form->create('Word');
//echo $this->Form->input('w1');
//REF http://stackoverflow.com/questions/815721/how-do-i-prevent-html-link-from-removing-the-single-quotes-when-adding-an-on answered May 10 '09 at 20:49
//REF referer http://stackoverflow.com/questions/13229011/how-do-i-implement-javascript-onmouseover-in-cakephp answered Nov 5 '12 at 9:17
//REF syntax http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html

echo $this->Form->input('w1', 
			array(
				'onmouseover' => "this.select();",
				'class'			=> 'input_text',
				'style'			=> 'background: Aquamarine;',
			)
			
			
		);

echo $this->Form->input('w2', 
			array(
				'onmouseover' => "this.select();",
				'class'			=> 'input_text',
				'style'			=> 'background: Khaki;',
			)
			
			
		);

echo $this->Form->input('w3', 
			array(
				'onmouseover' => "this.select();",
				'class'			=> 'input_text',
				'style'			=> 'background: Gainsboro;',
			)
			
			
		);

echo $this->Form->input(
		'lang_id',
		// 						'Lang id',
		array(
				'type' => 'select',
				'options' => $select_Langs
		)


);


echo $this->Form->end('Add word');
?>

<br>

<?php echo $this->Html->link(
    'Back to list',
    array('controller' => 'words', 'action' => 'index')
); ?>
