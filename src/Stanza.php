<?php

namespace Song99Bottles;

class Stanza implements Singable {
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

  public function sing(Singer $singer) {
    $singer->sing($this->sentences);
  }
}