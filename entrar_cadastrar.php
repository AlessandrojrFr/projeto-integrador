<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/entrar_cadastrar.css">
    <title>𝑬𝑵𝑻𝑹𝑨𝑹 𝑪𝑨𝑫𝑨𝑺𝑻𝑹𝑨𝑹</title>
  </head>
  <body>
  <header>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="shop.php">Compras</a></li>
                <li><a href="roupinha.php">Promoções</a></li>
                <li><a href="entrar_cadastrar.php">Cadastro</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="minhaconta.php">Minha Conta</a></li>
                <li><a href="restrita.php">Login up</a></li>
            </ul>
        </nav>
    </header>
  <br>
<br>

<div class="container_form">

<h1>Faça seu Cadastro aqui!</h1>

<form class="form" action="#" method="post">
    
    <div class="form_grupo">
        <label for="nome" class="form_label">𝗡𝗼𝗺𝗲</label>
        <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
    </div>
    
    <div class="form_grupo">
        <label for="e-mail" class="form_label">𝗘𝗺𝗮𝗶𝗹</label>
        <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
    </div>
    
    <div class="form_grupo">
        <label for="datanascimento" class="form_label">𝗗𝗮𝘁𝗮 𝗱𝗲 𝗡𝗮𝘀𝗰𝗶𝗺𝗲𝗻𝘁𝗼</label>
        <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento" required>
    </div>        

    <div class="form_grupo">
        
        <label for="estadocivil" class="text">𝗘𝘀𝘁𝗮𝗱𝗼 𝗰𝗶𝘃𝗶𝗹</label>
        <select name="estadocivil" class="dropdown" required>
            
            <option selected disabled class="form_select_option" value="">Selecione</option>
            <option value="Solteiro" class="form_select_option">Solteiro(a)</option>
            <option value="Casado" class="form_select_option">Casado(a) </option>
            <option value="Divorciado" class="form_select_option">Divorciado(a)</option>                    
            <option value="Viúvo" class="form_select_option">Viúvo(a)</option>                    
        
        </select>

    </div>

    <div class="form_grupo">

        <span class="legenda">Sexo:</span>
        
        <div class="radio-btn">
            <input type="radio" class="form_new_input" id="masculino" name="sexo" value="Masculino" required="required">
            <label for="masculino" class="radio_label form_label"> <span class="radio_new_btn"></span> Masculino</label>
        </div>

        <div class="radio-btn">
            <input type="radio" class="form_new_input" id="feminino" name="sexo" value="Feminino" required="required">
            <label for="feminino" class="radio_label form_label"> <span class="radio_new_btn"></span> Feminino</label>
        </div>

    </div>
  

    <div class="form_grupo">

        <span class="legenda">𝗩𝗼𝗰𝗲̂ 𝗾𝘂𝗲𝗿 𝗽𝗿𝗼𝗰𝘂𝗿𝗮𝗿 𝗼 𝗾𝘂𝗲?</span>

        <div class="check-btn">
            <input type="checkbox" class="form_new_input" id="html5" name="aprender" value="html5">
            <label for="html5" class="form_label check_label"> <span class="check_new_btn"></span>Camisas</label>
        </div>

        <div class="check-btn">
            <input type="checkbox" class="form_new_input" id="css3" name="aprender" value="css3">
            <label for="css3" class="form_label check_label"><span class="check_new_btn"></span>Acessórios</label>
        </div>

        <div class="check-btn">
            <input type="checkbox" class="form_new_input" id="jquery" name="aprender" value="jquery">
            <label for="jquery" class="form_label check_label"><span class="check_new_btn"></span>Shorts</label>
        </div>

        <div class="check-btn">
            <input type="checkbox" class="form_new_input" id="wordpress" name="aprender" value="wordpress">
            <label for="wordpress" class="form_label check_label"><span class="check_new_btn"></span>Tênis</label>
        </div>
        

        <div class="form_message">
            
            <label for="message" class="form_message_label">𝗗𝗶𝗴𝗶𝘁𝗲 𝗮𝗾𝘂𝗶 𝘀𝘂𝗮 𝘀𝘂𝗮 𝗺𝗲𝗻𝘀𝗮𝗴𝗲𝗺:</label>
            <textarea name="mensagem" id="message" cols="30" rows="3" class="form_input message_input" required></textarea>

        </div>

        <div class="submit">

          <input type="hidden" name="acao" value="enviar">
          <button type="submit" name="Submit" class="submit_btn" >Cadastrar</button>
        
        </div>
</form>

</div><!--container_form-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>