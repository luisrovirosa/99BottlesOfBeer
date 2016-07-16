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
      $bottlesOnTheWall = 99 - $i;
      $bottlesAfterTakeOne = $bottlesOnTheWall - 1;
      $stanzas[] = new Stanza([
        new BottleOnTheWallSentence($bottlesOnTheWall),
        new TakeOneAndPassItSentence($bottlesAfterTakeOne)
      ]);
    }
    return $stanzas;
  }
}