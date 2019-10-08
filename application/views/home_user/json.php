<?php 


        $result[] = array(
            'username' => $row['username'],
            'email' => $row['email']
        );
die (json_encode($result));
?>