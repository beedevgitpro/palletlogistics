<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

body {
  display: inline-block;
  background: #00AFF9 url( https://saf.easfone.com/cms/sandeep/assets/images/Unplugged.png) center/cover no-repeat;
  height: 100vh;
  margin: 0;
  color: white;
}

h1 {
  margin: .8em 3rem;
  font: 4em Roboto;
}
p {
  display: inline-block;
  margin: .2em 3rem;
  font: 2em Roboto;
}
</style>
</head>
<body>
	<div id="container">
		<h1><?php echo "Whoops!"; //$heading; ?></h1>
		<?php echo "Something went wrong"; //$message; ?>
	</div>
</body>
</html>