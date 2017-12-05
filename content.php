<?php 
if ($_GET['module']=='home'){
	include 'home.php';         
} elseif ($_GET['module']=='add-courier'){
    include "add-courier.php";
} elseif ($_GET['module']=='add-member')
	{
		include "add-member.php";
	}
	elseif ($_GET['module']=='courier-list')
	{
		include "courier-list.php";
	}
		elseif ($_GET['module']=='search-edit')
	{
		include "search-edit.php";
	}
			elseif ($_GET['module']=='delivered-list')
	{
		include "delivered-list.php";
	}
	elseif ($_GET['module']=='datewise-list')
	{
		include "datewise-list.php";
	}elseif ($_GET['module']=='offices-list')
	{
		include "offices-list.php";
	}elseif ($_GET['module']=='add-office')
	{
		include "add-office.php";
	}elseif ($_GET['module']=='manager-list')
	{
		include "manager-list.php";
	}elseif ($_GET['module']=='add-new-officer')
	{
		include "add-new-officer.php";
	} else {

	}
?>