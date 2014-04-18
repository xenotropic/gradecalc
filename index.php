<html><head>
<title>Grade Calculator</title>


</head>


<h3>Grade Calculator</h3>

   
<?
   /* if ( ! (is_null ($_GET['denominator'] ||  is_numeric ($_GET['denominator']) ))) {
	echo "Need to enter an integer, you have " . $_GET['denominator'];
	exit();
      }
   */
?>
   
<form method=get action="./index.php">
   Number of points:<input type=text name='denominator' value='<? echo $_GET['denominator']; ?>'>
</form>

<?

   
      $denominator = $_GET['denominator'];
if ( $denominator == '' ) { echo "</body></html>"; exit(); }
      $count_max = $denominator * 4;
      echo "<table border=1 cellpadding=3><tr><td><b>Minus</td><td><b>Grade</td><td><b>Pct</td></tr>";
      for ($i = 0; $i <= $count_max; $i++ ) {
	if ($i != 0 ) $minus = $i/4; else $minus=0;
	$grade = ($denominator - $minus);
	$percent = round (($grade / $count_max * 400), 0);
	echo "<tr><td>-$minus</td><td>$grade</td><td>$percent"."%"."</td></tr>";

      
    }
?>
</tr>
</table>


</body>
</html>