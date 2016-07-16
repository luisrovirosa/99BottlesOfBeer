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
    $this->output->sing('99 bottles of beer on the wall, 99 bottles of beer.');
    $this->output->sing('Take one down and pass it around, 98 bottles of beer on the wall.');
  }
}