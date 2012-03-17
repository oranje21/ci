<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Blogview</title>
</head>
<body>
<h1 id="heading"><?php echo $title; ?></h1>
<ul>
<?php foreach ($list as $li): ?>
<li><?php echo $li; ?></li>
<?php endforeach; ?>
</ul>

<h1>form helper</h1>
<?php $this->load->helper("url"); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/todo.js"></script>

<h1>Video of HTML5</h1>
<video src="<?php echo base_url(); ?>images/Riko_20110501_birth.mov" id="movie" width="640" height="390" controls>
riko movie
</video>

</body>
</html>
