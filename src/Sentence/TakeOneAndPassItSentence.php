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
    $remainingBottles = self::MAX_NUMBER_OF_BOTTLES_ON_THE_WALL - $numberOfSentence;
    return "Take one down and pass it around, " . ($remainingBottles) . " bottles of beer on the wall.";
  }
}