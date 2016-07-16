<?php

namespace Song99Bottles;

class Lyric99Bottles {

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $stanzas = [];
    for ($i = 0; $i < 100; $i++) {
      $bottlesOnTheWall = 99 - $i;
      $bottlesAfterTakeOne = $bottlesOnTheWall - 1;
      $stanzas[] = new Stanza([
        new BottleOnTheWallSentence($bottlesOnTheWall),
        new Sentence("Take one down and pass it around, " . $bottlesAfterTakeOne . " bottles of beer on the wall.")
      ]);
    }
    return $stanzas;
  }
}