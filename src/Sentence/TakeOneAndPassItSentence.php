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
    if ($numberOfSentence == 100){
      return 'Go to the store and buy some more, 99 bottles of beer on the wall.';
    }
    return "Take one down and pass it around, " . ($this->remainingBottles($numberOfSentence))
    . " bottles of beer on the wall.";
  }

  /**
   * @param $numberOfSentence
   * @return int
   */
  private function remainingBottles($numberOfSentence) {
    return ($numberOfSentence != 99)
      ? self::MAX_NUMBER_OF_BOTTLES_ON_THE_WALL - $numberOfSentence
      : 'no more';
  }
}