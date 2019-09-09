<!DOCTYPE html>
<html>
  <head>
    <title>Phazero Profiles</title>
    <meta charset="UTF-8">
   
  </head>
<body id="myPage">
<h1> Our PhazeRo team </h1>
<table style="width:100%; border-style:dotted;">
  <tr style=" border-style:dotted;">
    <th style=" width:20%; border-style:dotted;">Name</th>
    <th>Profile</th>
  </tr>

<?php 
$dir    = '.';
$files = scandir($dir); echo "<pre>";
foreach($files as $filename)
	if(preg_match("/\.html$/", $filename))
	{?>
		<tr style=" border-style:dotted;">
			<td style=" border-style:dotted;"><h2><?php echo preg_replace('/.[^.]*$/', '', $filename);?><h2></td>
			<td>
			<?php 
				$homepage = file_get_contents($filename);
				echo $homepage;
		    ?>
			</td>
		  </tr>
	<?php	
	}
?>
</table>
</body>
</html>
