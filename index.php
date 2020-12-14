<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css">
<script src="script/dragdrop.js"></script>
<script src="script/objectLogic.js"></script>
<script src="script/displayLogic.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Organizational Chart</title>
</head>

<body>

<?php
require_once 'config.php';
 
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    print_r($userProfile);
    echo '<a href="logout.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
} 
?>

Please Drag + Drop to crete the Org-Chart

<!-- <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div> -->

<div id='subord_list'>
<div id='employee1' class='anEmployee' ondrop="drop(event); addBox(); dupIcon();" 
    ondragover="allowDrop(event)">
    <div>Name</div><div>Surname</div>
</div>
<div class='anEmployee' ondrop="drop(event); addBox(); dupIcon();" 
    ondragover="allowDrop(event)">
    <div>Name</div><div>Surname</div>
</div>
</div>

<div id='icontain'> 
<img id="origSymb" src="img/oneEmployee.png" draggable="true" ondragstart="drag(event)" width="100">
</div>
</body>

</html>