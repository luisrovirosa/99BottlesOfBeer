<?php

namespace Song99Bottles;

class Lyric99Bottles {

  public function stanzas() {
    $stanzas = [];
    for ($i = 0; $i < 100; $i++) {
      $stanzas[] = new Stanza([
        new Sentence('99 bottles of beer on the wall, 99 bottles of beer.'),
        new Sentence('Take one down and pass it around, 98 bottles of beer on the wall.')
      ]);
    }
    return $stanzas;
  }
}