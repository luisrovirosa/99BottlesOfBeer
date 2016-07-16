<?php

namespace Song99Bottles;

class Singer {
  /**
   * @var \Song99Bottles\Output
   */
  private $output;

  /**
   * Singer constructor.
   * @param \Song99Bottles\Output $output
   */
  public function __construct($output) {
    $this->output = $output;
  }

  public function sing($singables) {
    array_map(function ($singable) {
      $singable->sing($this->output);
    }, $singables);
  }
}