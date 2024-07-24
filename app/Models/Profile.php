<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';

    protected $fillable = [ 'user_id' ,'university' , 'college' , 'boi' , 'phone_number' ,'telegram_id' , 'facebook_rul' ,'created_at' , 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
