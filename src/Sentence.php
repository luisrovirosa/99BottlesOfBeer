<?php

namespace Song99Bottles;

class Sentence {
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

  public function sing(Output $output) {
    $output->sing($this->sentence);
  }
}