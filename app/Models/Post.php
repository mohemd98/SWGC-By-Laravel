<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['user_id','post_content','post_img_name','post_city','post_man','post_title','post_type', 'post_want','post_gender','post_product_status','created_at','updated_at','deleted_at',];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
