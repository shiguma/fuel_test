<?php
class Controller_Test extends Controller_Rest{
	public function get?list(){
		$this->response(array(
			'test' => array(
				1,2,3
			),
			'empty' => null
		));
	}
}
