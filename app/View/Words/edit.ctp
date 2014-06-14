<h1>Edit Post</h1>
<?php

	//REF set default value http://stackoverflow.com/questions/6272748/cakephp-setting-up-the-default-value-for-a-form-input-i-want-to-have-a-line answered Jun 7 '11 at 23:42

	echo $this->Form->create('Word');

	echo $this->Form->input('w1', 
						array(
								'onmouseover' => "this.select();",
								'class'			=> 'input_text',
								'style'			=> 'background: Aquamarine;',
// 								'default'		=> $word
						)
					);
	
	echo $this->Form->input('w2', 
						array(
								'onmouseover' => "this.select();",
								'rows'			=> '1',
// 								'width'			=> '100px'
								'style'			=> 'background: Khaki ;',
								//REF http://stackoverflow.com/questions/10321538/how-to-set-width-and-height-of-text-field-in-cakephp answered Apr 25 '12 at 19:11
								'class'			=> 'input_text'
						)
					);
	
	echo $this->Form->input('w3', 
						array(
								'onmouseover' => "this.select();",
								'rows'			=> '1',
// 								'width'			=> '100px'
// 								'style'			=> 'width: 400px;'
								//REF color name http://www.w3schools.com/html/html_colornames.asp
								'style'			=> 'background: Gainsboro ;',
								//REF http://stackoverflow.com/questions/10321538/how-to-set-width-and-height-of-text-field-in-cakephp answered Apr 25 '12 at 19:11
								'class'			=> 'input_text'
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

	echo $this->Form->end('Update Word');

// echo $this->Form->create('Word');
// echo $this->Form->input('title');
// echo $this->Form->input('body', array('rows' => '3'));
// echo $this->Form->input('id', array('type' => 'hidden'));
// echo $this->Form->end('Save Post');
?>