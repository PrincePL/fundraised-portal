<?php
header('Content-Type: application/json');

$data = [
  "name" => "Prince Raj",
  "referralCode" => "princeraj2025",
  "donationAmount" => 7500
];

echo json_encode($data);
