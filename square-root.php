<?php
    function sqrt1($n)
    {
        $x=$n;
        $y=1;
        while ($x >$y)
        {
            $x=($x+$y)/2;
            $y=$n/$x;   
        }
        return $x;
    }
    print_r(sqrt1(144)."<br/>");
?>