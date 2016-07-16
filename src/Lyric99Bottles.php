<?php

namespace Song99Bottles;

class Lyric99Bottles {

  /**
   * @return Stanza[]
   */
  public function stanzas() {
    $numberOfBottles = array_reverse(range(0,99));

    return array_map(function ($numberOfBottles){
      return Stanza::forBottles($numberOfBottles);
    }, $numberOfBottles);
  }
}