<?php

class ListSchool{
	public $name;
	public $year_in;
	public $year_out;
	public $major;
}

class Skills{
	public $skill_name;
	public $level;
	
}

$name = 'Rezki M. Tanjung';
$age = 22;
$address = "wirabaru 2 blok T.13 Pekuncen, Wiradesa kab. Pekalongan";
$hobbies = array('gaming', 'listening music', 'cooking', 'watch movies', 'reading');
$is_married = false;
$kindergarten = new ListSchool();
	$kindergarten->name = 'TK Batik Pencongan';
	$kindergarten->year_in = '2001';
	$kindergarten->year_out = '2003';
	$kindergarten->major = null;

$elementary_school = new ListSchool();
	$elementary_school->name = 'SDN Pacar';
	$elementary_school->year_in = '2003';
	$elementary_school->year_out = '2009';
	$elementary_school->major = null;

$junior_hischool = new ListSchool();
	$junior_hischool->name = 'SMPN 1 Tirto';
	$junior_hischool->year_in = '2009';
	$junior_hischool->year_out = '2012';
	$junior_hischool->major = null;

$senior_hischool = new ListSchool();
	$senior_hischool->name = 'SMAN 1 Wiradesa';
	$senior_hischool->year_in = '2012';
	$senior_hischool->year_out = '2015';
	$senior_hischool->major = 'IPS';

$university = new ListSchool();
	$university->name = 'STMIK Widya Pratama';
	$university->year_in = '2015';
	$university->year_out = '2018';
	$university->major = 'S1 Sistem Informasi';

$kemampuan = new skills();
	$kemampuan->skill_name = "Java";
	$kemampuan->level= "advanced";
$kemampuan1 = new skills();
	$kemampuan1->skill_name = "html+css";
	$kemampuan1->level= "beginner";
$kemampuan2 = new skills();
	$kemampuan2->skill_name = "javascript";
	$kemampuan2->level= "beginner";
$kemampuan3 = new skills();
	$kemampuan3->skill_name = "php";
	$kemampuan3->level= "advanced";
$kemampuan4 = new skills();
	$kemampuan4->skill_name = "python";
	$kemampuan4->level= "beginner";
$kemampuan5 = new skills();
	$kemampuan5->skill_name = "pascal";
	$kemampuan5->level= "beginner";
$kemampuan6 = new skills();
	$kemampuan6->skill_name = "php codeigniter";
	$kemampuan6->level= "advanced";

$interest_in_coding = true;


$school = array('tk'=>$kindergarten, 'sd'=>$elementary_school,'smp'=>$junior_hischool,'sma'=>$senior_hischool,'perguruan tinggi'=> $university);
$skills_list = array($kemampuan , $kemampuan1 , $kemampuan2 , $kemampuan3 , $kemampuan4 , $kemampuan5 , $kemampuan6);
$mybio = array('nama' => $name,'umur'=> $age, 'alamat'=>$address, 'hobi'=>$hobbies, 'status pernikahan'=> $is_married,'riwayat pendidikan'=>$school, 'keahlian'=>$skills_list,'ketertarikan'=>$interest_in_coding);

echo json_encode($mybio, JSON_PRETTY_PRINT);