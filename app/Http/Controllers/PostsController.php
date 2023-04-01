<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;

class PostsController extends Controller {

    public function show( $word ) {
        {
            $post = \DB::table( 'posts' )->where( 'word', $word )->first();

            if ( !  $post ) {
                abort( 404 );
            }
            return view( 'post', [
                'post' => $post
            ] );

        }
    }
}
