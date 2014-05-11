<?php
include("../includes/fmGlobals.php");
$id = htmlentities($_REQUEST["id"]);
$userid = htmlentities($_REQUEST["userid"]);
$unixtime = time();
$date = date('d-m-Y');
$localtime = date('G:H:s');
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

$stmt = $dbh->prepare("INSERT INTO fmDownloads (DocID, UserID, DLUnix, DLDate, DLTime)
                        VALUES (:DocID, :UserID, :DLUnix, :DLDate, :DLTime)");

$params = array(':DocID' => $id,
                ':UserID' => $userid,
                ':DLUnix' => $unixtime,
                ':DLDate' => $date,
                ':DLTime' => $localtime);
$stmt->execute($params);

$stmt2 = $dbh->prepare("SELECT DocFile FROM fmDocuments WHERE ID = :id");
$params2 = array(':DocID' => $id);
$stmt2->execute($params2);
$data = $stmt2->fetchAll();

$redirect = "Location: ../documents/" . trim($data['0']["DocFile"]);
header($redirect);
