<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $color;
    public $category;
    public $type;
    public $code;

    public function __construct($color, $category, $type, $code)
    {

        // now we update them
        $this->color = $color;
        $this->category = $category;
        $this->type = $type;
        $this->code = $code;

    }
}