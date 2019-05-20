<?php 
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;

	class Categories extends Model{
		protected $table = 'categories';
		protected $primaryKey = 'id';
		protected $fillable = ['id','name','description'];
 		protected $hidden = ['created_at','updated_at','picture'];
	}

?>