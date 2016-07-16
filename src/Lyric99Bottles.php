<?php

namespace Song99Bottles;

class Lyric99Bottles {

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $stanzas = [];
    for ($i = 0; $i < 100; $i++) {
      $remainingBottles = 99 - $i;
      $stanzas[] = new Stanza([
        new Sentence("$remainingBottles bottles of beer on the wall, $remainingBottles bottles of beer."),
        new Sentence("Take one down and pass it around, " . ($remainingBottles - 1) . " bottles of beer on the wall.")
      ]);
    }
    return $stanzas;
  }
}