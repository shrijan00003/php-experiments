<?php 


function demo($a) {
    try {
        // echo "on try block";
    if($a == 0) {
        echo "will throw exception <br/>";
        throw new Exception('!!! This is not expected ');
        }
    }
    catch (Exception $e) {
        echo "catching exception <br/>";
        echo $e->getMessage();
}
finally{
    echo "will run always";
}
}
demo(5);
demo(0);
?>