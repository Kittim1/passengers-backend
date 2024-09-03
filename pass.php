<?php
include "connection.php";
include "headers.php";

$sql = "SELECT pas_name, dest_name, gender_name, pas_price
                FROM tblpassengers
                INNER JOIN tblgender ON tblpassengers.pas_genderId = tblgender.gender_id
                INNER JOIN tbldestination ON tblpassengers.pas_destinationId = tbldestination.dest_id";
$stmt = $conn->prepare($sql);
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));