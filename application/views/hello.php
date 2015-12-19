<?php

//echo "Title: ".$nm;
//echo "<br/>";
//echo "Category:".$cat;
//echo "<br/>";
//echo "Location: ".$loc;
//echo "<br/>";
//echo "Min Price: ". $mnp;
//echo "<br/>";
//echo "Max Price: ". $mxp;

if($res==true)
{
$count=0;
                    foreach($results->result() as $row)
                    {
                        if($count%3==0)
                        {
                            echo "<div class='row'>";
                        }
                        $contacturl=  base_url()."index.php/contact_controller?uid=".$row->UserID."&success=0";
                        $rateurl= base_url()."index.php/rate_controller?uid=".$row->UserID."&var2=0";
                        echo "<div class='col-md-4'>";
                        echo "<h2>$row->ATitle</h2>";
                        echo "<img src=$row->AImage alt='Image Unavailable'/>";
                        echo br();
                        echo "<span>Price</span>"."<span>$row->APrice</span>";
                        echo br();
                        echo "<a href='$contacturl'>Contact Uploader</a>";
                        echo "&nbsp";
                        echo "<a href='$rateurl'>Rate Uploader</a>";
                        echo "</div>";
                        $count=$count+1;
                        if($count%3==0)
                        {
                            echo "</div>";
                        }
                        
                    }
                
}
else
{
    echo $sorry;
}
                echo br();
