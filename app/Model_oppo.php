<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_oppo extends Model
{
    protected $table = "oppo";
    protected $fillable = ['nama','prosesor','penyimpanan','harga','image'];
}
