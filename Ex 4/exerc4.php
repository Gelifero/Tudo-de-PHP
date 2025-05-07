<?php
    for ($i = 100; $i >= -100; $i--)
        if ($i >= 0):
            echo "$i/";
        else:
            break;
        endif;
?>