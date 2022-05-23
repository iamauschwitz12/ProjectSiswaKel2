<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_vivo extends Model
{
    protected $table = "vivo";
    protected $fillable = ['nama','prosesor','penyimpanan','harga','image'];
}
