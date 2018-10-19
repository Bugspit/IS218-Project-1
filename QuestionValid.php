<html>
<body>



<h1>Question Created</h1><br><br>
<?php

error_reporting(E_ALL);
ini_set('displaying_errors','1');

$qTitl = $qBod = $qSkill = $qSkillArray = $skills = ''; 

$qTitl = $_POST['qTitle'];
$qBod = $_POST['qBody'];
$qSkill = $_POST['qSkills'];

?>

Question Title: <?php 
if (empty($qTitl)){
	echo 'Please enter a Title';
}elseif(strlen($qTitl) < '3'){
	echo 'Please enter a Title with atleast 3 characters';
}else{
	echo $qTitl;
}
?>
<br><br>

Question Body: <?php 
if (empty($qBod)){
	echo 'Please enter a Question';
}elseif(strlen($qBod) > '500'){
	echo 'Please keep it consice...Less than 500 characters';
}else{
	echo $qBod;
}
?>
<br><br>

Question Skills: <?php 
$qSkill = str_replace(' ','',$qSkill);
$qSkillArray = explode(',',$qSkill);
if(count($qSkillArray) < '2'){
	echo 'Please enter more than one skill';
}else{
	//for($counter = 0; $counter <= count($qSkillArray); $counter++)  {
	//	echo $qSkillArray[$counter], ', ';
	foreach($qSkillArray as $skills){
		echo $skills,' ';
}
}

?> 
</body>
</html>