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
    $bottlesOnTheWall = 100 - $numberOfSentence;
    return "$bottlesOnTheWall bottles of beer on the wall, $bottlesOnTheWall bottles of beer.";
  }
}