<?php

session_start();
@$innloggetBruker=$_SESSION["brukernavn"];

if (!$innloggetBruker)
{
	print("<meta http-equiv='refresh' content='0;url=index.php'>");
}