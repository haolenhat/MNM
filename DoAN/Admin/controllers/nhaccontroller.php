<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$nhac=new nhacmodel();
if ($action=='index')
{
    $data =$nhac->all();
    include './views/nhac/nhac.php';
}

if($action=='delete')
{
  $id_nhac= isset($_GET['id'])?$_GET['id']:'';
  if($id_nhac!='')
  {
    $data=$nhac->delete($id_nhac);
    header('location: ./index.php?controller=nhaccontroller&action=index');
  }
}

if($action=='them')
{
    $id_nhac=$_POST['id_nhac'];
    $tennhac=$_POST['tennhac'];
    $tentacgia=$_POST['tentacgia'];
    $video=time().'-'.$_FILES['video']['name'];
    move_uploaded_file($_FILES['video']['tmp_name'], "views/assets/video/$video");
    $data=$nhac->insert($id_nhac,$tennhac,$video,$tentacgia);
    header('location: ./index.php?controller=nhaccontroller&action=index');
}
    

if($action=='sua')
{   
    $id_nhac = isset($_GET['id'])?$_GET['id']:'';
    $data =$nhac->hiensua($id_nhac);
    include './views/nhac/suanhac.php';
}

if($action=='xulysua')
{
    $tennhac=$_POST['tennhac'];
    $tentacgia=$_POST['tentacgia'];
    $video_old=$_POST['video'];
    $video_new=$_FILES['video_new']['name'];
    if($video_new !='')
    { 
    $video=time().'-'.$_FILES['video_new']['name'];
    move_uploaded_file($_FILES['video_new']['tmp_name'], "views/assets/video/$video");
    }else{
     $video=$video_old;
    }
    $data=$nhac->suaNhac($tennhac,$video,$tentacgia);
    header('location: ./index.php?controller=nhaccontroller&action=index');
}




