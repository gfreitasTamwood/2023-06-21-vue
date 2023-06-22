<?php

class Book {
    private int $id;
    private string $title;
    private string $isbn;
    private string $author;
    private float $price;
    private int $edition;
    private string $avatar;

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle(string $title) {
		$this->title = $title;
	}

	public function getIsbn() {
		return $this->isbn;
	}

	public function setIsbn(string $isbn) {
		$this->isbn = $isbn;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function setAuthor(string $author) {
		$this->author = $author;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice(float $price) {
		$this->price = $price;
	}

	public function getEdition() {
		return $this->edition;
	}

	public function setEdition(int $edition) {
		$this->edition = $edition;
	}

	public function getAvatar() {
		return $this->avatar;
	}

	public function setAvatar(string $avatar) {
		$this->avatar = $avatar;
	}

}