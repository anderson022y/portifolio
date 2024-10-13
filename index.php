<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/index.css">
    <title> Meu Portifolio</title>
</head>
<body>
       
    <h1 class="h1">
  <img class="img"  src="/assest/logo.png" alt="Anderson Henrique Moz">
    <?php 

        $saudacao = "Olá";

        $nome = "Anderson Henrique Moz";

        $titulo = $saudacao . "  Sou " . $nome;

        $subtitulo = "Seja bem vindo !!";

        $apresentacao = "Apresentação";

        $descricao0 = "Dados de identificação:";
    
        $descricao1 = "Naciolidade: Brasileiro";

        $descricao2 = "Idade: 24 anos";        

        $descricao3 = "Whatsapp: (44) 9. 8860-0664";

        $descricao4 = "Email: andersonmoz2018@outlook.com";

        $descricao5 = "Linguística: Português - Nativo.";

        $descricao6 = "Estado Civil: Solteiro";
        
        $projetos = [
            "Graduação em Engenharia da Computação pela universidade UNINGÁ.",
            "Formação em Gestão Empresarial pela Visual Studio.",
            "Proprietário da Anderson | T.I ( MEI)",
        ];


        $experiência = "Experiência Profissionais:";

        $Cursosformações = "Cursos & Formações";

        $locais = "Hospital Memorial UNINGÁ";

        $sublocais =[
            "Função: Tecnico de informática & 
            Assistente de Engenharia Clínica Hospitalar",

            "Período: 30/09/2022 à 23/02/2024",

            "Atividades Desenvolvidas no setor de Tecnologia 
            da informação: Manutenção de computadores, 
            troca de tornes, configurações de impressoras, 
            configurações de redes.",

            "Atividades Desenvolvidas no setor de Engenharia Clínica: Documentação dos equipamentos clínicos,
             Manutenção preventiva e corretiva, pedidos de compras, abertura de chamdos aos tercerizados."
        ];

        $FCS =[
            "O básico de Git e GitHub - Carga horária: 1 horas",
            "Clean Code - Carga horária: 3 horas ",
            "Curso Online de PHP - Carga horária: 5 horas",
            "Gestão de contratos: dicas e cuidados gerais",
            "Governança de TI: gestão de demandas de serviços",
            "Certificado para Treinamento Controle de equipamentos Tasy",
            "Alinhamento de TI ao negócio: estratégias e desenho de serviços",
            "Curso Redes: montando um projeto
             do cliente até o provedor de serviços",
          
        ];
    ?>
        <h1 class="titulo"> 
        <p></p><?php echo $titulo;?></p>
        </h1>

        <h2 class="subtitulo">
        <p><?php echo $subtitulo;?></p>
        </h2>

        <hr/>
       
        <div class="topicos">

            <h2 class="apresentação"><?=$apresentacao?></h2>

            <p><?=$descricao0?></p>

            <p><?=$descricao1?></p>

            <p><?=$descricao2?></p>

            <p><?=$descricao3?></p>

            <p><?=$descricao4?></p>

            <p><?=$descricao5?></p>

            <p><?=$descricao6?></p>

        </div>
      
    <hr>
    <ul class="list">
        
    <?php  foreach ($projetos as $projeto) 
                echo  "<li>{$projeto}</li>";
    
    ?>
    </ul>
  
       <hr> 

      
     <div class="cetificacao">
  
    <h3 class="exp"><?=$experiência?></h3>

<div class="locais">

   <h3 class="hl"><?=$locais?></h3>

</div>
    <ul class="sublocais">
  
    <?php  foreach ($sublocais as $sublocal) 


       echo  "<li>{$sublocal}</li>";

    ?>
    </ul>
   
    <h3 class="cursos"><?=$Cursosformações?></h3>

    <ul class="FCS">
  
  <?php  foreach ($FCS as $FC) 


     echo  "<li>{$FC}</li>";

  ?>
  </ul>

  <hr>

        <footer class="footer">Paiçandu Paraná</footer>

</body>
</html>