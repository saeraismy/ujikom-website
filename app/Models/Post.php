<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'isi', 'category_id', 'petugas_id', 'status', 'tanggal'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }

    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
