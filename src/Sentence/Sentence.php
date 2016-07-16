<?php

namespace Song99Bottles\Sentence;

use Song99Bottles\Singable;
use Song99Bottles\Singer;

class Sentence implements Singable {
  const MAX_NUMBER_OF_BOTTLES_ON_THE_WALL = 99;
  /**
   * @var string
   */
  private $sentence;

  /**
   * Sentence constructor.
   * @param string $sentence
   */
  public function __construct($sentence) {
    $this->sentence = $sentence;
  }

  public function sing(Singer $singer) {
    $singer->sing($this->sentence);
  }
}