<?php
declare(strict_types=1);

class Suit
{
    const TYPE_SPADE = 'Spade';
    const TYPE_HEART = 'Heart';
    const TYPE_DIAMOND = 'Diamond';
    const TYPE_CLUB = 'Club';

    private const CHAR_SPADE = 127136;
    private const CHAR_HEART = 127152;
    private const CHAR_DIAMOND = 127168;
    private const CHAR_CLUB = 127184;

    /** @var string */
    private $name;

    private function __construct(string $name) {
        $this->name = $name;
    }

    static function SPADE() {
        return new Suit(self::TYPE_SPADE);
    }
    static function HEART() {
        return new Suit(self::TYPE_HEART);
    }
    static function DIAMOND() {
        return new Suit(self::TYPE_DIAMOND);
    }
    static function CLUB() {
        return new Suit(self::TYPE_CLUB);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor() : string
    {
        return in_array($this->name, [self::TYPE_HEART, self::TYPE_DIAMOND]) ? 'red' : 'black';
    }

    public function getStartValue() : int
    {
        switch($this->name) {
            case self::TYPE_SPADE;
                return self::CHAR_SPADE;
            case self::TYPE_CLUB;
                return self::CHAR_CLUB;
            case self::TYPE_DIAMOND;
                return self::CHAR_DIAMOND;
            case self::TYPE_HEART;
                return self::CHAR_HEART;
            default:
                throw new DomainException('Invalid suit type');
        }
    }
}