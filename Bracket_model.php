<?php  

class Bracket_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	//Insert a new bracket into the database
	public function instertIntoBrackets()
	{
		$data = array(
			'bracketName'=>'test'
			
		);
		$this->db->insert('brackets',$data);
	}
	
	//Get all brackets for Leaderboard
	public function getBrackets()
	{
		$query = $this->db->get('brackets');
		return $query;
	}
	
	//used to update pointsEarned
	public function updateBracket($data, $id)
	{
		$data = array(
			'pointsEarned'=> $points
		);
		
		$this->db->where('id', $id);
		$this->db->update('brackets', $data);
	}
}

?>