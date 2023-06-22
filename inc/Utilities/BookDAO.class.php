<?php

class BookDAO {
    private static $db;

    public static function startDb() {
        self::$db = new PDOAgent("Book");
    }

    public static function getAllBooks() {
        $sql = "SELECT * FROM book";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }
}