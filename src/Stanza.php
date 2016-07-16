<?php

namespace Song99Bottles;

class Stanza {
  /**
   * @var \Song99Bottles\Sentence[]
   */
  private $sentences;

  /**
   * Stanza constructor.
   * @param Sentence[] $sentences
   */
  public function __construct(array $sentences) {
    $this->sentences = $sentences;
  }

  public function sing(Output $output) {
    array_map(function (Sentence $sentence) use ($output) {
      $sentence->sing($output);
    }, $this->sentences);
  }
}