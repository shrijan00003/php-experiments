<?php
class MyException extends Exception {
    function get_Message() {
        $errorMsg = 'Error on line '.$this->getLine().
        ' in '.$this->getFile()
        .$this->getMessage();
    return $errorMsg;
    }
}
function demo($a) {
    try {
        // echo "on try block";
    if($a == 0) {
        throw new MyException('!!! This is not expected ');
    }
    }
    catch (MyException $e) {
    echo $e->get_Message();
}
}
// This will not generate any exception
// demo(5);
// It will cause an exception
demo(0);
?>