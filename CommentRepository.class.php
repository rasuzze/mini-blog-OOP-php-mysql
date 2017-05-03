<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php
	class CommentRepository extends Repository
	{
		protected $publication;
		public function getByPublication($publication);
		
	}
?>