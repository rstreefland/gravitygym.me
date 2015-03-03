<?php
namespace xes;
class Module {

	private $template;
	private $rendered;

	public function __construct($folder, $template) {
		$this->template = file_get_contents($folder.$template);
	}

	public function render($settings) {
		echo $this->getRender($settings);
	}

	public function getRender($settings) {
		$params = $this->setParams($settings);
		return (!$params ? $this->display() : $params);
	}

	public function setParams($settings) {
		$this->rendered = $this->template;
		$found = 0;

		foreach ($settings as $name => $value) {
			$this->rendered = str_replace('{{'.$name.'}}', $value, $this->rendered, $found);
			if ($found == 0) {
				return "\nERROR: Property not in template: ". $name;
			}
		}
	}

	public function display() {

		if ((strpos($this->rendered,'{{') !== false) || (strpos($this->rendered,'}}') !== false)) {
			return "\nERROR: Unset property: ". $this->get_string_between($this->rendered, '{{', '}}');
		}
		else {
			return $this->rendered;
		}
	}

	// http://stackoverflow.com/a/9826656/1964179
	public function get_string_between($string, $start, $end){
		$string = " ".$string;
		$ini = strpos($string,$start);
		if ($ini == 0) return "";
		$ini += strlen($start);
		$len = strpos($string,$end,$ini) - $ini;
		return substr($string,$ini,$len);
	}
}
?>
