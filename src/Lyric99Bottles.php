<?php

namespace Song99Bottles;

use Song99Bottles\Sentence\BottleOnTheWallSentence;
use Song99Bottles\Sentence\TakeOneAndPassItSentence;

class Lyric99Bottles {

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $stanzas = [];
    for ($i = 0; $i < 100; $i++) {
      $numberOfBottlesOnTheWall = 99 - $i;
      $stanzas[] = new Stanza([
        new BottleOnTheWallSentence($numberOfBottlesOnTheWall),
        new TakeOneAndPassItSentence($numberOfBottlesOnTheWall)
      ]);
    }
    return $stanzas;
  }
}