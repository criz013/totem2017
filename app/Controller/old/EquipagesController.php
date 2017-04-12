<?php

namespace Controller;

use \W\Controller\Controller;

class EquipagesController extends Controller
{
    protected $db;
    protected $challenge_id;
    protected $fb;
    
    public function __construct ()
    {
        $this->db = new \Model\EquipagesModel;
        $this->challenge_id = 2;
        $this->fb = new \Controller\FacebookController;
        $this->fb->accessToken = $_SESSION['fb_access_token'];
    }
    
    public function section ()
    {
        $this->show('onepage/section-equipages');
    }
    
    public function getResults ()
    {
        $team_list = $this->orderByLikes($this->db->getTeamByChallengeID($challenge_id)); // Change to company w/ team
        print_r(json_encode($team_list));
    }
    
    public function add ()
    {
        $equipage = $_POST;
        $equipage['team_challenge'] = "2016";
        
        $res = $this->db->insert($equipage);
        if ($res > 0)
        {
            $this->redirectToRoute('default_home');
        } else {
            echo "Sorry but an error occurred adding new team... Please verify your data and try again!";
        }
    }
    
    private function orderByLikes ($list)
    {
        foreach($list as $key => $team)
        {
            $list[$key]["team_likes"] += $this->getLikes($team['team_tag']);
        }
        
        /* Trier un tableau multidimensionnel en réaffectant les clés => http://www.php.net/manual/fr/function.uasort.php */
        usort($list, function($a, $b) {
            if ($a["team_likes"] == $b["team_likes"]) {
                return 0;
            }
            return ($a["team_likes"] > $b["team_likes"]) ? -1 : 1;
        });
        
        return $list;
    }
    
    /* 
    * GET ALL LIKES BY TEAM NAME 
    * String team_tag
    * Return (int) total likes
    */
    private function getLikes($teamName)
    {
        $team_likes = 0; // Reset team likes
        $photos = $this->fb->getAlbumsPictures($this->fb->albumID); // Return an array of pictures by AlbumID
        
        /*
        * Search into every pictures content of the albumID
        */
        foreach($photos as $photo)
        {
            $pictureID = $photo["id"]; // Save PhotoID to get tags and likes
            $pictureTags = $this->fb->getPhotoDetails($pictureID); // Return hashtags of the photo by PhotoID
             
            /*
            * ONLY IF PHOTO GET CURRENT CHALLENGE HASHTAG
            */
            if (in_array($this->fb->challengeTag, $pictureTags))
            {
                
                foreach($pictureTags as $tag) // Search for the team hashtag
                {
                    if(strtolower($tag) === strtolower($teamName)) // If team hashtag found
                    {
                        $team_likes += count($this->fb->getPhotoLikes($pictureID)); // Add the photo likes
                    }
                }
            }
        }
        return $team_likes;
    }
    
}