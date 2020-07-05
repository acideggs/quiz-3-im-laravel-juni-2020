<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    
	public function index(){

		$articles = ArtikelModel::getAll();

		return view('list_artikel', ['data' => $articles]);

	}

	public function create(){

		return view('artikel_baru');

	}

	public function store(Request $request){

		$slug = strtolower(str_replace(" ", "-", $request->judul));

		$data = 
				[

					'judul'		=> $request->judul,
					'isi' 		=> $request->isi,
					'slug' 		=> $slug,
					'tag' 		=> $request->tag,
					'user_id' 	=> 1

				];

		if (ArtikelModel::save($data)) {
			
			return redirect('/artikel');

		}
	}

	public function show($id){

		$article = ArtikelModel::findArticleById($id);

		$tag = explode(" ", $article->tag);

		return view('detail_artikel', ['data' => $article, 'tag' => $tag]);

	}

	public function edit($id){

		$article = ArtikelModel::findArticleById($id);

		return view('artikel_edit', ['data' => $article]);

	}

	public function update($id, Request $request){

		$slug = strtolower(str_replace(" ", "-", $request->judul));

		$data = 
				[

					'judul'		=> $request->judul,
					'isi' 		=> $request->isi,
					'slug' 		=> $slug,
					'tag' 		=> $request->tag,

				];

		if (ArtikelModel::update($id, $data)) {
			
			return redirect('/artikel');

		}

	}

	public function delete($id){

		if (ArtikelModel::delete($id)) {
			
			return redirect('/artikel');

		}

	}

}
