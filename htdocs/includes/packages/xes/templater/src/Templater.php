<?php
namespace xes;
class Templater {

	private $folder;

	public function __construct($folder) {
		if (!is_dir($folder)) {
			die("ERROR: Unable to access folder " . $folder);
		}

		$this->folder = $folder;
	}

	public function loadModule($template) {
		return new Module($this->folder, $template);
	}
}
?>
