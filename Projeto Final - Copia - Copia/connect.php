<?php
    $name = $_POST['name'];
    $date = $_POST['date'];
    $sexo = $_POST['sexo'];
    $tel = $_POST['tel'];
    $cargo-pretendido = $_POST['cargo-pretendido'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $identidade = $_POST['identidade'];
    $cpf = $_POST['cpf'];
    $habilitacao = $_POST['habilitacao'];
    $veiculo = $_POST['veiculo'];

        $query= mysql_query($conn, "SELECT * FROM 'user' WHERE cpf= '$cpf'");
    if(mysqli_num_rows($query)>0){
        echo "CPF já cadastrado";
    }else{

    
    
    
    //DataBase
    $conn = new mysqli('localhost', 'root', '', 'preojtofinal');
    if($conn->connect_error) {
        die('Conexão Caiu : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, date, sexo, tel, cargo-pretendido, email, endereco, cep, bairro, cidade, identidade, cpf, habilitacao, veiculo
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?");
        $stmt->blind_param("sssisssissiiss", $name, $date, $sexo, $tel, $cargo-pretendo, $email, $endereco, $cep, $bairro, $cidade, $identidade, $cpf, $habilitacao, $veiculo);
        $stmt->execute();
        echo "Cadastro Feito Com Sucesso";
        $stmt->close();
        $conn->close();
    }
}

?>
