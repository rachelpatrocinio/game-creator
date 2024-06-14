<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url_img',
        'description',
        'attack',
        'defence',
        'speed',
        'life',
        'item_id',
        'type_id'
    ];

    public function items(){
        return $this->belongsToMany(Item::class)->withPivot('qty');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
