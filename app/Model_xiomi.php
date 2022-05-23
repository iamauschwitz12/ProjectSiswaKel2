<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_xiomi extends Model
{
    protected $table = "xiomi";
    protected $fillable = ['nama','prosesor','penyimpanan','harga','image'];
}