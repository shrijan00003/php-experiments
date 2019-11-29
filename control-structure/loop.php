<?php 
    // associative array
    $employees = [
        'ram'=>'manager',
        'shyam'=>'clerk',
        'sita'=>'assistent'
    ];

    foreach ($employees as $name => $post) {
        echo "$name is $post </br>";
    }

?>