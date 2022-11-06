<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

//collect value from request
$operation_type = $_POST['operation_type'];
$first = $_POST['x'];
$second = $_POST['y'];

function handleEnum($operationType, $firstValue, $secondValue){

    switch ($operationType) {
        case "addition":
            return $firstValue + $secondValue;
            break;
        case "subtraction":
            return $firstValue - $secondValue;
            break;
        case "multiplication":
            return  $firstValue * $secondValue;
            break;
        default:
            return 0;
    }
}

$result = handleEnum($operation_type, $first, $second);

class Operation{
    public $slackUsername;
    public $result;
    public $operation_type;

    //Methods
    function setAttributes($slackUsername, $resultOp, $operation_type){
        $this->slackUsername = $slackUsername;
        $this->result = $resultOp;
        $this->operation_type = $operation_type;;
    }
}

$new_op = new Operation();
$tall_dev = $new_op->setAttributes("tall_dev", $result, $operation_type);
$tall_dev_encoded = json_encode($tall_dev);

echo $tall_dev_encoded;
