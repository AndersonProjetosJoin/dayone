<header>
    <h3>Inserir Contato</h3>
</header>

<?php
    $nomeContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["nomeContato"]));
    $cpfContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["cpfContato"]));  
    $emailContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["emailContato"])); 
    $telefoneContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["telefoneContato"])); 
    $cepContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["cepContato"])); 
    $enderecoContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["enderecoContato"])); 
    $sexoContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["sexoContato"])); 
    $dataNascContato = strip_tags( mysqli_real_escape_string($conexao,$_POST["dataNascContato"])); 


    $sql = "INSERT INTO tbcontatos (
        nomeContato,
        cpfContato,
        emailContato,
        telefoneContato,
        cepContato,
        enderecoContato,
        sexoContato,
        dataNascContato

    )
    VALUES (
        '{$nomeContato}',
        '{$cpfContato}',
        '{$emailContato}',
        '{$telefoneContato}',
        '{$cepContato}',
        '{$enderecoContato}',
        '{$sexoContato}',
        '{$dataNascContato}'
        )    
    ";
    mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
    echo "O registro foi inserido com sucesso!";
?>