<?php
include("../config/db.php");

echo json_encode([
    "status" => "success",
    "message" => "Backend connected successfully"
]);
