<!-- 
Create un file index.php in cui:
 - è definita una classe `Movie`
   => all'interno della classe sono dichiarate delle *variabili d'istanza*
   => all'interno della classe è definito un *costruttore*
   => all'interno della classe è definito *almeno un metodo*
- vengono istanziati almeno due oggetti `Movie` e stampati a schermo i valori delle relative proprietà 
-->

<?php

class Movie
{


    public $title;
    public $rate;
    public $language;
    public $category;

    public function __construct($title, $rate, $language, $category)
    {

        $this->title = $title;
        $this->rate = $rate;
        $this->language = $language;
        $this->category = $category;
    }

    public function showInfo()
    {
        echo "<h1>" . $this->title . "</h1>";
        echo "<div>recensione: " . $this->rate . "</div>";
        echo "<div>lingua: " . $this->language . "</div>";
        echo "<div>categoria: " . $this->category . "</div>";
        // return $this->title
        //     . $this->rate
        //     . $this->language;
    }
}


// COSTRUISCO il movie1
$movie1 = new Movie("Matrix", "sni, un po' noioso", "English", "action");
// COSTRUISCO il movie2
$movie2 = new Movie("Titanic", "vabbè, fa il suo", "English", "love");



// chiamo la funzione che stampa i dettagli
$movie1->showInfo();

// chiamo la funzione che stampa i dettagli
$movie2->showInfo();
