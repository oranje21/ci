<?php

class Blog_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Model クラスのコンストラクタを呼び出す
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
		$this->load->database();
		$sql = "SELECT * FROM tz_todo;";
		$query = $this->db->query($sql);


		$array = array();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				array_push($array, $row->text);
			}
			return $array;
		}
        return $array; 
    }

    function insert_entry()
    {
        //$this->title   = $_POST['title']; // 下の Note を参照してください
        //$this->content = $_POST['content'];
        //$this->date    = time();
        //$this->db->insert('entries', $this);

		$this->load->database();
		$sql = "INSERT INTO tz_todo (`position`, `text`) VALUES (8, 'insert code test');";
		$this->db->query($sql);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}

?>
