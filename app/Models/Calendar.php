<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';

    public function pro(){
    return $this->HasMany(Product::class,'category_id');
    }

        public function products()
    {
        return $this->hasMany(Product::class);
    }
}
