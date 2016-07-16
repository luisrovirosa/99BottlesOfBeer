<?php

namespace Song99Bottles\Sentence;

class BottleOnTheWallSentence extends Sentence {

  /**
   * BottleSentence constructor.
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
    $bottlesOnTheWall = self::MAX_NUMBER_OF_BOTTLES_ON_THE_WALL - $numberOfSentence + 1;
    return "$bottlesOnTheWall bottles of beer on the wall, $bottlesOnTheWall bottles of beer.";
  }
}