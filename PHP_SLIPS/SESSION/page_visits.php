<?php
session_start();
if(isset($_SESSION['page_view'])){
    $_SESSION['page_view']+=1;
}else{
  $_SESSION['page_view']=1;
}
echo "you visited this page " .$_SESSION['page_view']. " no of times";