<!-- File: /app/View/Posts/index.ctp -->

<!-- REF bottom http://stackoverflow.com/questions/1384823/how-to-specify-the-bottom-border-of-a-tr -->
<style type="text/css">
    tr.bb, td.bb {
/*     .bb td, .bb th { */
     border-bottom: 3px solid blue !important;
/*      border-bottom: 1px solid black !important; */
    }
</style>

<!-- REF id http://stackoverflow.com/questions/484719/html-anchors-with-name-or-id -->
<a id="top"></a>
<a href="#bottom">Bottom</a>
<br>
<br>

<?php //debug($word); ?>

<a id="bottom"></a>
<a href="#top">Top</a>

<table>
  <tr>
  	<td class="words_view_table_label">ID</td>
    <td class="words_view_table_values"><?php echo $word['Word']['id']?></td>
    
  </tr>
  
  <tr>
  	<td class="words_view_table_label">w1</td>
    <td class="words_view_table_values"><?php echo $word['Word']['w1']?></td>
    
  </tr>
  
  <tr>
  	<td class="words_view_table_label">w2</td>
    <td class="words_view_table_values"><?php echo $word['Word']['w2']?></td>
    
  </tr>
  
  <tr>
  	<td class="words_view_table_label">w3</td>
    <td class="words_view_table_values"><?php echo $word['Word']['w3']?></td>
    
  </tr>
  
</table>



<br><br>

	<?php echo $this->element('words/index_links')?>
	
	<br>
	<br>
	
	<?php echo $this->element('texts/index_links_to_models')?>