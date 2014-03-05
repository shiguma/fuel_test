<?
namespace Model;

class Test extends \Model{
	public static function get_results(){
		$result = \DB::query('SELECT * FROM fuel_test_db')->execute();
		return $result->as_array();
	}
}
