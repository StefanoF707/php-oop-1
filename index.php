<?php

class Book {

    public $title;
    public $subtitle;
    public $author;
    public $firstEdition;
    public $cover;
    public $preview;
    public $pages;

    function __construct($title, $subtitle = "", $author, $firstEdition, $cover, $preview) {

        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->author = $author;
        $this->firstEdition = $firstEdition;
        $this->cover = $cover;
        $this->preview = $preview;
    }

}

$book1 = new Book("1984", "",  "George Orwell", 1949, "https://images-na.ssl-images-amazon.com/images/I/91SZSW8qSsL.jpg", "Chi controlla il passato controlla il futuro. Chi controlla il presente controlla il passato.");

$book2 = new Book("Sapiens", "Da animali a dei", "Yuval Noah Harari", 2011, "https://images-na.ssl-images-amazon.com/images/I/71zHwRhBC0L.jpg", "Harari racconta la storia dell'umanità dall'evoluzione delle specie umane arcaiche dell'età della pietra fino al XXI secolo, focalizzandosi sulla nostra specie umana, Homo sapiens, su ciò che siamo e su come lo siamo diventati, tramite un'analisi storica variegata che non tralascia la politica, l'economia, la biologia, e la filosofia.");

$book3 = new Book($_POST["title"], $_POST["subtitle"], $_POST["author"], $_POST["firstEd"], $_POST["cover"], $_POST["preview"]);

$db = [
    $book1,
    $book2,
];

if ($book3->title != "") {
    $db[] = $book3;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/app.css">
        <title>libri</title>
    </head>
    <body>

        <div class="container">
            <?php foreach($db as $book) { ?>
                <div class="card">
                    <img src="<?= $book->cover ?>" alt="">
                    <h2><?= $book->title ?></h2>
                    <h3><?= $book->subtitle ?></h3>
                    <h3><?= $book->author ?></h3>
                    <small><?= $book->firstEdition ?></small>
                    <p><?= $book->preview  ?></p>
                </div>
            <?php } ?>
        </div>

        <a href="form.php" class="bookBtn">Aggiungi un nuovo libro</a>


    </body>
</html>
