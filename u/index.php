<?php

require "../config.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM urls WHERE id = '$id'";
    $smt = $dba->prepare($sql);
    $smt->execute();
    $row = $smt->fetch(PDO::FETCH_OBJ);
    $clicks = $row->clicks + 1;
    if($smt) {
        $update = "UPDATE urls SET clicks = :clicks WHERE id = $id";
        $smt = $dba->prepare($update);
        $smt->bindParam('clicks', $clicks);
        $smt->execute();
        header("location: ".$row->url."");
    }
}