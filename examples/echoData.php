<?php

sleep(2);

if (isset($_REQUEST["data"]))
{
   $data = htmlspecialchars($_REQUEST["data"]);
   echo "I think that \"$data\" is really great.\n";
}
else
{
   echo "No data received.\n";
}

?>
