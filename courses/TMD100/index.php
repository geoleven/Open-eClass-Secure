<?php

// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(-1);

                session_start();
        $dbname="TMD100";
        session_register("dbname");
        include("../../modules/course_home/course_home.php");
        ?>