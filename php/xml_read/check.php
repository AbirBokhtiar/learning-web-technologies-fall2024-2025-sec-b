<?php

    $studentsData = file_get_contents('abc.xml');
    //echo $studentsData;

    $students = new SimpleXMLElement($studentsData);
    echo $students->student[0]->name;
?>