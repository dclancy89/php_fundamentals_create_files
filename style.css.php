<?php
 header('Content-type: text/css');

    function random_color() {
       $color = "rgb(";
       $color .= random_int(0,255);
       $color .= ", ";
       $color .= random_int(0,255);
       $color .= ", ";
       $color .= random_int(0,255);
       $color .= ");";

       return $color;
    }

    echo "h1 {color: " . random_color() . "}";
    echo "p {color: " . random_color() . "}";

?>