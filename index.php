<?php

class Book {

    public $title;
    public $subtitle;
    public $author;
    public $firstEdition;
    public $cover;
    public $preview;
    public $pages;
    public $price;

    function __construct($title, $subtitle = "", $author, $firstEdition, $cover, $preview, $pages, $price) {

        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->author = $author;
        $this->firstEdition = $firstEdition;
        $this->cover = $cover;
        $this->preview = $preview;
        $this->pages = $pages;
        $this->price = $price;

    }

}

$book1 = new Book("1984", "",  "George Orwell", 1949, "https://images-na.ssl-images-amazon.com/images/I/91SZSW8qSsL.jpg", "Chi controlla il passato controlla il futuro. Chi controlla il presente controlla il passato.", 432,  7.5);

$book2 = new Book("Sapiens", "Da animali a dei", "Yuval Noah Harari", 2011, "https://images-na.ssl-images-amazon.com/images/I/71zHwRhBC0L.jpg", "Harari racconta la storia dell'umanità dall'evoluzione delle specie umane arcaiche dell'età della pietra fino al XXI secolo, focalizzandosi sulla nostra specie umana, Homo sapiens, su ciò che siamo e su come lo siamo diventati, tramite un'analisi storica variegata che non tralascia la politica, l'economia, la biologia, e la filosofia.", 540, 15.2);

var_dump($book1, $book2);
