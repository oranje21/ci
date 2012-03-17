<?php
/**
 * 
 **/
class Blog extends CI_Controller
{
	public function index()
	{
		// クラスライブラリテスト
		$this->load->library('myclass');
		$this->myclass->my_function();

		//echo "Hello CodeIgniter";
		$data = array(
			'title' => "my blog",
			'date'  => "20120128"
		);
		$data['list'] = array("list1", "list2", "list3");

		// 表示
		$this->load->view("blogview", $data);
	}

	public function getdb()
	{
		// データベースから todo リストを取得して表示
		$this->load->model("blog_model");
		$data['title'] = "my todo";
		$data['list'] = $this->blog_model->get_last_ten_entries();
		$this->load->view("blogview", $data);

		// access: http://localhost:8888/www/ci/index.php/blog/getdb/
	}

	public function insertdb()
	{
		// INSERT処理
		$this->load->model("blog_model");
		return $this->blog_model->insert_entry();
	}

	public function comments()
	{
		echo "Look me!";
	}

	public function _remap($method)
	{
		$this->$method();
	}

	public function title()
	{
		echo "get Title";
	}

	public function _output($output)
	{
		echo $output;
	}
}
?>
