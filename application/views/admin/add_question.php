<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<form role = 'form' id = 'question_form' action = 'add_question' method = 'post'>
		<div class = 'form-group'>
			<label for = 'question'>Question</label>
			<input type = 'text' id = 'question' name = 'question' class = 'form-control' placeholder = 'Enter Question'>
		</div>
		<div class = 'form-group'>
			<label for = 'answer_A'>answer_A</label>
			<input type = 'text' id = 'answer_A' name = 'answer_A'  class = 'form-control' placeholder = 'Enter Answer_A'>
		</div>
		<div class = 'form-group'>
			<label for = 'answer_A'>answer_B</label>
			<input type = 'text' id = 'answer_B' name = 'answer_B' class = 'form-control' placeholder = 'Enter Answer_B'>
		</div>
		<div class = 'form-group'>
			<label for = 'answer_A'>answer_C</label>
			<input type = 'text' id = 'answer_C' name = 'answer_C' class = 'form-control' placeholder = 'Enter Answer_C'>
		</div>
		<div class = 'form-group'>
			<label for = 'answer_A'>answer_D</label>
			<input type = 'text' id = 'answer_D' name = 'answer_D' class = 'form-control' placeholder = 'Enter Answer_D'>
		</div>
		<div>
			Correct Answer:
			<input type = 'radio' name = 'correct_answer' id = 'radio_a' value = 'A'>A
			<input type = 'radio' name = 'correct_answer' id = 'radio_b' value = 'B'>B
			<input type = 'radio' name = 'correct_answer' id = 'radio_c' value = 'C'>C
			<input type = 'radio' name = 'correct_answer' id = 'radio_d' value = 'D'>D
		</div>
		<div>
			<input type = 'submit' value = 'Submit' class = 'btn btn-default'>
			<input type = 'button' value = 'Clear' class = 'btn btn-default'>
		</div>
	</form>
</div>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>