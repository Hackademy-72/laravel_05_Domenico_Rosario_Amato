<?php

namespace App\Models;

use App\Models\Home;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [

        'article',
        'category',
        'price',
        'image'
    ];  

    public function homes()
    {
        return $this->belongsToMany(Home::class);
    }

}
