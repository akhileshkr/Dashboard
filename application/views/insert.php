<!DOCTYPE html>
<html>
<title>BOT</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href ="<?php echo base_url().'bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/font-awesome.min.csss';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/animate.css';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/overwrite.cs';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/css/animate.min.css';?>" rel="stylesheet">	
	<link href ="<?php echo base_url().'bootstrap/css/style.css';?>" rel="stylesheet">	
	<link href ="<?php echo base_url().'bootstrap/js/jquery-2.1.1.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/bootstrap.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/parallax.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/wow.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/jquery.easing.min.js';?>" rel="stylesheet">
	<link href ="<?php echo base_url().'bootstrap/js/functions.js';?>" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-light-grey">

<!-- Top container -->

	<div class="row">
	<!-- <div class="col-sm-4"> -->
		 <?php $this->load->view('nav'); ?>
<!-- </div> -->

		 <?php echo form_open('seller_ctrl/insert1');
		?>
		<?php if(isset($message)) echo $message; ?>
<!-- <div class="col-sm-8"> -->
		<center>
			<br><br><br><br><br>
			<table border="1">

			<?php 
			foreach($data as $rw)
				{
					?>
				<tr>
					<td>id&nbsp;&nbsp;&nbsp;</td>
					<td>
						<input type="text" id="id" name="id" size=50 value="<?php echo $rw->id+1;?>"readonly>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td>innovation_area&nbsp;&nbsp;&nbsp;</td>
					<td>
						<textarea name="innovation_area" id="innovation_area" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td>asset_name&nbsp;&nbsp;&nbsp;</td>
					<td>
						<textarea name="asset_name" id="asset_name" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td>asset_summary&nbsp;&nbsp;&nbsp;</td>
					<td>
						<textarea name="asset_summary" id="asset_summary" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td>asset_poc&nbsp;&nbsp;&nbsp;</td>
					<td>
						<textarea name="asset_poc" id="asset_poc" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td>asset_type&nbsp;&nbsp;&nbsp;</td>
					<td>
						<textarea name="asset_type" id="asset_type" cols="50"></textarea>
					</td>
				</tr>
				<!-- <tr>
					<td><br><br></td><td></td>
				</tr> -->
				<tr>
					<td>asset_keywords&nbsp;&nbsp;&nbsp;</td>
					<td>
						<textarea name="asset_keywords" id="asset_keywords" cols="50"></textarea>
						</td>
				</tr>
				<tr>
					<td colspan="2">
						<center>	
							<input type="submit" name="insert" value="insert">
						</center>
					</td>

				</tr>
			<?php } ?>
			</table>
		</center>
<!-- </div> -->
<?php form_close(); ?>

</div>
</body>
</html>