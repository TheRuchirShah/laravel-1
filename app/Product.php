<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','details'];
    protected $table = 'products';
    protected $primaryKey = 'id';
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
