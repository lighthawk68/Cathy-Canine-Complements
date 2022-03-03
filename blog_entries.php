<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title>Blog Entries Page</title>
<link rel="stylesheet" type="text/css" href="css/psstyle.css" />
</head>
<?php
include('includes/mysql_connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$sql = "INSERT INTO entries (`id`, `date`, `title`, `contents`) VALUES ( NULL, CURRENT_DATE(), '$_POST[title]', '$_POST[content]')";
mysql_query($sql) or die(mysql_error());
}
?>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="blog">
<label>Title &nbsp &nbsp &nbsp </label><input type="text" size="50" name="title" /><br />
<label>Content</label><textarea cols="39" rows="9" name="content" /></textarea><br />
<input type="submit" value="Add Post" />
</form>
</body>
</html>