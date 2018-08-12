<?php

echo "Enter elements in array: ";
for($i=0;$i<100;$i++) {
    scanf($arr[i], "%x", $i);
    $freq[$i] = -1;
}


for($i=0; $i<100; $i++)
    {
        $count = 1;
        for($j=$i+1; $j<100; $j++)
        {
            
            if($arr[$i]==$arr[$j])
            {
                $count++;

            
                $freq[$j] = 0;
            }
        }

        if($freq[$i] != 0)
        {
            $freq[$i] = $count;
        }
    }

echo "\nFrequency of all elements of array : \n";
for($i=0; $i<100; $i++)
    {
        if($freq[$i] != 0)
        {
            echo "%x occurs %x times\n", $arr[$i], $freq[$i];
        }
    }

return 0 ;
