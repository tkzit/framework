<?php 

	class ErrorController {

        public static $permissionLevel = -1;

        public function action_404($req, $res) {
            $res->render("404.php", [], "empty");
        }

        public function action_403($req, $res) {
            $res->render("403.php", [], "empty");
        }
        
	}

?>