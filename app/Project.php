<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    //
    public function getTitleAttribute($value)
    {
      return $value;
    }

    public function setTitleAttribute($value)
    {
      $this->attributes['title'] = $value;
    }

    public function getDescriptionAttribute($value)
    {
      return $value;
    }

    public function setDescriptionAttribute($value)
    {
      $this->attributes['description'] = $value;
    }

}
