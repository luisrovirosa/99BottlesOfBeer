<?php

namespace Song99Bottles;

use Song99Bottles\Sentence\BottleOnTheWallSentence;
use Song99Bottles\Sentence\Sentence;
use Song99Bottles\Sentence\TakeOneAndPassItSentence;

class Stanza implements Singable {
  /**
   * @var \Song99Bottles\Sentence\Sentence[]
   */
  private $sentences;

  /**
   * Stanza constructor.
   * @param Sentence[] $sentences
   */
  private function __construct(array $sentences) {
    $this->sentences = $sentences;
  }

  /**
   * @param $numberOfBottlesOnTheWall
   * @return \Song99Bottles\Stanza
   */
  public static function forBottles($numberOfBottlesOnTheWall) {
    return new Stanza([
      new BottleOnTheWallSentence($numberOfBottlesOnTheWall),
      new TakeOneAndPassItSentence($numberOfBottlesOnTheWall)
    ]);
  }

  public function sing(Singer $singer) {
    $singer->sing($this->sentences);
    $singer->pause();
  }
}