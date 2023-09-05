<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    public function getContent($type) {
        return self::where('type', $type)->get();
    }
}
