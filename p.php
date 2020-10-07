<?php 
			 //$a = array( 'a', 'b', 'c', 0 => 'd', 1 => 'e', 'f' ); echo count($a);
			 //$email = "sergio.lujan@ua.es"; echo filter_var($email, FILTER_VALIDATE_EMAIL);
			 //$a = array("A", "B", 1 => "C", "D", 2 => "E"); echo count($a);
			  //$a = 1; ++$a; $a *= $a; echo $a--;
			  //echo $_SERVER['REMOTE_ADDR']
			  $a = array(1, 2, 3); foreach($a as $x) {$x *= 2;} echo $a[0] * $a[1] * $a[2];
			  if(null === false) {echo 'verdadero';} else {echo 'falso';}
			  class MyException extends Exception {}
try {
throw new MyException('Oops!');
} catch (Exception $e) {
echo "Caught Exception";
} catch (MyException $e) {
echo "Caught MyException";
} 
?>	