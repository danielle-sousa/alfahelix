<?php	
    $userName 		= $_POST['nome'];
    $userEmail	 	= $_POST['email'];
    $userTel	 	= $_POST['tel'];
    $userMessage 		= $_POST['mensagem'];

echo $userName;
echo $userEmail;
echo $userTel;
echo $userMessage

	$to 			= "daniellexsousa@gmail.com";
	$subject 		= "Contato Alfahelix";
	$body 			= "Informações de contato:";

	$body .= "\r\n Nome: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Telefone: " . $userTel;
	$body .= "\r\n Mensagem: " . $userMessage;

    //mail($to, $subject, $body);

    print 'Thanks for your message!';
    
?>
