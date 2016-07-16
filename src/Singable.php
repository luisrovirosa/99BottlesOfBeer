<?php
namespace Song99Bottles;

interface Singable {
  public function sing(Singer $singer);
}