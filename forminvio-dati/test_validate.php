<?php
include "./Validate.php";




$validator = new Validator();

echo $validator->required('') === false  ? '' : 'fallito ' . __LINE__;
echo $validator->required('     ') === false  ? '' : 'fallito ' . __LINE__;
echo $validator->required('ciao') === true ? '' : 'fallito ' . __LINE__;


echo $validator->required('roberto@a.it') === true 			? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->required('') === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->required('  ') === false ? "" : "fail (line " . __LINE__ . ")\n";

echo $validator->email('a') === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->email('a@b.it') === true ? "" : "fail (line " . __LINE__ . ")\n";



// test($validator->getOptionsRequired(), false, __LINE__);
// test($validator->getOptionsRequired(['required' => true]), true, __LINE__);
// test($validator->getOptionsRequired(['required' => false]), false, __LINE__);




echo $validator->name('a@b.it') === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('marco rosso') === true ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('marco') === true ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('3marco rosso') === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('33') === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('lica5') === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('lica5', array('required' => true)) === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('', array('required' => true)) === false ? "" : "fail (line " . __LINE__ . ")\n";
echo $validator->name('', array('required' => false)) === true ? "" : "fail (line " . __LINE__ . ")\n";


test($validator->integer(5), true, __LINE__);
test($validator->integer(5.5), false, __LINE__);
test($validator->integer("z"), false, __LINE__);
test($validator->integer(0), true, __LINE__);
test($validator->integer(25), true, __LINE__);
test($validator->integer(-25.1), false, __LINE__);
test($validator->integer(-25), true, __LINE__);


$opt = array(
	'min' => 1,
	'max' => 10,
	'required' => true
);

test($validator->integer(5, $opt), true, __LINE__);
test($validator->integer(5.5, $opt), false, __LINE__);
test($validator->integer("z", $opt), false, __LINE__);
test($validator->integer(0, $opt), false, __LINE__);

test($validator->integer(25, $opt), false, __LINE__);
test($validator->integer(-25.1, $opt), false, __LINE__);
test($validator->integer(-25, $opt), false, __LINE__);

test($validator->integer(1, $opt), true, __LINE__);
test($validator->integer(10, $opt), true, __LINE__);

test($validator->integer(5, $opt), true, __LINE__);
test($validator->integer(3, $opt), true, __LINE__);

$opt = array(
	'required' => false
);

test($validator->integer(NULL, $opt), true, __LINE__);
test($validator->integer('', $opt), true, __LINE__);

test($validator->integer(5, $opt), true, __LINE__);
test($validator->integer(5.5, $opt), false, __LINE__);
test($validator->integer("z", $opt), false, __LINE__);
test($validator->integer(0, $opt), false, __LINE__);

test($validator->integer(25, $opt), false, __LINE__);
test($validator->integer(-25.1, $opt), false, __LINE__);
test($validator->integer(-25, $opt), false, __LINE__);

test($validator->integer(1, $opt), true, __LINE__);
test($validator->integer(10, $opt), true, __LINE__);

test($validator->integer(5, $opt), true, __LINE__);
test($validator->integer(3, $opt), true, __LINE__);

// $opt = array();
// $opt['min'] = 1;
// $opt['max'] = 10;

function test($assert, $result, $line)
{

	//var_dump($assert);
	echo $assert === $result ? "" : "fail (line " . $line . ")\n";
}
