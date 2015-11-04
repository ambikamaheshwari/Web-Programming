<!DOCTYPE html>
<html>
<head>
    <title>Assignment 4: Reader Content</title>
</head>
<body>
    <h1>Assignment 4: Reader Content</h1>
	<?php
		
		require_once 'connection.php';
		$formatedtitle = $_GET['formatedtitle'];
		$formatedcontent = $_GET['formatedcontent'];
		$id = $_GET['Id']; 
		if (!isset($_GET['formatedtitle'])) {
            echo "<h2>Error: you must include a  title</h2>";
        } 
		if (!isset($_GET['formatedcontent'])) {
            echo "<h2>Error: you must include a uploader Content</h2>";
        }
		if (!isset($_GET['Id'])) {
            echo "<h2>Error: No Session Id </h2>";
        }
		
		$data1 = new FormattedTitleContent();
		$data1->storeUpdatedData($formatedtitle, $formatedcontent,$id);	
		$count= $data1->getCount($id);
		if($count > 0)
		{
		$data2 = new FormattedTitleContent();	
		echo "<pre>";
		var_dump($data2->selectUpdatedData($id)); 
		echo "</pre>";
		}
		
		else
		{
			echo "<h2> No record found </h2>";	
		
		}
		
		class FormattedTitleContent
		{	
		private $updateTitleContentStatement;
		private $dbConnection;
		private $selectForTitleContentStatement;
		
			public function storeUpdatedData ($formatedtitle, $formatedcontent,$id)
			{
				$this->updateTitleContentStatement->bind_param("ssi",$formatedtitle, $formatedcontent,$id);
				$this->updateTitleContentStatement->execute();
				
			}
			
			public function selectUpdatedData ($id)
			{
				$ret = array ();
				$formatedcontent = null;
				$formatedtitle = null;
				$this->selectForTitleContentStatement->bind_param("i",$id);
				$this->selectForTitleContentStatement->execute();
				$this->selectForTitleContentStatement->bind_result($formatedtitle,$formatedcontent);
				while($this->selectForTitleContentStatement->fetch())
				{
					$newEntry = array ("FormatTitle" => $formatedtitle, "FormatContent" => $formatedcontent);
					array_push($ret, $newEntry);
				}
					
				return $ret;
				
			}
			
			public function getCount ($id)
			{
				$count = null;
				$this->selectCountStatement->bind_param("i",$id);
				$this->selectCountStatement->execute();
				$this->selectCountStatement->bind_result($count);
				while($this->selectCountStatement->fetch())
				{
				return $count;
				}
			}
				
			
			
		public function __construct ()
        {
		 $this->dbConnection = new DatabaseConnection();
         $this->updateTitleContentStatement = $this->dbConnection->prepare_statement("UPDATE `assignmenttable` SET `FormatTitle`=?, `FormatContent`= ? WHERE `Id` = ?");
		 $this->selectForTitleContentStatement = $this->dbConnection->prepare_statement("SELECT `FormatTitle`,`FormatContent` FROM `assignmenttable` WHERE `Id` = ?");
		 $this->selectCountStatement = $this->dbConnection->prepare_statement("SELECT count(*) FROM `assignmenttable` WHERE `Id` = ?");
		 
		}
		
		function __destruct ()
        {
			
			if ($this->updateTitleContentStatement) {
                $this->updateTitleContentStatement->close();
            }
			
			if ($this->selectForTitleContentStatement) {
                $this->selectForTitleContentStatement->close();
            }
			
			if ($this->selectCountStatement) {
                $this->selectCountStatement->close();
            }
		}
		
		}
	
	?>
		</body>
		</html>