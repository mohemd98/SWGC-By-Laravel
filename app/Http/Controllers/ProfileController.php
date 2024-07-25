<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;


class ProfileController extends Controller
{
    public function  index()
    {
        $user =Auth::user();
        $id=Auth::id();



        if ( $user->profile == null ) {
            $profile = Profile::create( [
                'user_id' => $id,
                'university' => '1',
                'college' => '2',
                'boi' => '3',
                'phone_number' => '4',
                'telegram_id' => '5',
                'facebook_rul' => '6',


            ] );
        }

        return view( 'profile.main' )->with( 'user', $user );



    }
}
