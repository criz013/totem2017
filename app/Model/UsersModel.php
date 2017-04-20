<?php

namespace Model;

use \W\Model\Model;

class UsersModel extends Model
{
	public function sponsors(array $search, $operator = 'OR', $stripTags = true){

		// Sécurisation de l'opérateur
		$operator = strtoupper($operator);
		if($operator != 'OR' && $operator != 'AND'){
			die('Error: invalid operator param');
		}

        $sql = 'SELECT * FROM ' . $this->table.' as u join users_profil as up on u.id = up.id_users WHERE';
                
		foreach($search as $key => $value){
			$sql .= " `$key` LIKE :$key ";
			$sql .= $operator;
		}
		// Supprime les caractères superflus en fin de requète
		if($operator == 'OR') {
			$sql = substr($sql, 0, -3);
		}
		elseif($operator == 'AND') {
			$sql = substr($sql, 0, -4);
		}

		$sth = $this->dbh->prepare($sql);

		foreach($search as $key => $value){
			$value = ($stripTags) ? strip_tags($value) : $value;
			$sth->bindValue(':'.$key, '%'.$value.'%');
		}
		if(!$sth->execute()){
			return false;
		}
        return $sth->fetchAll();
	} 

	public function sponsorsTwitAsc(){

		$req = "SELECT * FROM ".$this->table." as u 
				join users_profil as up 
				on u.id = up.id_users 
				WHERE u.role ='sponsor' and u.statusr='valider' 
				ORDER BY up.cpt-twitter desc";

				$sth = $this->dbh->prepare($req);
		
		if(!$sth->execute()){
			return false;
		}
        return $sth->fetchAll();
	}
}
