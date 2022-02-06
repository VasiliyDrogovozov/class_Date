<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php


class Date {
    const SIMPLE_FORMAT = 'Y-m-d H:i:s';
    private $time;
    public $year;
    public $month;
    public $day;

    public function __construct() {
        $this->time = date('Y-m-d H:i:s');
        $time_data = explode(' ', $this->time);
        $data = explode('-', $time_data[0]);
        $this->year = $data[0];
        $this->month = $data[1];
        $this->day = $data[2];
    }
    public function getTimeOrDate($time = null) {
        if($time == 'Y-m-d H:i:s'){
            $this->time = date('Y-m-d H:i:s');
        } elseif($time == 'Y-m-d') {
            $time_data = explode(' ', $this->time);
             return $time_data[0];
        } elseif($time == 'H:i:s') {
            $time_data = explode(' ', $this->time);
            return $time_data[1];
        } else {
            return $this->time = date(self::SIMPLE_FORMAT);
        }
        
    }
    public function __toStrign() {
        return date(self::SIMPLE_FORMAT);
    }
}

    ?>
</body>
</html>
