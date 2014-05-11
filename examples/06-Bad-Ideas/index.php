<?
include("../includes/fmGlobals.php");

OpenConnection($hostName,$userName,$password,$database);

$SQL = "INSERT INTO fmDownloads (DocID, UserID, DLUnix, DLDate, DLTime)
        VALUES (" . $_REQUEST["id"] . ",
                " . $_REQUEST["userid"] . ",
                " . time() . ",
                '" . WriteDate(StraightDate(localtime())) . "',
                '" . GetTime(localtime()) . "')";
DoQuery1($SQL);

$SQL = "SELECT DocFile FROM fmDocuments WHERE ID = " . $_REQUEST["id"];
$RS = mysql_fetch_array(DoQuery1($SQL));

$rd = "Location: ../documents/" . trim($RS["DocFile"]);

CloseAll();
header($rd);



