<?php

namespace Song99Bottles\Sentence;

class TakeOneAndPassItSentence extends Sentence {

  /**
   * TakeOneAndPassItSentence constructor.
   * @param int $numberOfSentence
   */
  public function __construct($numberOfSentence) {
    parent::__construct($this->sentence($numberOfSentence));
  }

  /**
   * @param $numberOfSentence
   * @return string
   */
  private function sentence($numberOfSentence) {
    return $this->action($numberOfSentence) . $this->bottlesInTheBar($numberOfSentence);
  }

  /**
   * @param $numberOfSentence
   * @return string
   */
  private function action($numberOfSentence) {
    $action = $this->hasBottlesInTheWall($numberOfSentence)
      ? "Take one down and pass it around, "
      : 'Go to the store and buy some more, ';
    return $action;
  }

  /**
   * @param $numberOfSentence
   * @return string
   */
  private function bottlesInTheBar($numberOfSentence) {
    return $this->remainingBottles($numberOfSentence) . " bottles of beer on the wall.";
  }

  /**
   * @param $numberOfBottlesDrunk
   * @return int
   */
  private function remainingBottles($numberOfBottlesDrunk) {
    return ($this->hasBottlesInTheWall($numberOfBottlesDrunk + 1))
      ? ((100 + self::MAX_NUMBER_OF_BOTTLES_ON_THE_WALL - $numberOfBottlesDrunk) % 100)
      : 'no more';
  }

  /**
   * @param $numberOfBottlesDrunk
   * @return bool
   */
  private function hasBottlesInTheWall($numberOfBottlesDrunk) {
    return $numberOfBottlesDrunk != 100;
  }
}