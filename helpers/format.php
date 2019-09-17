<?php
Class Format{
  
  //Date formation
  public function date($date){

    return date('F j,Y,g:i a',strtotime($date));
  }
  //Text formation. 
  public function short($text,$lt=400){

     $text=$text." ";
     $text=substr($text,0,$lt);
     $text=substr($text,0,strrpos($text,' '));
     $text=$text.".......";
     return $text;
  }
  public function validation($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
}
?>