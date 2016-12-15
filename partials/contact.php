<?php

if(isset($_POST['submit'])){

	if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])){

		    $header="MIME-Version: 1.0\r\n";
			$header.='From:"portfolio"'."\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';
			$message='
		<html>
			<body>
				<div align="center">
					
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					
				</div>
			</body>
		</html>
		';
		mail("gianni_guatieri@hotmail.com", "CONTACT - Portfolio", $message, $header);
		$msg="<div class='alert alert-success'>Votre message a bien été envoyé! </div>";
	}else{
		$msg="<div class='alert alert-danger'>Tous les champs doivent être complétés !</div>";
	}
}
?>


	<section id="contact">
		<div class="container">
			<div class="row" >
				<div class="col-md-6 col-md-offset-3">
					<h1>Formulaire de contact</h1>
					<?php
						if(isset($msg))
							{
								echo $msg;
							}
					?>
					<p style="font-size: 17px;">Pour toutes questions, envoyer un message via le formulaire ci-dessous.</p>
					<p style="font-size: 17px;">J'y répondrai au plus vite.</p>
					<form method="post" role="form">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="votre nom" >
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="votre email" >
						</div>
						<div class="form-group">
								<textarea name="message" rows="5" class="form-control" placeholder="votre message..." ></textarea>
						</div>
						<div align="center">
						<input type="submit" name="submit" class="btn btn-secondary" value ="Envoyer" />
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>
	
