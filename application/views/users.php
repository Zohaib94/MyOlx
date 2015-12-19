<h2>Users</h2>

<?php
foreach($users as $user)
{
    echo $user->UserID;
    echo $user->UserName;
    echo "<div></div>";
}

