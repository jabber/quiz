<script src="<?php echo $this->config->base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo $this->config->base_url();?>assets/js/jquery.redirect.js"></script>
<div id = 'exam'>
	<form method = 'post' action = 'result'>
		<table id = 'exam_table'>

		</table>
		<input type = 'submit' value = 'Submit'>
	</form>
<div>

<script type="text/javascript">
	$(document).ready(function(){
		var listData = eval(<?php echo $list?>);
		for(i=0;i<listData.length;i++)
		{
			j=i+1;
			qid = listData[i]['qid'];
			correct_answer = listData[i]['correct_answer'];
			question = '<tr><td>'+j+'. '+listData[i]['question']+'</td></tr>';
			ans_a = '<tr><td> A:'+listData[i]['answer_A']+'</td></tr>';
			ans_b = '<tr><td> B:'+listData[i]['answer_B']+'</td></tr>';
			ans_c = '<tr><td> C:'+listData[i]['answer_C']+'</td></tr>';
			ans_d = '<tr><td> D:'+listData[i]['answer_D']+'</td></tr>';
			ans = "<tr><td><input type = 'radio' name = 'q"+j+"' value = 'A'>A <input type = 'radio' name = 'q"+j+"' value = 'B'>B <input type = 'radio' name = 'q"+j+"' value = 'C'>C <input type = 'radio' name = 'q"+j+"' value = 'D'>D </td></tr>";
			blank = '<tr><td>&nbsp;</td></tr>';
			hidden_ans = '<tr><td><input type = "hidden" name = "ans'+j+'" value = "'+correct_answer+'"</td></tr>';
			$('#exam_table').append(question+ans_a+ans_b+ans_c+ans_d+ans+blank+hidden_ans);
		}
	});
</script>