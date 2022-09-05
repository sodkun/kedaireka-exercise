<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'item';
    protected $fillable =['kode_film','nama_film','stock','harga','item_type_id'];



    public function itemTypes()
    {
        return $this->belongsTo(Item_type::class,"item_type_id");
    }

}
