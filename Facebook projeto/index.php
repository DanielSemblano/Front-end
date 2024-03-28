<!DOCTYPE html>
<html>
<head>
    <title>Login Facebook</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou Telefone</p>
                    <input type="email" />
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" />
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar"/>
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" />
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>E gratuito e sempre sera!</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text"/>
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text"/>
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email"/>
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password"/>
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1;$i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></opition>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <!--Aplicar Depois o php-->
                            <option value="0">Junho</opition>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for($i = 1960;$i <= 2023; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></opition>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>feminino</h2>
                        </div><!--input-radio-->
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar"/>
                    </div><!--w100-->

                    <div class="clear"></div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->

            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Portugues (BR)</a>
            <a  href="#">Ingles (US)</a>
            <a  href="#">Espanhol</a>
            <a  href="#">Francais</a>
            <a  href="#">Italiano</a>
            <a  href="#">Deutsch</a>
            <a  href="#">العربية</a>
            <a  href="#">中文(简体)</a>
        </div><!--center-->

        <div style="border:0;padding-top:10px;" class="center">
            <a  href="#">Portugues (BR)</a>
            <a  href="#">Ingles (US)</a>
            <a  href="#">Espanhol</a>
            <a  href="#">Francais</a>
            <a  href="#">Italiano</a>
            <a  href="#">Deutsch</a>
            <a  href="#">العربية</a>
            <a  href="#">中文(简体)</a>
        </div><!--center-->
    </section><!--linguas-->

</body>
</html>