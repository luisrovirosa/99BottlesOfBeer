<?php

namespace Song99Bottles\Sentence;

class BottleOnTheWallSentence extends Sentence {

  /**
   * BottleSentence constructor.
   * @param int $numberOfBottlesOnTheWall
   */
  public function __construct($numberOfBottlesOnTheWall) {
    parent::__construct($this->sentence($numberOfBottlesOnTheWall));
  }

  /**
   * @param $bottlesOnTheWall
   * @return string
   */
  private function sentence($bottlesOnTheWall) {
    return "$bottlesOnTheWall bottles of beer on the wall, $bottlesOnTheWall bottles of beer.";
  }
}