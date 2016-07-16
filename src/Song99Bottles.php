<?php

namespace Song99Bottles;

class Song99Bottles {
  /**
   * @var \Song99Bottles\Output
   */
  private $output;

  /**
   * Song99Bottles constructor.
   * @param \Song99Bottles\Output $output
   */
  public function __construct(Output $output) {
    $this->output = $output;
  }

  public function sing() {
    $this->singSentences($this->sentences());
  }

  /**
   * @return Sentence[]
   */
  private function sentences() {
    $lyric = new Lyric99Bottles();
    return $lyric->sentences();
  }

  /**
   * @param Sentence[] $sentences
   */
  private function singSentences($sentences) {
    array_map(function (Sentence $sentence) {
      $sentence->sing($this->output);
    }, $sentences);
  }
}