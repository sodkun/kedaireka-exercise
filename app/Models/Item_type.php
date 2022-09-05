<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item_type extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'item_types';
    protected $fillable =['name','description'];

    public function items(){
        return $this -> hasMany(Item::class);
    }
}
