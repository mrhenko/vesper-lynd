<?php
	/**
	  * The main view class.
	  *
	  * This object loads a template and populate
	  * it with the correct content.
	 **/

	class View {
	
		public function loadTemplate() {
			$filename = TEMPLATE_PATH . 'index.htm';
			$fh = fopen ( $filename, 'r');
			$basehtml = fread ( $fh, filesize($filename) );

			return $basehtml;
		}

	}

?>
