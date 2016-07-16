<?php

namespace Song99Bottles;

class TakeOneAndPassItSentence extends Sentence {

  /**
   * TakeOneAndPassItSentence constructor.
   * @param int $remainingBottles
   */
  public function __construct($remainingBottles) {
    parent::__construct($this->sentence($remainingBottles));
  }

  /**
   * @param $remainingBottles
   * @return string
   */
  private function sentence($remainingBottles) {
    return "Take one down and pass it around, " . $remainingBottles . " bottles of beer on the wall.";
  }
}