<?php

    function view($file_name, $data = null) {
        if ($data) {
            extract($data);
        }

        require_once(__DIR__ . "/views/" . $file_name);
    }

    function notFound() {
        echo "404 Page";
    }

?>