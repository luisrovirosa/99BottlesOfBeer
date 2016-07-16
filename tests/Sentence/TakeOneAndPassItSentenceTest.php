<?php

namespace Song99Bottles\Tests\Sentence;

use Song99Bottles\Sentence\TakeOneAndPassItSentence;
use Song99Bottles\Singer;

class TakeOneAndPassItSentenceTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function the_first_sentence_is_98_bottles() {
    $sentence = new TakeOneAndPassItSentence(1);
    $singer = $this->prophesize(Singer::class);

    $sentence->sing($singer->reveal());

    $singer->sing('Take one down and pass it around, 98 bottles of beer on the wall.')->shouldHaveBeenCalled();
  }
}