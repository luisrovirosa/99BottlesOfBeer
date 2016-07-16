<?php

namespace Song99Bottles;

class Lyric99Bottles {

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $numberOfBottles = range(1, 100);

    return array_map(function ($numberOfBottles) {
      return Stanza::sentence($numberOfBottles);
    }, $numberOfBottles);
  }
}