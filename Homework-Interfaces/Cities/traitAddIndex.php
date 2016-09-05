<?php

namespace Cities;

trait traitAddIndex
{
    public function setIndex($value) {
        $index = $value;
        if (preg_match("/[0-1]/",$index)) {
            $this->index = $index;
        } else {
            echo  "Index must be a digit in the range of 0-1".PHP_EOL;
        }
    }
}