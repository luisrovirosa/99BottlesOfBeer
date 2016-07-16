<?php

namespace Song99Bottles\Sentence;

class TakeOneAndPassItSentence extends Sentence {

  /**
   * TakeOneAndPassItSentence constructor.
   * @param int $numberOfBottles
   */
  public function __construct($numberOfBottles) {
    parent::__construct($this->sentence($numberOfBottles));
  }

  /**
   * @param $numberOfBottlesOnTheWall
   * @return string
   */
  private function sentence($numberOfBottlesOnTheWall) {
    return "Take one down and pass it around, " . ($numberOfBottlesOnTheWall - 1). " bottles of beer on the wall.";
  }
}