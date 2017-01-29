<?php
$action=$_REQUEST['action'];
if ($action=="")    
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Name:<br>
    <input name="Name" type="text" value="" size="30"/><br>
    Email:<br>
    <input name="Email" type="text" value="" size="30"/><br>
    Message:<br>
    <textarea name="Message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                
    {
    $name=$_REQUEST['Name'];
    $email=$_REQUEST['Email'];
    $message=$_REQUEST['Message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("youremail@yoursite.com", $subject, $message, $from);
        'host' => 'ssl://smtp.gmail.com',
		echo "Email sent!";
    }  
    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'johndoe@gmail.com',
        'password' => 'passwordxxx'
?>
