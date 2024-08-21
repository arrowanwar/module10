<?php


class Book
{


    // TODO: Add properties as Private
    private $title;
    private $availableCopies;



    public function __construct($title, $availableCopies)
    {

        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // TODO: Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }


    // TODO: Add getAvailableCopies method

    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    // TODO: Add borrowBook method
    public function borrowBook($agr1)
    {
        return $this->availableCopies -= $agr1;
    }



    // TODO: Add returnBook method
    public function returnBook($arg2)
    {
        return $this->availableCopies += $arg2;
    }
}


class Member
{


    // TODO: Add properties as Private
    private $getName;


    public function __construct($name)
    {

        $this->getName = $name;
        // TODO: Initialize properties


    }



    // TODO: Add getName method
    public function getName()
    {
        return $this->getName;
    }


    // TODO: Add borrowBook method
    public function borrowBook($agr1) {}



    // TODO: Add returnBook method
    public function returnBook($arg2) {}
}

$bookOne = new Book("The Great Gatsby", 5);
$bookTwo = new Book("To Kill A Mockingbird", 3);
$memberOne = new Member("John Doe");
$memberTwo = new Member("Jane Smith");
$memberOne->borrowBook($bookOne->borrowBook(1));
$memberOne->borrowBook($bookTwo->borrowBook(1));

echo "Available Copies of "."'" . $bookOne->getTitle() . "'" . ": " . $bookOne->getAvailableCopies() . PHP_EOL;
echo "Available Copies of "."'" . $bookTwo->getTitle() . "'" . ": " . $bookTwo->getAvailableCopies() . PHP_EOL;
