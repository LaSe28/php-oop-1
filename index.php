<?php
class Movies {
  private $name;
  private $author;
  private $year;
  private $rating;

  function __construct($_name, $_author)
  {
    $this->name = $_name;
    $this->author = $_author;
  }

  public function getName() {
    return $this->name;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setYear($_year) {
    $this->year = $_year;
  }
  public function getYear() {
    return $this->year;
  }
  public function setRating($_rating) {
    $this->rating = $_rating;
  }
  public function getRating() {
    return ', ed ha una valutazione di ' . $this->rating . ' su 10.';
  }

}

$avatar = new Movies('avatar', 'james cameron');
$avatar->setYear(2009);
$avatar->setRating(8);
echo 'Il titolo è "';
echo $avatar->getName() . '"';
echo ', diretto da ';
echo $avatar->getAuthor() . '.';
echo ' uscito nel ';
echo $avatar->getYear();
echo $avatar->getRating();


$transformers = new Movies('transformers', 'Michael Bay');
$transformers->setYear(2008);
$transformers->setRating(7);
echo 'Il titolo è "';
echo $transformers->getName() . '"';
echo ', diretto da ';
echo $transformers->getAuthor() . '.';
echo ' uscito nel ';
echo $transformers->getYear();
echo $transformers->getRating();

