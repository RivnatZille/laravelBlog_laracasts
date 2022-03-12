<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fillable properties are used for when you want to mass assign values to an Object and you want to specify
    // which ones are mass assignable. On the example below, I can mass assign a title, an excerpt and the body
//    protected $fillable = ['title', 'excerpt', 'body'];

    // Guarded properties are used for when you want to mass assign values to an Object and you want to specify which
    // ones aren't mass assignable. On the example below, I can mass assign every value, except the title
//    protected $guarded = ['title'];

    // Also, you can disable mass assignment completely, but declaring a blank guarded property, just like below
    protected $guarded = [];

//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
