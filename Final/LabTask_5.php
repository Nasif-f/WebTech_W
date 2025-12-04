<!DOCTYPE html>
<html>
<body>

    <h2>PHP Lab Task 5 Output</h2>

    <?php
    class Book {
       
        public $title;  
        public $author; 
        public $year;  

        
        public function __construct($title, $author, $year) {
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }

        
        public function getDetails() {
            return "Title: " . $this->title . ", Author: " . $this->author . ", Published: " . $this->year . " ";
        }

        

        public function setTitle($newTitle) {
            $this->title = $newTitle;
        }

        public function setAuthor($newAuthor) {
            $this->author = $newAuthor;
        }

        public function setYear($newYear) {
           
            $this->year = (int)$newYear;
        }
    }

   
    
    echo "<div class='output-box'>";
    echo "<h3>Initial Object Creation and Display:</h3>";

    
    $book1 = new Book("Football Tactics", "Messi", 2019);

   
    echo "<h4>Initial Book Information:</h4>";
    echo "<p class='code-output'>" . $book1->getDetails() . "</p>";

    echo "<hr>";

    
    echo "<h3>Updating Properties (using set methods):</h3>";
    $book1->setAuthor("Ronaldo");
    $book1->setYear(2025);
    $book1->setTitle("Football Tactics");
    echo "Author updated to: Ronaldo <br>";
    echo "Year updated to: 2025<br>";

    
    echo "<h4>Updated Book Information:</h4>";
    echo "<p class='code-output'>" . $book1->getDetails() . "</p>";
    echo "</div>";
    ?>

</body>
</html>