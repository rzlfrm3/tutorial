<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<script src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.min.js');?>"></script>
<script>
tinymce.init({
	selector: '#teksarea'
});
</script>
<body>
<h2> Integrasi Codeigniter dengan Tinymce</h2>
<form method="post">
<textarea id="teksarea"></textarea>
</form>
</body>
</html>