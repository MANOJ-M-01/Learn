<?php 
    // https://github.com/phpredis/phpredis 
    // install redis extension
    /**
        host
        port
        timeout
        reserved
        retry_interval
        read_timeout
    */
    try{
        $redis = new Redis();  
        $connection=$redis->connect('tcp://redis-15830.c264.ap-south-1-1.ec2.cloud.redislabs.com', 1376, 1, NULL, 0, 0, ['ssl' => ['verify_peer' => false]]);
        $redis->auth(["user_name",'password_Vv56sdpw1SFSO6yCMrb8IX2kj0mqyqr9jidfd']);
        if($connection){
            echo "Connection to server sucessfully <br />"; 
        }else{
            echo "Connection to server failed <br />"; 
        }
        if ($redis->ping()) {
            echo "Ping... <br />";
        }
        $data=[
            [
                'name'=>'Manoj',
                'age'=>'23',
            ],
            [ 
                'name'=>'Rakesh',
                'age'=>'25',
            ],
            [ 
                'name'=>'Sanjay',
                'age'=>'21',
            ] 
        ];

        $DataFromRedis=$redis->get('data');
        if(!$DataFromRedis){ 
            $redis->set('data',json_encode($data));
        }else{
            echo "Data already exists <br />";
            echo "<pre>";
            print_r(json_decode($DataFromRedis));
            echo "</pre>";
        }

        $remove=false;
        if($remove){
            $redis->del('data');
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>
