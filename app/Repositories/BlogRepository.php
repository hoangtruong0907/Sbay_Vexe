<?php

namespace App\Repositories;

use App\Models\Blog;

class BlogRepository extends BaseRepository
{
    /**
     * Create a new BlogRepository instance.
     *
     * @param  \App\Models\Blog $blog
     * @return void
     */
    public function __construct(Blog $blog)
    {
        $this->model = $blog;
    }
    /**
     * Store a blog.
     *
     * @param  array $inputs
     * @return void
     */
    public function store($inputs)
    {
        $this->model->create($inputs);
    }

    // Custom function

}
