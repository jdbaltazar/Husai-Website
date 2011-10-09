<?php
session_start();
if(isset($_SESSION['session_user'])&&isset($_SESSION['session_user_type'])&&isset($_SESSION['authenticated'])){

	if($_SESSION['session_user_type'] == 'Husai Customer'){
		header('Location: ../accounts/view/account-profile.php?id='.$_SESSION['session_user']);
	}else if($_SESSION['session_user_type'] == 'Husai Administrator'){
		
		if(isset($_POST['account_searchfield'])){
			$account_searchfield = trim($_POST['account_searchfield']);
		
			if($account_searchfield!=""){
				$query = "select Name, Username, Status from account WHERE Username!='".$_SESSION['session_user']."' and (name like '%".$account_searchfield."%' or username like '%".$account_searchfield."%' or status like '%".$account_searchfield."%')";
			}else{
				$query = "select Name, Username, Status from account WHERE Username!='".$_SESSION['session_user']."'";
			}
		}
		
		include("../../application/views/accounts/manage-accounts.php");
	}
	exit;


}else{

	include("../actions/logout.php");
	exit;
}

?>