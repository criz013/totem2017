<?php

namespace Model;
use \W\Model\Model;

class EquipagesModel extends Model
{
    
    public function getTeamByChallengeID ($id)
    {
        return $this->search(array("challenge_id" => $id));
    }
    
}