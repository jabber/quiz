
<script src="<?php echo $this->config->base_url();?>assets/js/jquery.min.js"></script>
<div id = 'question_list'>
	<table id = 'q_table'>

	</table>
<div>

	<script type="text/javascript">
		$(document).ready(function(){
			var listData = eval(<?php echo $list?>);
			for(i=0;i<listData.length;i++)
			{
				question = '<tr><td>'+listData[i]['question']+'</td></tr>';
				ans_a = '<tr><td>'+listData[i]['answer_A']+'</td></tr>';
				ans_b = '<tr><td>'+listData[i]['answer_B']+'</td></tr>';
				ans_c = '<tr><td>'+listData[i]['answer_C']+'</td></tr>';
				ans_d = '<tr><td>'+listData[i]['answer_D']+'</td></tr>';
				corr_ans = '<tr><td>'+listData[i]['correct_answer']+'</td></tr><tr><td>'+'<input type = "button" value = "delete"><input type ="button" value = "edit"></td></tr>';
				blank = '<tr><td>&nbsp;</td></tr>';
				$('#q_table').append(question+ans_a+ans_b+ans_c+ans_d+corr_ans+blank);
			}
		});
	</script>
