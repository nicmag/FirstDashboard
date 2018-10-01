<?php

require '../../app/common.php';


//fetch from fb
$team = Team::findAll();

//convert to json and print
echo json_encode($teams);
