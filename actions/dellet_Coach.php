<?php

require_once('../classes/RepositoryCoach.php');
$repocoach = new  RepositoryCoach();
$id = $_GET['Coach_id'];
$repocoach->delete($id);
header('location:../views/views_Coach.php');
