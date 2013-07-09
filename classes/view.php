<?php
	/**
	  * The main view class.
	  *
	  * This object loads a template and populate
	  * it with the correct content.
	 **/

	class View {

		private $template;
	
		function __construct() {
			$this->loadTemplate();
		}

		/**
		  * Load the default template
		 **/
		private function loadTemplate() {
			$filename = TEMPLATE_PATH . 'index.htm';
			$fh = fopen ( $filename, 'r');
			$this->template = fread ( $fh, filesize($filename) );
		}

		/**
		  * Specify an HTML element by $id and set
		  * a new content to it.
		 **/
		public function setById($id, $content) {
		
			$dom = new DOMDocument();
			$dom->loadHTML ( $this->template );
			
			$element = $dom->getElementById ( $id );
			$element->nodeValue = $content;

			$this->template = $dom->saveHTML();
		}

		public function getHTML() {
			return $this->template;
		}

	}

?>
