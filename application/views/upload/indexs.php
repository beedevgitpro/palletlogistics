<html>
	<head>
		<title>Read pdf php</title>
	</head>
	<form method="post" action="<?php echo base_url('User/pdf2text');?>" enctype="multipart/form-data">
		<table align="center" border="1" bgcolor="#CCCCCC">
			<Tr>
				<td>Choose Your File</td>
				<td><input type="file" name="file"/></td>
			</Tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Read PDF" name="readpdf"/></td>
			</tr>
		</table>
	</form>
</html>


