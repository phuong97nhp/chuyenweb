<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'cw_posts';
    protected $fillable = ['post_id', 'post_catid', 'post_title', 'post_slug', 'post_detail', 'post_type', 'post_img', 'post_metakey', 'post_metadesc', 'post_metadesc', 'post_createdby', 'post_updatedby', 'created_at', 'updated_at', 'post_status'];  
}
