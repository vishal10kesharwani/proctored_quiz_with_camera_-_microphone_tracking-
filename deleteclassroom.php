<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 16-11-2016
 * Time: 14:46
 */
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("sql107.epizy.com", "epiz_30859803", "aSf8C7EAurB2rs", "epiz_30859803_ttms"),
    "DELETE FROM classrooms WHERE name = '$id' ");
if ($q) {

    header("Location:addclassrooms.php");

} else {
    echo 'Error';
}