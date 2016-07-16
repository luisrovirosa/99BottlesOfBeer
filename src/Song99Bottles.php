<?php

namespace Song99Bottles;

class Song99Bottles {
  private $singer;

  /**
   * Song99Bottles constructor.
   * @param \Song99Bottles\Output $output
   */
  public function __construct(Output $output) {
    $this->singer = new Singer($output);
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
    $this->singer->sing($stanzas);
  }
}