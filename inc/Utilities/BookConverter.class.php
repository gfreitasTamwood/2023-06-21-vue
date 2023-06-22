<?php

class BookConverter {

    public static function convertToStd( $book ) {
        if ( is_array($book) ) {
            $bookList = [];
            foreach( $book as $item) {
                $stdObj = new stdClass;
                $stdObj->id = $item->getId();
                $stdObj->title = $item->getTitle();
                $stdObj->isbn = $item->getIsbn();
                $stdObj->author = $item->getAuthor();
                $stdObj->price = $item->getPrice();
                $stdObj->edition = $item->getEdition();
                $stdObj->avatar = $item->getAvatar();
                $bookList[] = $stdObj;
            }
            return $bookList;
        } else {
            $stdObj = new stdClass;
            $stdObj->id = $book->getId();
            $stdObj->title = $book->getTitle();
            $stdObj->isbn = $book->getIsbn();
            $stdObj->author = $book->getAuthor();
            $stdObj->price = $book->getPrice();
            $stdObj->edition = $book->getEdition();
            $stdObj->avatar = $book->getAvatar();
            
            return $stdObj;
        }
    }
}