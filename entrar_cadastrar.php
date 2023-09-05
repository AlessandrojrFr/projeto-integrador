<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="entrar_cadastrar.css">
    <title>𝑬𝑵𝑻𝑹𝑨𝑹 𝑪𝑨𝑫𝑨𝑺𝑻𝑹𝑨𝑹</title>
  </head>
  <body>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicial.php"><img src="img talarico/BackgroundEraser_20230811_081558768.png" height="59" width="59">𝕭𝖑𝖆𝖈𝖐 𝕯𝖔𝖌</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">𝗘𝗻𝘁𝗿𝗮𝗿/𝗖𝙖𝙙𝙖𝙨𝙩𝙧𝙖𝙧</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> 𝗠𝗶𝗻𝗵𝗮 𝗖𝗼𝗻𝘁𝗮
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="infantil.php">𝐒𝐞𝐬𝐬𝒂̃𝐨 𝐢𝐧𝐟𝐚𝐧𝐭𝐢𝐥</a></li>
              <li><a class="dropdown-item" href="masculino.php">𝐒𝐞𝐬𝐬𝒂̃𝐨 𝙢𝗮𝘀𝗰𝘂𝗹𝗶𝗻𝗼</a></li>
              <li><a class="dropdown-item" href="feminino.php">𝐒𝐞𝐬𝐬𝒂̃𝐨 𝗳𝗲𝗺𝗶𝗻𝗶𝗻𝗼</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="entrar_cadastrar.php">𝗘𝗻𝘁𝗿𝗮𝗿/𝗖𝗮𝗱𝗮𝘀𝘁𝗿𝗮𝗿</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="𝗣𝗲𝘀𝗾𝘂𝗶𝘀𝗮𝗿" aria-label="Search">
          <button class="btn btn-dark" type="submit">𝗣𝗿𝗼𝗰𝘂𝗿𝗮𝗿</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container_form">

<h1>𝑬𝒏𝒕𝒓𝒂𝒓/𝑪𝒂𝒅𝒂𝒔𝒕𝒓𝒂𝒓</h1>

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