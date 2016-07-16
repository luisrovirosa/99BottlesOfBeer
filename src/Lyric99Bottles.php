<?php

namespace Song99Bottles;

class Lyric99Bottles {
  const NUMBER_OF_STANZAS = 100;

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $numberOfBottles = range(1, self::NUMBER_OF_STANZAS);

    return array_map(function ($numberOfBottles) {
      return Stanza::sentence($numberOfBottles);
    }, $numberOfBottles);
  }
}