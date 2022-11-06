<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

//collect value from request
$operation = $_POST['operation_type'];
$first = $_POST['x'];
$second = $_POST['y'];

class Operation{
    public $slackUsername;
    public $result;
    public $operation_type;

    //Methods
    function handleEnum($operationType, $firstValue, $secondValue){
        $local_result = 0;

        switch ($operationType) {
            case "addition":
                $local_result = $firstValue + $secondValue;
                break;
            case "subtraction":
                $local_result = $firstValue - $secondValue;
                break;
            case "multiplication":
                $local_result = $firstValue * $secondValue;
                break;
            default:
                return 0;
        }

        $this->operation_type = $operationType;
        $this->slackUsername = "tall_dev";
        $this->result = $local_result;
    }
}

$new_op = new Operation();
$tall_dev = $new_op->handleEnum($operation, $first, $second);
$tall_dev_encoded = json_encode($tall_dev);

echo $tall_dev_encoded;