<?php



class Player
{
    private array $cards = [];
    private bool $lost = false;

    public function hit()
    {

    }
    public function surrender()
    {
        $this->setLost(true);
    }
    public function getScore()
    {
        $score = 0;
        foreach ($this->getCards() as $card)
        {
            $score += $this->getValue();
        }
    }
    public function hasLost(bool $lost)
    {
    $this->lost(true);
    }

    public function setLost(bool $lost)
    {
        $this->lost = $lost;
    }

    // does capital or not make sense
    function __construct(Deck $deck)
    {
       $this->cards[] = $deck->drawCard();
       $this->cards[] = $deck->drawCard();
    }

    public function getCards() : array
    {
        return $this->cards;
    }




}

