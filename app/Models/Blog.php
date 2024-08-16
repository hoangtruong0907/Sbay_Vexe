<?php

// app/Models/Blog.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'title',
        'content',
        'tag',
        'status',  
        'type',   
        'author' 
    ];

    
    public function scopeActive($query)
    {
        return $query->where('status', '!=', 'archived');
    }
}
