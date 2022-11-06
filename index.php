<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

//collect value from request
$operation_type = $_POST['operation_type'];
$first = $_POST['x'];
$second = $_POST['y'];
$result = 0;

switch ($operation_type) {
    case "addition":
        $result = $first + $second;
        break;
    case "subtraction":
        $result = $first - $second;
        break;
    case "multiplication":
        $result =  $first * $second;
        break;
    default:
        $result = 0;
}

class Operation{
    public $slackUsername;
    public $result;
    public $operation_type;

    //Methods
    function setAttributes($slackUsername, $operation_type, $result){
        $this->slackUsername = $slackUsername;
        $this->result = $result;
        $this->operation_type = $operation_type;
    }
}

$new_op = new Operation();
$tall_dev = $new_op->setAttributes("tall_dev", $operation_type, $result);
$tall_dev_encoded = json_encode($tall_dev);

echo $tall_dev_encoded;
