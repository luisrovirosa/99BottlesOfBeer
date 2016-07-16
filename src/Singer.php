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

  /**
   * @param Singable[]|string $toSing
   */
  public function sing($toSing) {
    if (is_array($toSing)) {
      $this->singMany($toSing);
    }
    else {
      $this->output->sing($toSing);
    }
  }

  public function pause() {
    $this->output->sing("");
  }

  /**
   * @param Singable[] $toSing
   */
  private function singMany(array $toSing) {
    array_map(function (Singable $singable) {
      $singable->sing($this);
    }, $toSing);
  }
}