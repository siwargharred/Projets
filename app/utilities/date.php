<?php

namespace App\utilities;

class date
{
  public static function isWeekend()
  {
      return( new \DateTime())->format('n')>=6;
  }

}