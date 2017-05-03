<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php
class Comment
{
	protected $publication;
	protected $author;
	protected $content;
	protected $id;

	public function setId($id);

	public function getId()
	{
		return $this->id;
	}

	public function setPublication($publication);
	
	public function getPublication()
	{
		return $this->publication;
	}
	public function setAuthor($author);
	
	public function getAuthor()
	{
		return $this->author;
	}
	public function setContent($content);
	
	public function getContent()
	{
		return $this->content;
	}
}
?>