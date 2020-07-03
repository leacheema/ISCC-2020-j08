<?php include_once ("header.php");?>
 
<!DOCTYPE html>
<html>
 <head>
 <title>mini-site-vitrine</title>
 </head> 
 
<a href="http://localhost:8888/ISCC-2020/J-08/EX_02/index.php?page=1"> page 1 </a>
<a href="http://localhost:8888/ISCC-2020/J-08/EX_02/index.php?page=2"> page 2 </a>
<a href="http://localhost:8888/ISCC-2020/J-08/EX_02/index.php?page=3"> page 3 </a>
 
<?php
if ($_GET["page"]=="1")
 {
 include_once ("acceuil.php");
}
elseif ($_GET["page"]=="2")
{
 include_once ("programme.php");
}
elseif ($_GET["page"]=="3")
{
 include_once ("contact.php");
}
else {
 include_once ("404.php");
}
?><?php include_once ("footer.php");?>