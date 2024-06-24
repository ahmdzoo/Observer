<?php
class Subscriber
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update($edition)
    {
        echo $this->name . " received new edition: " . $edition . "<br>";
    }
}
?>