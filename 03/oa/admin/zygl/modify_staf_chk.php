<?php
	session_start(); 
	include "../inc/chec.php";
	include "../conn/conn.php";
$sqlstr = "update tb_users set u_user='".$_POST[u_user]."',u_name='".$_POST[u_name]."',u_sex='".$_POST[u_sex]."',u_birth='".$_POST[u_birth]."',u_address = '".$_POST[u_address]."',u_tel = '".$_POST[u_tel]."',u_depart = '".$_POST[u_depart]."',u_email = '".$_POST[u_email]."' where id = ".$_POST[id];
	$result = mysql_query($sqlstr,$conn);
	if($result)
		echo "<script>alert('�޸ĳɹ���');location='show_staf.php';</script>";
	else
		echo "<script>alert('ϵͳ��æ�����Ժ�����');history.go(-1);</script>";
?>