<?php

require_once('../Repository/RepositoryCoach.php');
$repocoach = new  RepositoryCoach();
$id = $_GET['Coach_id'];
$repocoach->delete($id);
header('location:../views/views_Coach.php');
