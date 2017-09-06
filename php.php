<?php
$variable ="string";
$alumnos =['cristobal'=>5.2, 
            'diego'=>5.5,
            'felipe' =>6.5];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <TITLE>document</TITLE>
	
</head>
<body>
      <h1> <?php echo $variable; ?></h1>
      <?php
      for($i=0;$i < 5;$i++){
      	echo"<h1>".$variable."</h1>";
      }
    ?>
    <table style="border: solid 1px #000;">
    	<tr>
    		<td>alumno
    		</td>
            <td>nota</td>

    	</tr>
        <?php foreach ($alumnos as $key => $value) :?>
        <tr>
        	<td> <?php echo $key; ?></td>
        	<td> <?php echo $value; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>