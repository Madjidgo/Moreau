<?php



// // insert
function insertProjet($admin_id,$projet){
	$bdd1 = connectSql();
	$req1 = $bdd1->prepare('INSERT INTO Projets(admin_id,projet,dates) VALUES (:admin_id, :projet, NOW())');
	$req1 -> execute(array(
					'admin_id' => $admin_id,
					'projet' => $projet
	));

}


// affiche projet
  function getProjet(){
   	$bdd1 = connectSql();
    $req1 = $bdd1->query('SELECT * FROM Projets
                          INNER JOIN admin
                          ON Projets.admin_id = admin.id ')or die(print_r($bdd->errorInfo()));
		
				
					

                        $req2 = $req1 -> fetchAll();

                        return $req2;
                    }

 
// delete
