<?php
require_once('config.php');
class Team extends Database{
    private $id_team;
    private $name_team;
    private $fb_team;
    private $insta_team;
    private $sc_team;
    private $photo_team;
    private $mission_team;

    public function getId_team(){
		return $this->id_team;
	}
	public function setId_team($id_team){
		$this->id_team = $id_team;
	}

	public function getName_team(){
		return $this->name_team;
	}
	public function setName_team($name_team){
		$this->name_team = $name_team;
	}

	public function getFb_team(){
		return $this->fb_team;
	}
	public function setFb_team($fb_team){
		$this->fb_team = $fb_team;
	}

	public function getInsta_team(){
		return $this->insta_team;
	}
	public function setInsta_team($insta_team){
		$this->insta_team = $insta_team;
	}

	public function getSc_team(){
		return $this->sc_team;
	}
	public function setSc_team($sc_team){
		$this->sc_team = $sc_team;
	}

	public function getPhoto_team(){
		return $this->photo_team;
	}
	public function setPhoto_team($photo_membre){
		$this->photo_team = $photo__team;
	}

	public function getMission_team(){
		return $this->mission_team;
	}
	public function setMission_team($id_mission){
		$this->mission_team = $mission_team;
	}

    public function getFullTeam(){
        $query = 'SELECT
                    *
                FROM
                    team';       
        $req = $this->getDB()->prepare($query);
        $req-> execute();
        $data = $req->fetchAll();
        if(!empty($data)){
            return $data;
        }else{
            return null;
        }
    }
}