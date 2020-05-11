<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location:http://localhost/ProjectPHPPri/ContactFrom_v1/index.html");
?>