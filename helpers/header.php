<?php 
	function renderHeader(){
		session_start();
		if ($_SESSION['is_autorized'] && $_SESSION['is_autorized'] = '1'){
			include_once('partials/headers/_authorized.php');
		}else{
			include_once('partials/headers/_guest.php');
		}
	}
?>