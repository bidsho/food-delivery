<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menus extends Model
{
    protected $table="menus";
    protected $fillable=[
        'name',
        'file',
        'price',
        'description',
        'ingredients',
    ];

    public function orders():HasMany
    {
        return $this->belongsTo(Menus::class);

    }

   
    // public function getFileAttribute($value)
    // {
    //     return $value ? asset('uploads/' . $value) : null;
    // }
//     public function getFileAttribute($value)
// {
//     return url('uploads/' . $value); // Returns full URL
// }

}
