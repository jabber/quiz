<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div class = 'frame'>
		<form id = 'user_info' action = 'edit_info' method = 'post' role = 'form'>
			<div class = 'form-group'>
				<input class = 'form-control' type = 'text' name = 'id' value = '<?php echo $id?>' style = 'display:none'>
			</div>
			<div class = 'form-group'>
				<label for = 'lastname'>Last Name</label>
				<input class = 'form-control' type = 'text' id = 'lastname' name = 'lastname' value = '<?php echo $lastname;?>'>
			</div>
			<div class = 'form-group'>
				<label for = 'firstname'>First Name</label>
				<input class = 'form-control' type = 'text' id = 'firstname' name = 'firstname' value = '<?php echo $firstname ?>'>
			</div>
			<div class = 'form-group'>
				<label for = 'email'>Email</label>
				<input class = 'form-control' type = 'text' id = 'email' name = 'email' value = '<?php echo $email ?>' >
			</div>
			<div class = 'form-group'>
				<label for = 'phone'>Phone</label>
				<input class = 'form-control' type = 'text' id = 'phone' name = 'phone' value = '<?php echo $phone ?>' >
			</div>
			<div class = 'form-group'>
				<label for = 'company'>Company</label>
				<input class = 'form-control' type = 'text' id = 'company' name = 'company' value = '<?php echo $company ?>' >
			</div>
			<div class = 'form-group'>
				<input type = 'submit' value = '提交' class = 'btn btn-primary'>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">

</script>

<style type="text/css">
label{
	width: 100%;
	font-size: 16px;
	font-family: Arial;
	font-weight: 500;
	padding: 5px;
}

.frame
{
	margin: 30px;
	border: 1px solid #c0c0c0;
	padding: 20px;
	background-color: #eeeeee;
}
</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>