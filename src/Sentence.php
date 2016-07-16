<?php

namespace Song99Bottles;

class Sentence implements Singable {
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