<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Meu Portifolio</title>
</head>
<body>

    <h1>

    <?php 

        $nome = "Anderson Henrique Moz";

        $saudacao = "Olá";

        $titulo = $saudacao . " Eu sou  o  " . $nome;

        $subtitulo = "Seja bem vindo ao meu portifolio !!";

        $Nascido = " Nascido em Paiçandu - PR, 28/03/2000";

        $ano = "Idade atual: 24 anos";
        $graduação = "Formação acadêmica: 
        Graduando em Engenharia da Computação pela UNINGÁ";
        $Linguística = "Linguística:Português - Nativo.";
        $ExperiênciaProfissional = "Experiência Profissional:";
        $HospitalMemorialUningá = "Hospital Memorial Uningá
        
        ";
        $Função = "Função: Técnico de Informática, Assistente de Engenharia Clínica";
        $Período = " Período: 30/09/2022 à 23/02/2024";


        
    ?>
        <h1> 
        <p></p><?php echo $titulo; ?></p>
        <p> <?php echo $subtitulo; ?></p>
        <p><?php  echo $ano;  ?></p>
        <p><?php echo $Nascido; ?></p> 
        <p><?php echo $graduação; ?></p> 
        <p><?php echo $Linguística; ?></p>
        <p><?php echo $ExperiênciaProfissional; ?></p>
        <p><?php  echo $Função;?></p>
        <p><?php  echo $Período;?></p>
      
    </h1>


   
</body>
</html>