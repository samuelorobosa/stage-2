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
    function setAttributes($operation_type, $first, $second): void
    {
        if (str_contains($operation_type, "addition") || str_contains($operation_type, "add"))
        {
            $this->result = $first + $second;
            $this->operation_type = "addition";
        }
        else if(str_contains($operation_type,'subtraction') || str_contains($operation_type,'subtract'))
        {
            $this->result = $first - $second;
            $this->operation_type = "subtraction";
        }
        else if(str_contains($operation_type,'multiplication') || str_contains($operation_type,'multiply'))
        {
            $this->result = $first * $second;
            $this->operation_type = "multiplication";
        }
        else
        {
            $this->result = 0;
        }

        $this->slackUsername = "tall_dev";

    }
}

$new_op = new Operation();
$new_op->setAttributes( $operation_type, $first, $second);
$tall_dev_encoded = json_encode($new_op);

echo $tall_dev_encoded;
