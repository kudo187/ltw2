<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
	protected $primaryKey = 'menu_id';

	public function getParents()
	{
		$parents = self::where('menu_id_parent',NULL)->get();
		return $parents;
	}
	public function getChilds($parents){
		foreach ($parents as $key => $parent) {
			$parents[$key]->childs = self::where('menu_id_parent', $parent->menu_id)->get();
			}
			return $parents;
	}
	public function getChildsSub($parents){
		foreach ($parents as $key => $parent) {
			foreach ($parents[$key]->childs as $key1 => $value) {
				$parents[$key]->childs[$key1]->childsubs = self::where('menu_id_parent', $value->menu_id)->get();
			}
        }
        return $parents;
	}
}