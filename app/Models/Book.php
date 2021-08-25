<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $visible = [
        'id', 'title', 'author_id'
    ];

    protected $fillable = ['title', 'author_id'];

    public function author() {
        $this->hasOne(Author::class, 'id', 'author_id');
    }
}
