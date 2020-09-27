<?php
session_start();
require_once('./Control/function.php');
//$userGet = $_GET['userT'];
$b = selectUserData($_SESSION['Username']);
$user = $b['user'];
$color = $b['colors'];
$c = friendsList($_SESSION['Username']);
$friends = $c['friends'];
//$_GET['talk'] = $user->username;
$c = selectUserData($_GET['talk']);
$receiver = $c['user'];
if (isset($_POST['logoutbtn'])) {
    logOut($_SESSION['Username']);
}
//$messages = messageList($user->username,$receiver->username);
//$messages->fetch(PDO::FETCH_OBJ);
//while($message = $messages->fetch(PDO::FETCH_OBJ)) {
//      echo $message->message;
//  }

//echo "<pre>";
//var_dump($messages);
//echo "</pre>";
//die();
?>
<!DOCTYPE html><html class=''>
<head>
<meta charset='UTF-8'>
<meta name="robots" content="noindex">
<title>Chat Area | Home Chat</title>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>
<script src="https://kit.fontawesome.com/fc7dee9de7.js"></script>
<link rel="stylesheet" href="./css/hom.css" type="text/css">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<style class="cp-pen-styles">
</style></head><body>
<div id="frame">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="<?php echo $user->profileImg ?>" class="online" alt="" />
				<p><?php echo $user->name ?></p>
			</div>
		</div>
		<div id="search">
			<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
			<input type="text" placeholder="Search contacts..." id="searchFriend">
		</div>
		<div id="contacts">
			<ul>
			  <?php foreach($friends as $friend):?>
				<li class="contact">
					<div class="wrap">
                     <a href="?<?php echo "talk=".$friend->username; ?>" style="text-decoration:none;color:snow;" class="link">
                      <?php if($friend->status == "On"):?>
                          <span class="contact-status online"></span>
                      <?php else: ?>
                          <span class="contact-status busy"></span>
                      <?php endif ?>
                          <img src="<?php echo $friend->profileImg ?>" alt="" />
                          <div class="meta">
                              <p class="name"><?php echo $friend->name?></p>
                          </div>
                      </a>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div id="bottom-bar">
		<form method="post">
			<button id="addcontact" type="submit" name="logoutbtn"><i class="fas fa-sign-in-alt"></i> <span>Logout</span></button>
<!--			<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>-->
        </form>
		</div>
	</div>
	<div class="content">
        <div id="mySidenavp" class="">
          <a href="#" id="about" onclick="openNav()"><i class="fa fa-cog fa-fw" aria-hidden="true"></i></a>
        </div>
        <div id="mySidenav" class="sidenav">
          <div class="Themes">
          <h3 href="#"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>THEME SETTINGS</h3></div>
          <hr style="margin-top:10px;">
          <div class="sidebarcolors">
            
          </div>
          <div class="sidebarcolors">
            <h5>BACKGROUND COLOR</h5>
            
            <label for="">
              <button class="btnColor" id="BackgroundlightBlue" style="background-image: linear-gradient(to right, #ffffff, #e7d7ff, #daacff, #d678ff, #da22ff)"></button>
            </label>
            <label for="">
              <button class="btnColor" id="BackgroundlightGrey" style="background-image: linear-gradient(to right, #ffffff, #f6fcff, #e4fdff, #d1feff, #ccfde9, #ccfbd8, #d3f7c5, #e0f2b1, #e1efa2, #e4ec93, #e8e984, #ede574)"></button>
            </label>
            <label for="">
              <button class="btnColor" id="BackgroundlightGreen" style="background-image: linear-gradient(to right, #ffffff, #edf2ff, #cfe8ff, #a6e1fe, #74daf1, #5ac9e4, #3cb9d7, #00a9cb, #008bc1, #006cb2, #004c9d, #1a2980)"></button>
            </label>
            <label for="">
              <button class="btnColor" id="Backgroundsnow" style="background-image: linear-gradient(to right, #ffffff, #e6e0ff, #d0c1fd, #bba2f9, #a782f3, #9a76f0, #8c6aee, #7c5feb, #6e66eb, #616cea, #5371e9, #4776e6)"></button>
            </label>
            <label for="">
              <button class="btnColor" id="BackgroundlightAqua" style="background-image: linear-gradient(to right, #ffffff, #f2eef5, #eadde8, #e4ccd8, #dfbac4, #deb7c3, #ddb4c1, #dcb1c0, #dcbdd3, #dbc9e2, #dad6ef, #dae2f8)"></button>
            </label>
            <label for="">
              <button class="btnColor" id="BackgroundlightRed" style="background-image: linear-gradient(to right, #ffffff, #e6fdff, #b3ffff, #a5ffdb, #d8f695);"></button>
            </label>
            <label for="">
              <button class="btnColor" id="BackgroundlightOrange" style="background-image: linear-gradient(to right, #ffffff, #f1e1f9, #f3bfe6, #fa9ac2, #fb7590, #e25f72, #c84a56, #ad363b, #812a34, #561f29, #2d141a, #000000)"></button>
            </label>
            <label for="">
              <button class="btnColor" id="BackgroundlightYellow" style="background-image: linear-gradient(to right, #ffffff, #fcf4fc, #ffe7f0, #ffdbda, #ffd3bf, #fad4ad, #ecd79e, #d5dc96, #b2e2a7, #91e5c1, #77e4dc, #70e1f5)"></button>
            </label>
            
            <input type="hidden" name="colorBg" id="colorBg" value="">
          </div>
          
          
        </div>
		<div class="contact-profile" style="background-image:<?php echo $color->bgColor;?>;border-bottom:1px solid #000;">
			<img src="<?php echo $receiver->profileImg; ?>" alt="" />
			<p><?php echo $receiver->name; ?></p>
		</div>
		<div class="messages" style="background-image:<?php echo $color->bgColor;?>" id="Megs">
			<ul id="msg">
			</ul>
		</div>
		<form method="POST" id="formMessage" name="formMessage">
          <input  type="hidden" id="senderUs" autocomplete="off" value="<?php echo $user->username; ?>">
		  <input  type="hidden" id="receiverUs" autocomplete="off" value="<?php echo $_GET['talk']; ?>">
          <div class="message-input">
              <div class="wrap">
              <input type="text" placeholder="Write your message..." id="messageUs" value="" autocomplete="off">
              <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
              <button class="submit" name="btn" id="btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </div>
          </div>
		</form>
	</div>
</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
    function newMessage(e){
        e.preventDefault();
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
        let docHeight = $(document).height();
        let sender = $('#senderUs').val();
        let receiver = $('#receiverUs').val();
        let messageUs = $('#messageUs').val();
        if($.trim(messageUs) == '') {
		  return false;
	    }
        $('<li class="sent"><p>' + messageUs + '</p></li>').appendTo($('.messages ul'));
        $(".messages").animate({scrollTop: docHeight + 93}, "fast");
        docHeight += 93;
        $.ajax({
                type : 'POST',
                url  : 'Control/test.php',
                data : {		sender   : sender,
                                receiver : receiver,
                                messageUs  : messageUs},
                success: function(refresh) {
                        $('#messageUs').val('');
                }
        });
    }
  $('#btn').click(function(e) {
      newMessage(e);
      return false;
  });
  $(window).on('keydown', function(e) {
    if (e.which == 13) {
      newMessage(e);
      return false;
    }
  });
  let SenderUsername = $('#senderUs').val();
  let ReceiverUsername = $('#receiverUs').val();
//  let colorBg = $('#colorBg');
  const link = "Control/test.php?gSender="+SenderUsername+"&gReceiver="+ReceiverUsername;
  function getMessage(){
    $('#msg').load(link);
  }
  setInterval(getMessage, 3000);
  let lnk = document.getElementsByClassName('link');

    if (window.addEventListener) {
        document.addEventListener('click', function (e) {
            if (e.target.class === lnk.class) {
//                e.preventDefault();
            }
        });
    }
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  function addColor(ColorPri, ColorSec) {
     $('#sidepanel').css("background-color", ColorPri);
      $('#searchFriend').css("background-color", ColorPri);
      $('#addcontact').css("background-color", ColorPri);
      $('#settings').css("background-color", ColorPri);
      $('li.contact').hover(function(){
        $(this).css("background-color", ColorSec);
        }, function(){
        $(this).css("background-color", ColorPri);
    });
  }
  function addlinear(linearColor) {
    $('.messages').css("background-image", linearColor);
    $('.contact-profile').css("background-image", linearColor);
//    colorBg.val(linearColor);
  }
  $('.btnColor').click(function(e){
    if (e.target.id === "BackgroundlightBlue") {
      addlinear("linear-gradient(to right, #ffffff, #e7d7ff, #daacff, #d678ff, #da22ff)");
//      getbgColor();
    } else if (e.target.id === "BackgroundlightGrey") {
      addlinear("linear-gradient(to right, #ffffff, #f6fcff, #e4fdff, #d1feff, #ccfde9, #ccfbd8, #d3f7c5, #e0f2b1, #e1efa2, #e4ec93, #e8e984, #ede574)");
    } else if (e.target.id === "BackgroundlightGreen") {
      addlinear("linear-gradient(to right, #ffffff, #edf2ff, #cfe8ff, #a6e1fe, #74daf1, #5ac9e4, #3cb9d7, #00a9cb, #008bc1, #006cb2, #004c9d, #1a2980)");
    } else if (e.target.id === "Backgroundsnow") {
      addlinear("linear-gradient(to right, #ffffff, #e6e0ff, #d0c1fd, #bba2f9, #a782f3, #9a76f0, #8c6aee, #7c5feb, #6e66eb, #616cea, #5371e9, #4776e6)");
    } else if (e.target.id === "BackgroundlightAqua") {
      addlinear("linear-gradient(to right, #ffffff, #f2eef5, #eadde8, #e4ccd8, #dfbac4, #deb7c3, #ddb4c1, #dcb1c0, #dcbdd3, #dbc9e2, #dad6ef, #dae2f8)");
    } else if (e.target.id === "BackgroundlightRed") {
      addlinear("linear-gradient(to right, #ffffff, #e6fdff, #b3ffff, #a5ffdb, #d8f695)");
    } else if (e.target.id === "BackgroundlightOrange") {
      addlinear("linear-gradient(to right, #ffffff, #f1e1f9, #f3bfe6, #fa9ac2, #fb7590, #e25f72, #c84a56, #ad363b, #812a34, #561f29, #2d141a, #000000)");
    } else if (e.target.id === "BackgroundlightYellow") {
      addlinear("linear-gradient(to right, #ffffff, #fcf4fc, #ffe7f0, #ffdbda, #ffd3bf, #fad4ad, #ecd79e, #d5dc96, #b2e2a7, #91e5c1, #77e4dc, #70e1f5)");
    } else if(e.target.id ==="Messageblueviolet") {
      $('li.sent p').css("background-color", "#8a2be2");
    }else if(e.target.id ==="Messagehotpink") {
      $('li.sent p').css("background-color", "#ff69b4");
    }else if(e.target.id ==="Messagelightskyblue") {
      $('li.sent p').css("background-color", "#87cefa");
    }else if(e.target.id ==="Messagespringgreen") {
      $('li.sent p').css("background-color", "#00fa9a");
    }else if(e.target.id ==="MessagelightAqua") {
      $('li.sent p').css("background-color", "#7FFFD4");
    }else if(e.target.id ==="MessagelightRed") {
      $('li.sent p').css("background-color", "#FF033E");
    }else if(e.target.id ==="Messagelightsalmon") {
      $('li.sent p').css("background-color", "#ffa07a");
    }else if(e.target.id ==="Messagelightseagreen") {
      $('li.sent p').css("background-color", "#20b2aa");
    }
  });
//  let color = colorBg.val();
//  const gbColorlink = "Control/test.php?SenderUsername="+SenderUsername+"&colorBg="+color;
//  function getbgColor(){
//    $('#Megs').load(gbColorlink);
//  }
//  setInterval(getbgColor, 3000);
</script>
</body></html>