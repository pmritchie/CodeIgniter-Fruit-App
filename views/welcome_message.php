<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter Fruit App</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		display: grid;
		justify-content: center;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
		display: grid;
		justify-content: center;
	}

	#body {
		margin: 0 15px 0 15px;
		display: grid;
		justify-content: center;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		display: grid;
		justify-content: center;
        margin-top: 10rem;
	}
	.links {
		margin: .5rem;
	}
	.content{
		display: grid;
		justify-content: center;
			}
	span p{
		display: grid;
		justify-content: center;
	}
	.anchor{
		display: grid;
		justify-content: center;
	}
	span {
		border: 1px solid #D0D0D0;
		width: 100%;
	}

	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter Fruit App!</h1>
	<div id="body">
		<p>Here is a list of fruits, add, update and delete as you please</p>
		<p>If there are no fruits, click add first</p>
		<code>
			<?php
			   echo "<div class='content' >";
				foreach ($fruits as $value) {
					echo "<span>";
					echo "<p>$value->name </p> <br>";
					echo "<a class='links' href='/index.php/welcome/updateForm/".$value->id."'>Update</a>";
					echo "<a class='links' href='/index.php/welcome/delete/".$value->id."'>Delete</a>";
					echo "</span>";
					echo "<br>";
				}
				echo "</div>";
				echo "<br><br><a class='anchor' href='/index.php/welcome/addForm' >Add</a>";
			
			?>
		</code>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>