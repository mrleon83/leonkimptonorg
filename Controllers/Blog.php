<?php
class Blog extends Controller
{

	public $id;
	public $blogpost;
	public $date;
	public $title;
	public $blogarray = array();

	public function getRecords()
	{
		$rows = $this->query2("SELECT * FROM blog ORDER BY id DESC");
		$rownum = 0;
		foreach($rows as $data)
		{
			$this->id = $data['id'];
			$this->blogpost = $data['blogpost'];
			$this->date = $data['date'];
			$this->title = $data['title'];
			$this->blogarray[$rownum] = (array('id'=>$this->id, 'blogpost'=>$this->blogpost, 'date'=>$this->date, 'title'=>$this->title));
			$rownum++;
		}
		return $this->blogarray;
	}
}
?>
