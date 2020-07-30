<?php


class Blacjack
{
    private string $player;
    private string $dealer;
    private $deck;

    public function getPlayer()
    {
        return $this->player;
    }

    public function getDealer()
    {
        return $this->dealer;

    }

    public function getDeck()
    {
        $this->deck;

    }

    public function setDeck()
    {
        return $this->deck;

    }

    function __construct($player, $dealer)
    {
        $deck = new Deck();
        $deck->shuffle();
        // create new object using properties from Blackjack class
        $this->player = new Player();
        $this->dealer = new Dealer();
        $this->deck = $deck;


    }





}

$_SESSION['blackjack'] = new Blackjack();





