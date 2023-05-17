<?php

    class GreaterThanZeroException extends Exception {}
    class GreaterThanTenException extends Exception {}
    class GreaterThanFiftyException extends Exception {}
    
    function  test($x) {
        if ($x <= 0) {
            throw new GreaterThanZeroException("Error: X must be greater than zero", 1000);
        } elseif ($x <= 10) {
            throw new GreaterThanTenException("Error: X must be greater than ten", 1001);           
        } elseif ($x <= 50) {
            throw new GreaterThanFiftyException("Error: X must be greater than fifty", 1002);            
        } else {
            echo $x;
        }
    }

    try {   
        test(50);
    } catch (GreaterThanZeroException $e) {
        echo $e->getMessage() . " - " . $e->getCode() . " - " . "line: " . $e->getLine() . " - " . $e->getFile();
    } catch (GreaterThanTenException $e) {
        echo $e->getMessage() . " - " . $e->getCode() . " - " . "line: " . $e->getLine() . " - " . $e->getFile();
    } catch (GreaterThanFiftyException $e) {
        echo $e->getMessage() . " - " . $e->getCode() . " - " . "line: " . $e->getLine() . " - " . $e->getFile();
    }
 
?>