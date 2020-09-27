<?php
if ( ! function_exists ( '_tr' ) ) {
    function _tr( $str ) {
        return trim( filter_input(INPUT_POST, $str, FILTER_SANITIZE_STRING) );
    }
}
if ( !function_exists( "BindStr" ) ) {
  function BindStr( $object, $number, $string, $type = null ) {
    // Everything in top is true than return Object
    switch ( is_null( $type ) ) {
      case is_int( $type ):
        $type = PDO::PARAM_INT;
        break;
      case is_bool( $string ):
        $type = PDO::PARAM_BOOL;
        break;
      case is_null( $string ):
        $type = PDO::PARAM_NULL;
        break;
      case is_string( $string ):
        $type = PDO::PARAM_STR;
        break;
    }
    $object->bindValue( $number, $string, $type );
    return $object;
  }
}
function login($username, $passowrd) {
  include("db.php");
  try{
    $sql = "SELECT username, password FROM users WHERE username = ? AND password = ?";
    $query = $db->prepare($sql);
    BindStr( $query, 1, $username);
    BindStr( $query, 2, $passowrd);
    $query->execute();
    $result = $query->fetchColumn();
    if ( $result ) {
      $updateSql = "UPDATE users SET status = 'On' WHERE Username = ?";
      $query = $db->prepare($updateSql);
      BindStr( $query, 1, $username);
      $query->execute();
      header("location: home.php?talk=$username");
    } else  echo "<script>alert('Email / Password Or Class are Incorrect')</script>";
  } catch (Exception $e) {
      echo "Error !! : ".$e->getMessage();
      return false;
  }
  return true;
}
function loginAdmin($username, $passowrd) {
  include("db.php");
  try{
    $sql = 'SELECT username, password FROM users WHERE username = ? AND password = ? AND class = "Admin"';
    $query = $db->prepare($sql);
    BindStr( $query, 1, $username);
    BindStr( $query, 2, $passowrd);
    $query->execute();
    $result = $query->fetchColumn();
    if ( $result ) {
      header("location: dashbord.php");
    } else  echo "<script>alert('Email / Password Or Class are Incorrect')</script>";
  } catch (Exception $e) {
      echo "Error !! : ".$e->getMessage();
      return false;
  }
  return true;
}
function selectUserData($user) {
  $data = [];
  include('db.php');
  try{
    $sql = "SELECT * FROM users WHERE username = ?";
    $query = $db->prepare($sql);
    BindStr($query, 1, $user);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_OBJ);
    $data['user'] = $row;
    if ($data){ 
      $sqlcolor = "SELECT * FROM colors WHERE username = '".$user."'";
      $query = $db->prepare($sqlcolor);
      $query->execute();
      $data['colors'] = $query->fetch(PDO::FETCH_OBJ);
    }
    return $data;
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
}
function friendsList($user) {
  $allFriends = [];
  include('db.php');
  try {
    $sql = "SELECT * FROM users WHERE username = ?";
    $query = $db->prepare($sql);
    BindStr($query, 1, $user);
    $query->execute();
    $data = $query->fetchAll( PDO::FETCH_OBJ );
    if ( count($data) ) {
      $sql = "SELECT * FROM users WHERE class = '" . $data[0]->class . "'";
      $query = $db->prepare($sql);
      $query->execute();
      $allFriends['friends'] = $query->fetchAll( PDO::FETCH_OBJ );
      return $allFriends;
    }
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
}
function messageList($sender,$receiver) {
  include('db.php');
  try{
    $sql = "SELECT * FROM boxchat WHERE 
            sender = ? AND receiver =? OR 
            receiver = ? AND sender = ? ORDER BY date DESC LIMIT 15";
    $query = $db->prepare($sql);
    BindStr( $query, 1,  $sender);
    BindStr( $query, 2,  $receiver);
    BindStr( $query, 3,  $sender);
    BindStr( $query, 4,  $receiver);
    $query->execute();
    $messages =  $query->fetchAll(PDO::FETCH_ASSOC);
    asort($messages);
    foreach($messages as $message) {
      if($message['sender'] == $sender) {
        echo "<li class='sent'>
                <p>".$message['message']."</p>
              </li>";
      } else {
        echo "<li class='replies'>
                <p>".$message['message']."</p>
              </li>";
      }
    }
  } catch (Exception $e) {
    echo "Error !!: ".$e->getMessage();
    return false;
  }
}
function insertMessage($sender, $receiver, $message) {
  include('db.php');
  try{
    $sql = "INSERT INTO boxchat(sender,receiver,message) VALUES(?,?,?)";
    $query = $db->prepare($sql);
    BindStr($query, 1, $sender);
    BindStr($query, 2, $receiver);
    BindStr($query, 3, $message);
    $query->execute();
  } catch (Exception $e) {
    echo "Error : ".$e->getMessage();
    return false;
  }
  return true;
}
function logOut($userName) {
  try{
    include('db.php');
    session_destroy();
    $sql = "UPDATE users SET status = 'Off' WHERE Username = ?";
    $query = $db->prepare($sql);
    BindStr( $query, 1, $userName);
    $query -> EXECUTE();
    header("location: login.php?logout=$Username&close=true");
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
  return true;
}
function adminLogOut($userName) {
  try{
    include('db.php');
    session_destroy();
    $sql = "UPDATE users SET status = 'Off' WHERE Username = ?";
    $query = $db->prepare($sql);
    BindStr( $query, 1, $userName);
    $query -> EXECUTE();
    header("location: ev-login.php?logout=$Username&close=true");
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
  return true;
}
//function updateBgColor($BgColor, $Username) {
//  try{
//    include('db.php');
//    $sql = "UPDATE colors SET bgColor = ? WHERE username = ?";
//    $query = $db->prepare($sql);
//    BindStr($query, 1, $BgColor);
//    BindStr($query, 2, $Username);
//    $query->execute();
//  } catch (Exception $e) {
//    echo "Error : ".$e->getMessage();
//    return false;
//  }
//  return true;
//}
//function updateMsgColor($MsgColor, $Username) {
//  try{
//    include('db.php');
//    $sql = "UPDATE colors SET msgColor = ? WHERE username ?";
//    $query = $db->prepare($sql);
//    BindStr($query, 1, $BgColor);
//    BindStr($query, 2, $Username);
//    $query->$excute;
//  } catch (Exception $e) {
//    echo "Error : ".$e->getMessage();
//    return false;
//  }
//  return true;
//}
//$data = selectUserData("envy19");
//echo "<pre>";
//print_r($data);
//echo "<pre>";
function CountVisitor(){
    require 'db.php';
    try{
        $sql = 'SELECT * FROM visitor';
        $query = $db->prepare($sql);
        $query->execute();
        $visitorCount = $query->rowCount();
        echo $visitorCount;
    }catch(Exception $e){
        echo "Error!:".$e->getMessage();
    }     
}
function CountUsers(){
    require 'db.php';
    try{
        $sql = 'SELECT * FROM users';
        $query = $db->prepare($sql);
        $query->execute();
        $visitorCount = $query->rowCount();
        echo $visitorCount;
    }catch(Exception $e){
        echo "Error!:".$e->getMessage();
    }     
}
function CountMsg(){
    require 'db.php';
    try{
        $sql = 'SELECT * FROM boxchat';
        $query = $db->prepare($sql);
        $query->execute();
        $visitorCount = $query->rowCount();
        echo $visitorCount;
    }catch(Exception $e){
        echo "Error!:".$e->getMessage();
    }     
}
function CountAdmin(){
    require 'db.php';
    try{
        $sql = 'SELECT * FROM users WHERE class = "Admin"';
        $query = $db->prepare($sql);
        $query->execute();
        $visitorCount = $query->rowCount();
        echo $visitorCount;
    }catch(Exception $e){
        echo "Error!:".$e->getMessage();
    }     
}
function Get_VisitorCount($Ip_Visit,$Browser_Visit){
  include('db.php');
    try{
        $Ip_Visit = filter_var($Ip_Visit,FILTER_SANITIZE_STRING);
        $Browser_Visit = filter_var($Browser_Visit,FILTER_SANITIZE_STRING);
        $sql = 'INSERT INTO visitor(Ip_Visit, Browser_Visit) VALUES(?, ?)';
        $query = $db->prepare($sql);
        BindStr( $query, 1, $Ip_Visit);
        BindStr( $query, 2, $Browser_Visit);
        $query->execute();
    } catch(Exception $e){
        echo "Error!:".$e->getMessage();
    }  
}
function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

    return 'Other';
}
function userList() {
  $data = [];
  include('db.php');
  try {
    $sql = "SELECT * FROM users ORDER BY idUser DESC";
    $query = $db->prepare($sql);
    $query->execute();
    $data['list'] = $query->fetchAll( PDO::FETCH_OBJ );
    return $data;
  } catch (Exception $e) {
    echo $e->getMessage();
    return false;
  }
}
$data = userList();
$list = $data['list'];
function add_admin($id, $username, $password, $name, $img, $class){
    include('db.php');
    try{
        $sql = 'INSERT INTO users(idUser, username, name, class, profileImg, password) VALUES(?,?,?,?,?,?)';
        $query = $db->prepare($sql);
        BindStr( $query, 1, $id);
        BindStr( $query, 2, $username);
        BindStr( $query, 3, $name);
        BindStr( $query, 4, $class);
        BindStr( $query, 5, $img);
        BindStr( $query, 6, $password);
        $query->execute();
    } catch (Exception $e) {
            echo "ERROR! : ".$e->getMessage();
            return false;
    }
    return true;
}
function addID($tabel, $colum, $strID) {
  include('db.php');
  try{
    $sql = "SELECT * FROM `$tabel`";
    $query = $db->prepare($sql);
    $query->execute();
    $query->fetch(PDO::FETCH_ASSOC);
    if ( $query->rowCount() <> 0 ) {
        $sql = "SELECT `$colum` FROM `$tabel` ORDER BY date DESC LIMIT 1";
        $query = $db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll( PDO::FETCH_OBJ );
        foreach ($rows as $row) {
          $NumID = substr($row->$colum,4);
        }
        if ($NumID == 9) {
          $newNumId = $NumID + 2;
        } else {
          $newNumId = $NumID + 1;
        }
        $newID = $strID . $newNumId;
        return $newID;
    } else {
        $newID = $strID . "1";
        return $newID;
    }
  } catch (Exception $e) {
        echo "Error!: ".$e->getMessage();
		return false;
  }
}
function deleteUser($ID){
    include('db.php');
    try{
        $delete = implode(",", $ID);
        if( $delete =='' ){
            $error_msg =  "alert 'Nothing Selected';";
        }
        $sql = "DELETE FROM users WHERE username IN ('" . $delete . "')";
        $query = $db->prepare($sql);
        $query->execute();
//      $db->exec($sql);
        header('location : removeUser.php?msg=Record_Deleted');
    } catch (Exception $e) {
        echo "Error!:".$e->getMessage();
        return false;
    }
    return true;
}














