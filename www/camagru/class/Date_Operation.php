<?php

namespace Clas;

class Date_Operation {
    public function randomDateInRange(\DateTime $start, \DateTime $end) {
        $randomTimestamp = mt_rand($start->getTimestamp(), $end->getTimestamp());
        $randomDate = new \DateTime();
        $randomDate->setTimestamp($randomTimestamp);
        return $randomDate;
    }
}