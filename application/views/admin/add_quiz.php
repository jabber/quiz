<script src="<?php echo $this->config->base_url();?>assets/js/jquery.min.js"></script>
<div>
	<form method = 'post' action = 'add_quiz'>
	<div>
		Please input the qid of question 1:<input type = 'text' name = 'q1'>
	</div>
	<div>
		Please input the qid of question 2:<input type = 'text' name = 'q2'>
	</div>
	<div>
		Please input the qid of question 3:<input type = 'text' name = 'q3'>
	</div>
	<div>
		Please input the qid of question 4:<input type = 'text' name = 'q4'>
	</div>
	<div>
		Please input the qid of question 5:<input type = 'text' name = 'q5'>
	</div>
	<div>
		Please input the qid of question 6:<input type = 'text' name = 'q6'>
	</div>
	<div>
		Please input the qid of question 7:<input type = 'text' name = 'q7'>
	</div>
	<div>
		Please input the qid of question 8:<input type = 'text' name = 'q8'>
	</div>
	<div>
		Please input the qid of question 9:<input type = 'text' name = 'q9'>
	</div>
	<div>
		Please input the qid of question 10:<input type = 'text' name = 'q10'>
	</div>
		<input type = 'submit' value = 'Submit'>
	</form>
	<input type = 'button' value = 'Create Random Quiz' id = 'rndQuiz'>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#rndQuiz').click(function(){
			$.post('add_random_quiz');
		});
	});
</script>