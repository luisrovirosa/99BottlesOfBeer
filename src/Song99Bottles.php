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
    $this->singStanzas($this->stanzas());
  }

  /**
   * @return Stanza[]
   */
  private function stanzas() {
    $lyric = new Lyric99Bottles();
    return $lyric->stanzas();
  }

  /**
   * @param Stanza[] $stanzas
   */
  private function singStanzas($stanzas) {
    array_map(function (Stanza $stanza) {
      $stanza->sing($this->output);
    }, $stanzas);
  }
}