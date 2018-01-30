<?php
include("components/header.php");

$blog = new Blog;
$rows = $blog->getRecords();
$count = count($rows);

?>

<div class="container-fluid content">

<?

for($i = 0; $i < $count; $i++)
{
echo "<div class=\"row\">";
echo "<div class=\"col-md-12\">";
echo "<h3>";
echo $rows[$i]['title'] . " " . $rows[$i]['date'];
echo "</h3>";
echo "<p>";
echo $rows[$i]['blogpost']; 
echo "</p>";
echo "</div>";
echo "</div>";
}

?>

</div>

<?

include("components/footer.php");