<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

header("Content-Type: application/json");

//collect value from request
$operation_type = $_POST['operation_type'];
$first = $_POST['x'];
$second = $_POST['y'];


class Operation{
    public $slackUsername;
    public $result;
    public $operation_type;

    //Methods
    function setAttributes($operation_type, $first, $second){
        if ($operation_type == 'addition')
        {
            $this->result = $first + $second;
        }
        else if($operation_type == 'subtraction')
        {
            $this->result = $first - $second;
        }
        else if($operation_type == 'multiplication')
        {
            $this->result = $first * $second;
        }

        $this->slackUsername = "tall_dev";
        $this->operation_type = $operation_type;

    }
}

$new_op = new Operation();
$new_op->setAttributes( $operation_type, $first, $second);
$tall_dev_encoded = json_encode($new_op);

echo $tall_dev_encoded;
