<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Assignment 3: Uploader</title>
	<meta charset="UTF-8">
</head>
<body>
 <h2>Uploader</h2>

 <article id="uploader">
        <form enctype="multipart/form-data" action="preview.php" method="POST">
            Title:   <input type="text" name="title" id="uploader_title" /> <br/>
			Content: <input type="text" name="description" id="uploader_description" /><br/>
			
            <input type="submit" value="Submit" />
        </form>
		<div id="uploader_error">
        </div>
    </article>

	<script type="text/javascript" src="preview.js"></script>

</body>


</html>
