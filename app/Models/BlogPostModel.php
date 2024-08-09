<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostModel extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    // Đặt các thuộc tính có thể gán giá trị hàng loạt
    protected $fillable = [
        'title',
        'picture',
        'content',
        'created_at',
        'updated_at',
        'author'
    ];
    public $timestamps = true;
}
