<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $table = 'quests';
    protected $fillable = ['title', 'category_id','description', 'reward'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
