<?php

    class KingoLudoException 
    {
        function getMessage($message){
            $file = fopen('./src/Log/error.log', 'a+');
            $write = fputs($file, $message);
            fclose($file);
        }
    }
    