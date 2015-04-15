<?php
	$dblocation="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbname="firstSite";
	//Таблицы
	$tbl_maintext="mytable";
	$tbl_catalog="catalogs";
	$tbl_user = "users";
	$tbl_product="products";
	$tbl_accounts="system_accounts";

	$dbcnx = mysql_connect($dblocation, $dbuser, $dbpassword);
	if(!$dbcnx){
		exit("No connect to server MySQL");
	}
	
	$dbuse = mysql_select_db($dbname, $dbcnx);
	if(!$dbuse){
		exit("No choose DB");
	}
	
	@mysql_query("SET NAMES 'utf-8'");
