<?
namespace Model;

class Test extends \Model{
	public static function get_results(){
		$result = \DB::query('SELECT * FROM test')->execute();
		return $result->as_array();
	}
}
