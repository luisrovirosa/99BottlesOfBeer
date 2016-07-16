<?php

namespace Song99Bottles;

class Lyric99Bottles {

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $stanzas = [];
    for ($i = 0; $i < 100; $i++) {
      $numberOfBottlesOnTheWall = 99 - $i;
      $stanzas[] = Stanza::forBottles($numberOfBottlesOnTheWall);
    }
    return $stanzas;
  }
}