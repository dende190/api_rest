<?php 

	namespace App\Http\Controllers;

	use App\Categories;
	use Illuminate\Http\Request;

	class CategoriesController extends Controller{
		public function index(){
			$categories = Categories::all();
			if($categories){
				return response()->json($categories, 200);
			}

			return response()->json(['No hay datos aun'], 404);
		}

		public function getCategory($id){
			$category = Categories::find($id);
			if($category){
				return response()->json($category, 200);
			}

			return response()->json(["Categoria no encontrada"], 404);
		}

		public function createCategory(Request $request){
			$category = Categories::create([
				'name' => $request->name,
				'description' => $request->description
			]);

			return response()->json($category, 200);
		}

		public function updateCategory(Request $request, $id){
			$category = Categories::find($id);

			if($request->name){
				$category->name = $request->name;
			}else{
				$category->name = $category->name;
			}
			if($request->description){
				$category->description = $request->description;
			}else{
				$category->description = $category->description;
			}
			$category->save();

			return response()->json($category);
		}

		public function deleteCategory($id){
			$category = Categories::find($id);
			$name = $category->name;

			$category->delete();

			return response()->json(["Categoria ($name) Eliminada correctamente"], 200);
		}
	}

?>