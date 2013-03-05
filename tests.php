<?php

require_once('CompaniesHouseApi.php');

// Successfull Call
var_dump(CompaniesHouseApi::search('00928555'));

// Unsuccessful Call
var_dump(CompaniesHouseApi::search('00000000'));

?>
