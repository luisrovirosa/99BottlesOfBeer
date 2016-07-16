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
    $sentences = $this->sentences();
    $this->singSentences($sentences);
  }

  /**
   * @return array
   */
  private function sentences() {
    $lyric = new Lyric99Bottles();
    return $lyric->sentences();
  }

  /**
   * @param $sentences
   */
  private function singSentences($sentences) {
    array_map(function ($sentence) {
      $this->output->sing($sentence);
    }, $sentences);
  }
}