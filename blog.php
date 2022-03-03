<?php
$title = "Cathy's Canine Complements: Blog";
include('includes/header.php');
$sql = "SELECT * FROM entries ORDER BY id DESC";
$result = mySQL_query($sql);
while($row = mysql_fetch_array($result)){
$date = $row['date'];
$title = $row['title'];
$contents = $row['contents'];
$date = strftime("%b %d, %y", strtotime($date));
echo '<p>' . $date . '</p>';
echo '<p><b>' . $title . '</b></p>';
echo '<p>' . $contents . '</p><br /><br />';
}
?>
<?php
include('includes/footer.php');
?>