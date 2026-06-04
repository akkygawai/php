<!-- Write a PHP script to implement constructor and destructor.  -->
<?php
    class Person
    {
        private $fname;
        private $lname;
        public function __construct($fname, $lname) 
        {
            echo "\nInitialising the object..."; 
            $this->fname = $fname;
            $this->lname = $lname;
        }
        public function __destruct()
        {
            echo "\n\nDestroying Object...\n";
        }
        public function showName() 
        {
            echo "\n\tMy name is: " . $this->fname . " " . $this->lname; 
        }
    }
    $fname=readline("Enter the first name: ");
    $lname=readline("Enter the last name: ");
    $p = new Person($fname, $lname);
    $p->showName();    
?>
