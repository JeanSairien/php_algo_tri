<?php  /*


$tri_bulle = array(10,25,23,65,89,65,9,89,98,4);
				  					
					


/*sort($tri_bulle); // ici la fonction sort() tri notre tableau


	for($key = 0 ; $key<10 ; $key++){ //on incremente pour parcourir le tableau 
 		for($j = 0 ; $j < 9; $j++){  //ici on incremente pour analyser notre tableau
	 		if($tri_bulle[$j]>$tri_bulle[$j+1]){ // la notre condition traite l'ordre 
	 			$temp = $tri_bulle[$j+1];
	 			$tri_bulle[$j+1] = $tri_bulle[$j];
	 			$tri_bulle[$j] = $temp; // puis on stocke nos valeur a deplacer dans une variable temporaire pour mettre en ordre


 	 
 			}
 		
 	 			//echo $value ; 
 	
 		}
 	}
 	print_r($tri_bulle);*/    // et on affiche;



?>



<?php 
/*tri par insertion*/

$tri_insert = array(10,25,23,65,89);

$i=3;

/*for($i = 0 ; $i<10 ; $i++){ // ici on parcour notre tableau*/
	while($tri_insert[$i] > $tri_insert[$i+1]){
		
				$temp = $tri_insert[$i+1];
	 			$tri_insert[$i+1] = $tri_insert[$i];
	 			$tri_insert[$i] = $temp;
 	 
 	 print_r($tri_insert); // et on laffiche
	
	}	
 	
	
 		
 	 

?>