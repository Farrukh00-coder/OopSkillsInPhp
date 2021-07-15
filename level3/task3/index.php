<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/oop/level3/task3/src/import/ImportExport.php';

use Src\ImportExport\Import as Import;
use Src\ImportExport\ArrayReader as ArrayReader; 
use Src\ImportExport\ToSessionWriter as ToSessionWriter;
use Src\ImportExport\StrUpConventer as StrUpConventer;
use Src\ImportExport\DoubleStrConventer as DoubleStrConventer;

(new Import())
	->from(new ArrayReader())
	->to(new ToSessionWriter())
	->with(new StrUpConventer())
	->with(new DoubleStrConventer())
	->execute()
;

var_dump($_SESSION['writer']);