<?php
	session_start();
	include_once("conexao.php");
	//Verifica se os campos possuem dados 
	if((isset($_POST['emailadm'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($mysqli, $_POST['emailadm']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
		$senha = md5($senha);
		
		$result_usuario = "SELECT * FROM tblcadadm WHERE emailadm = '$emailadm' && senha = '$senha'";
		$resultado_usuario = mysqli_query($mysqli, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nomeadm'];
			$_SESSION['usuarioEmail'] = $resultado['emailadm'];
			$_SESSION['usuarioTelefone'] = $resultado['teladm'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];

			if($_SESSION['usuarioEmail'] == "danda.dolls@hotmail.com"){
				header("Location:configlistafornecedor.php");
			
			}else{
				$_SESSION['loginErro'] = "Erro - Entre em contato ";
				header("Location: adm.php");
			}
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: adm.php");
		}
	}
?>
