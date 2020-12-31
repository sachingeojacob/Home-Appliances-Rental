<?php

include_once '../dbcon.php';
$action = $_POST['context'];
if ($action == 'category') {
get_category();
}
elseif($action == 'subcategory')
{
get_sub_category();
}


function get_category() {
    
$index = $_POST['index'];
$q = mysqli_query($con, "SELECT category_id,category_name FROM category where category_id='" . $index . "' and status=1");
//var_dump($q);
$str = "";
while ($row = mysqli_fetch_array($q)) {
$str .= $row['category_id'] . ":" . $row['category_name'] . ",";
}
echo rtrim($str, ",");
die();
}

function get_sub_category() {
    
$index = $_POST['index'];
$q = mysqli_query($con, "SELECT category_id,category_name FROM category where category_id='" . $index . "' and status=1");
//var_dump($q);
$str = "";
while ($row = mysqli_fetch_array($q)) {
$str .= $row['category_id'] . ":" . $row['category_name'] . ",";
}
echo rtrim($str, ",");
}
