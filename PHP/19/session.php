<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
echo "ID visitatore: " . $_SESSION['id_visitatore'];