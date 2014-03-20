<div>
	<form id = 'question_form' action = 'update_question' method = 'post'>
		<div>
			Qid:<input type = 'text' id = 'qid' name = 'qid' value = '<?php echo $qid; ?>' readonly = 'readonly'>
		</div>
		<div>
			Question&nbsp;:&nbsp;<input type = 'text' id = 'question' name = 'question' value = '<?php echo $question;?>'>
		</div>
		<div>
			Answer A:<input type = 'text' id = 'answer_A' name = 'answer_A' value = '<?php echo $answer_A ?>'>
		</div>
		<div>
			Answer B:<input type = 'text' id = 'answer_B' name = 'answer_B' value = '<?php echo $answer_B ?>' >
		</div>
		<div>
			Answer C:<input type = 'text' id = 'answer_C' name = 'answer_C' value = '<?php echo $answer_C ?>' >
		</div>
		<div>
			Answer D:<input type = 'text' id = 'answer_D' name = 'answer_D' value = '<?php echo $answer_D ?>' >
		</div>
		<div>
			Correct Answer:
			<input type = 'radio' name = 'correct_answer' id = 'radio_a' value = 'A'>A
			<input type = 'radio' name = 'correct_answer' id = 'radio_b' value = 'B'>B
			<input type = 'radio' name = 'correct_answer' id = 'radio_c' value = 'C'>C
			<input type = 'radio' name = 'correct_answer' id = 'radio_d' value = 'D'>D
		</div>
		<div>
			<input type = 'submit' value = 'Submit'>
			<input type = 'button' value = 'Clear'>
		</div>
	</form>
</div>