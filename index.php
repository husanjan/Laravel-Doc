<?php


echo   $ajson= '[{"size":"d4936486-0d8e-460b-b53e-732e76c41e25","name":"BBQ","productid":"c079fcd9-9d57-423c-91e3-2f1cce673638","microID":"c079fcd9-9d57-423c-91e3-2f1cce673638","price":"52","quantity":1},{"size":"e842dc50-fdd7-4707-8653-e8ea43d03653","name":"Донер","productid":"bdf1b40e-65db-4014-adfe-5f4589a964d5","microID":"bdf1b40e-65db-4014-adfe-5f4589a964d5","price":"115","quantity":1},{"size":"e842dc50-fdd7-4707-8653-e8ea43d03653","name":"Маргарита","productid":"a6c6f7ec-60ff-4628-b6f7-a1e0ec9bae8d","microID":"a6c6f7ec-60ff-4628-b6f7-a1e0ec9bae8d","price":"80","quantity":1},{"name":"Острый Мачо","productid":"7069ffa0-2892-4773-b584-58779f8b30cc","microID":"undefined","price":33,"quantity":1},{"name":"ЧИКЕН-Стейк","productid":"874b11b7-48a3-4cbe-89f7-1ebc4c5e86e7","microID":"undefined","price":16,"quantity":1}]';


 echo "<pre>";
var_dump(json_decode($ajson,true));
 echo "</pre>";