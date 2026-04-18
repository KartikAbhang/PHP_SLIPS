<?php
if(isset($_COOKIE['page_view']))
    {
    $count=$_COOKIE['page_view']+1;
}
else{
    $count=1;
}
setcookie('page_view',$count,time()+2);
echo "you visited this page ".$count ." no of times";
?>