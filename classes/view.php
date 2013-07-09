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
			$this->template = require ( TEMPLATE_PATH . 'index.php');
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
