<?php 
require_once __DIR__ . '/YiiRequirementChecker.php';
$requirementsChecker = new YiiRequirementChecker();
$requirements = require_once __DIR__ . '/requirements.php';
$requirementsChecker->checkYii()->render();
