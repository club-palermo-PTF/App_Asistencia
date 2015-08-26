<?php

class LogoutManager {

	public function logout() {

		session_destroy();
		header('Location: ../../index.php');
	}
}