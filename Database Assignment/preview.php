<!DOCTYPE html>
<html>
<head>
    <title>Assignment 4: Preview Content</title>
</head>
<body>
    <h1>Assignment 4: Preview Content</h1>
           
    <?php
		
		$title = $_POST['title'];
		$content = $_POST['description'];
		if (!isset($_POST['title'])) {
            echo "<h2>Error: you must include a uploader title</h2>";
        } 
		if (!isset($_POST['description'])) {
            echo "<h2>Error: you must include a uploader Content</h2>";
        }
		require_once 'connection.php';
		$data = new TitleContent();
		$data->storeData($title, $content);
		$Id = $data->getId ($title, $content);
	
	
	class TitleContent
		{	
		private $addTitleContentStatement;
		private $dbConnection;
		private $getIdStatement; 

		public function storeData ($title, $content)
			{
				$this->addTitleContentStatement->bind_param("ss", $title, $content);
				$this->addTitleContentStatement->execute();
			}
			
		
		 public function getId ($title, $content)
			{
				$id = null;
				$this->getIdStatement->bind_param("ss",$title,$content);
				$this->getIdStatement->execute();
				$this->getIdStatement->bind_result($id);
				while($this->getIdStatement->fetch())
				{
				return $id;
				}
			}

		
		public function __construct ()
			{
				$this->dbConnection = new DatabaseConnection();
				$this->addTitleContentStatement = $this->dbConnection->prepare_statement("INSERT INTO `assignmenttable` (`Title`,`Content`) VALUES ( ?, ?)");
				$this->getIdStatement = $this->dbConnection->prepare_statement("SELECT Id FROM `assignmenttable` WHERE `Title` = ? AND `Content` = ? limit 1");
			}
		
		function __destruct ()
			{
				if ($this->getIdStatement) {
					$this->getIdStatement->close();
				}
				
				if ($this->addTitleContentStatement) {
					$this->addTitleContentStatement->close();
				}
	
			}
		}
 ?>

	<article id="preview"> 
        <form enctype="multipart/form-data" action="reader.php" method="GET">
            Title:   <input type="text" name="formatedtitle" value="<?php echo $title; ?>" /> <br/>
			Content: <input type="text" name="formatedcontent" value= "<?php echo $content; ?>" /><br/>
			<input type="hidden" name="Id" value= "<?php echo $Id; ?>" /><br/>
            <input type="submit" value="Update" />
        </form>
		<div id="update_error">
        
</div>
</article>
</body>
</html>