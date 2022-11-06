<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

//collect value from request
$operation_type = $_POST['operation_type'];
$first = $_POST['x'];
$second = $_POST['y'];

echo $first;

//function handleEnum($operationType, $firstValue, $secondValue){
//
//    switch ($operationType) {
//        case "addition":
//            return $firstValue + $secondValue;
//        case "subtraction":
//            return $firstValue - $secondValue;
//        case "multiplication":
//            return  $firstValue * $secondValue;
//        default:
//            return 0;
//    }
//}
//
//class Operation{
//    public $slackUsername;
//    public $result;
//    public $operation_type;
//
//    //Methods
//    function setAttributes($slackUsername, $operation_type, $firstValue, $secondValue){
//        $this->slackUsername = $slackUsername;
//        $this->result = handleEnum($operation_type, $firstValue, $secondValue);;
//        $this->operation_type = $operation_type;;
//    }
//}
//
//$new_op = new Operation();
//$tall_dev = $new_op->setAttributes("tall_dev", $operation_type, $first, $second);
//$tall_dev_encoded = json_encode($tall_dev);
//
//echo $tall_dev_encoded;
