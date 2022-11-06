<?php
//Base de donné
//l'envoie du mail
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$toEmail = "massinissa.bali2@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $mail_msg = "Vos informations de contact ont été reçues avec succés.";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "Erreur lors de l'envoi de l'e-mail.";
		$type_mail_msg = "error";
	}
}
?>

	
	<?php include('nav.php');?>
	<style>
	#box{
	width:auto;
	margin:20px auto;
	padding-top:20px;
	font-family: serif;
}
#form{
	border-radius:2px;
	padding:20px 30px;
	box-shadow:0 0 15px;
	font-size:14px;
	font-weight:bold;
	width:70%;
	margin-left:15%;
	
}
h3{
	text-align:center;
	font-size:20px;
}
input{
	width:100%;
	height:35px;
	margin-top:5px;
	margin-bottom: 20px;
	border:1px solid #999;
	border-radius:3px;
	padding:5px;
}
input[type=submit]{
	background-color:#ca1e1e;
	border:1px solid white;
	font-family: serif;
	font-Weight:bold;
	font-size:18px;
	color:white;
}
textarea{
	width:100%;
	height:80px;
	margin-top:5px;
	border-radius:3px;
	padding:5px;
	resize:none;
}
span{
	color:red
}
.successMessage{
    background-color: #7acc7d;
    border: #2b5a2d 1px solid;
    padding: 5px 9px;
    color: #262b26;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9em;
}
.errorMessage{
    background-color: #e64141;
    border: #da1414 1px solid;
    padding: 5px 10px;
    color: #fdf7f7;
    border-radius: 4px;
}
.info{
    font-size: 0.9em;
    color: #d67262;
    letter-spacing: 2px;
    padding-left: 5px;
}
	</style>
	<section>
	<div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
		    <h3>Formulaire de contact</h3>
		    <label>Nom: <span>*</span></label>
		    <input type="text" id="name" name="name" placeholder="Nom"/>
		    <label>Email: <span>*</span></label><span id="info" class="info"></span>
		    <input type="text" id="email" name="email" placeholder="Email"/>
		    <label>Sujet: <span>*</span></label>
		    <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
		    <label>Message:</label>
		    <textarea id="message" name="message" placeholder="Message..."></textarea>
		    <input type="submit" name="send" value="Envoyer le message"/>
			<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
		  </form>
	    </div>
		</section>
	<?php include('footer.php');?>
		