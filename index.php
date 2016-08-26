<?php  

/*TRi bulle php*/
$tri_bulle = array(10,25,23,65,89,65,9,89,98,4);
				  					
					


/*sort($tri_bulle); // ici la fonction sort() tri notre tableau*/


	for($key = 0 ; $key<10 ; $key++){
 		for($j = 0 ; $j < 9; $j++){ 
	 		if($tri_bulle[$j]>$tri_bulle[$j+1]){
	 			$temp = $tri_bulle[$j+1];
	 			$tri_bulle[$j+1] = $tri_bulle[$j];
	 			$tri_bulle[$j] = $temp;


 	 
 	 			//echo $value ; // et on laffiche;
 			}
 		
 		}
 	
 	}
 	print_r($tri_bulle);



?>



<!--<?php 
/*tri par insertion

$tri_insert = array(12,15,65,5,61,54,8,3,5,45);




foreach ($tri_bulle as $key => $value){  ici on parcour notre tableau apres tri
 	/*for($key=0;$key<10;$key++)
 	echo $value ; // et on laffiche
 		
 	}	


?>*/