<?php
#$_SERVER SUPERGLOBAL
$server=[
        'Host server name' => $_SERVER['SERVER_NAME'],
        'Host header' => $_SERVER['SERVER_NAME'],
        'Host filename' => $_SERVER['PHP_SELF'],
        'SERVER_ADDR' => $_SERVER['SERVER_ADDR'],
        'SERVER_SOFTWARE' => $_SERVER['SERVER_SOFTWARE'],
        'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'],
        'DOCUMENT_ROOT' => $_SERVER['DOCUMENT_ROOT'],
        'HTTP_HOST' => $_SERVER['HTTP_HOST'],
        'SERVER_ADMIN' => $_SERVER['SERVER_ADMIN'],
        
        'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME']
];

    //echo $server['Host server name'];
    //foreach ($_SERVER as $parm => $value)   echo "$parm = '$value'\n";

    $client=[
        'Client System info'=>$_SERVER['HTTP_USER_AGENT'],
        'Client IP'=>$_SERVER['REMOTE_ADDR'],
        'Client Port'=>$_SERVER['REMOTE_PORT']
    ];
    //print_r($client);


    #create server array
?>