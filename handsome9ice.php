<?php
    if(isset($_POST['process'])){

       $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];

       $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

       $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $to = $_POST ['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        header("location: ../sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=keresifon.ekpo@gmail.com");
   }else{
        header("location: handsome9ice.html");
    }
?>