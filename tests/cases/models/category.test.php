<?php
/* Category Test cases generated on: 2009-12-11 09:12:02 : 1260531782*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category', 'app.post', 'app.tag', 'app.posts_tag');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
?>