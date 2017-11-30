<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
    	$input = new Post;

		$input->title       = request('title');
		$input->slug        = str_slug(request('title'));
		$input->content     = request('content');
		$input->kategori_id = request('categori');

		if ($input->save()) {
			echo "Post di tambahkan";
		}
		else{
			echo "gagal menambah post";
		}
    }
}
