<?php
include_once 'dbconnect.php';
include_once 'classes/organiser.php';  
include_once 'classes/event.php';
include_once 'classes/participant.php'; 

if(isset($_POST["view_event"]))
{
$id=$_POST["view_event"];
$event=new event($pdo);
$event->view_event_info($id);
}

elseif(isset($_POST["view_organiser"]))
{
$id=$_POST["view_organiser"];
echo $id;
$organiser=new organiser($pdo);
$organiser->view_organiser_info($id);
}


elseif(isset($_GET["view_event"]))
{
$id=$_GET["view_event"];
echo $id;
$event=new event($pdo);
$event->view_event_info($id);
?>
<input type="button" name="register" value="register">
<?php
}

else
{
$id=$_GET["view_organiser"];
echo $id;
$organiser=new organiser($pdo);
$organiser->view_organiser_info($id);
}

?>