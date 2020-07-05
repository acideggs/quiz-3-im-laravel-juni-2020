<?php 

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel {

	public static function getAll(){

		$articles = DB::table('articles')->get();

		return $articles;

	}

	public static function save($data){

		$article = DB::table('articles')->insert($data);

		return $article;

	}

	public static function findArticleById($id){

		$article = DB::table('articles')->where('id', $id)->first();

		return $article;

	}

	public static function update($id, $data){

		$article = DB::table('articles')->where('id', $id)->update($data);

		return $article;

	}

	public static function delete($id){

		$article = DB::table('articles')->where('id', $id)->delete();

		return $article;

	}

}