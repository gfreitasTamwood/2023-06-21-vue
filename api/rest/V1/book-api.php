<?php

require_once("../../../inc/config.inc.php");
require_once("../../../inc/Entities/Book.class.php");
require_once("../../../inc/Utilities/PDOAgent.class.php");
require_once("../../../inc/Utilities/BookDAO.class.php");
require_once("../../../inc/Utilities/BookConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET":
        BookDAO::startDb();
        echo json_encode(
            BookConverter::convertToStd(
                BookDAO::getAllBooks()
            )
        );
    break;
}
