<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $guarded = [];
    use \Rutorika\Sortable\SortableTrait;
    protected static $sortableField = 'sid';
}
