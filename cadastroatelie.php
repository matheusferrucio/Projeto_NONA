<div class="container cadastro-content">
    <h1>Cadastro de Ateliê</h1>
    <form action="cadastro.php" method="post">
        <div class="w100 cnpj">
            <label for="cnpj">CNPJ</label>
            <input class="w100" type="number" name="cnpj" id="cnpj" placeholder="Digite o CNPJ da sua empresa...">
        </div><!-- cnpj -->
        <div class="w100 email">
            <label for="emailatelie">E-mail</label>
            <input class="w100" type="email" name="emailatelie" id="emailatelie" placeholder="Digite o e-mail da sua empresa...">
        </div><!-- email -->
        <div class="w100 centralizar nomes">
            <div class="w50 nome-fantasia">
                <label for="nomefantasia">Nome fantasia</label>
                <input class="w100" class="w100" type="text" name="nomefantasia" id="nomefantasia" placeholder="Digite o nome fantasia...">
            </div>
            <div class="w50 nome">
                <label for="nomeatelie">Nome</label>
                <input class="w100" type="text" name="nomeatelie" id="nomeatelie" placeholder="Digite o nome da sua empresa...">
            </div>
        </div><!-- nomes -->
        <div class="w100 razao-social">
            <label for="razaosocial">Razão social</label>
            <input class="w100" type="text" name="razaosocial" id="razaosocial" placeholder="Digite a razão social...">
        </div><!-- razao-social -->
        <div class="w100 centralizar codigo-descri-cnae">
            <div class="w30 codigo-cnae">
                <label for="codigcnae">Código CNAE</label>
                <input class="w100" type="number" name="codigocnae" id="codigocnae" placeholder="Digite o código CNAE...">
            </div>
            <div class="w70 desc-cnae">
                <label for="desccnae">Descrição CNAE</label>
                <input class="w100" type="text" name="desccnae" id="desccnae" placeholder="Digite a descrição CNAE...">
            </div>
        </div><!-- codigo-descri-cnae -->
        <div class="w100 centralizar ddd-telefone">
            <div class="w20 ddd">
                <label for="dddatelie">DDD</label>
                <input class="w100" type="number" name="dddatelie" id="dddatelie" placeholder="DDD...">                    
            </div>
            <div class="w80 telefone">
                <label for="telefoneatelie">Telefone</label>
                <input class="w100" type="number" name="telefoneatelie" id="telefoneatelie" placeholder="Digite o telefone da empresa...">
            </div>
        </div><!--- ddd-telefone -->
        <div class="w100 centralizar cep-pais-uf">
            <div class="w40 cep">
                <label for="cepatelie">CEP</label>
                <input class="w100" type="number" name="cepatelie" id="cepatelie" placeholder="CEP do estabelecimento...">
            </div>
            <div class="w40 pais">
                <label for="pais">País</label>
                <input class="w100" type="text" name="pais" id="pais" placeholder="País de origem...">
            </div>
            <div class="w20 uf">
                <label for="uf">UF</label>
                <input class="w100" type="text" name="uf" id="uf" placeholder="UF...">
            </div>
        </div><!-- cep-pais-uf -->
        <div class="w100 centralizar cidade-rua">
            <div class="w50 cidade">
                <label for="cidade">Cidade</label>
                <input class="w100" type="text" name="cidade" id="cidade" placeholder="Cidade da empresa...">
            </div>
            <div class="w50 rua">
                <label for="rua">Rua</label>
                <input class="w100" type="text" name="rua" id="rua" placeholder="Rua do estabelecimento...">
            </div>
        </div><!-- cidade-rua -->
        <div class="w100 centralizar bairro-numero">
            <div class="w70 bairro">
                <label for="bairro">Bairro</label>
                <input class="w100" type="text" name="bairro" id="bairro" placeholder="Bairro da empresa">
            </div>
            <div class="w30 numero-estabelecimento">
                <label for="numero">Número</label>
                <input class="w100" type="number" name="numero" id="numero" placeholder="0000">
            </div>
        </div>
        <div class="w100 endereco">
            <h1>Cadastrar endereço</h1>
        </div>
        <div class="w100 centralizar info_endereco_container">
            <div class="w33 info_endereco_item">
                <label for="cep">CEP</label>
                <input type="number" name="cep" id="cep" class="w100" placeholder="Digite o seu CEP...">
            </div>
            <div class="w33 info_endereco_item">
                <label for="paises">País</label>
                <select name="paises" id="paises" class="w100">
                    <option value="Brasil" selected="selected">Brasil</option>
                    <option value="Afeganistão">Afeganistão</option>
                    <option value="África do Sul">África do Sul</option>
                    <option value="Albânia">Albânia</option>
                    <option value="Alemanha">Alemanha</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                    <option value="Antárctida">Antárctida</option>
                    <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Argélia">Argélia</option>
                    <option value="Armênia">Armênia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Arábia Saudita">Arábia Saudita</option>
                    <option value="Austrália">Austrália</option>
                    <option value="Áustria">Áustria</option>
                    <option value="Azerbaijão">Azerbaijão</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrein">Bahrein</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belize">Belize</option>
                    <option value="Benim">Benim</option>
                    <option value="Bermudas">Bermudas</option>
                    <option value="Bielorrússia">Bielorrússia</option>
                    <option value="Bolívia">Bolívia</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgária">Bulgária</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Butão">Butão</option>
                    <option value="Bélgica">Bélgica</option>
                    <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                    <option value="Cabo Verde">Cabo Verde</option>
                    <option value="Camarões">Camarões</option>
                    <option value="Camboja">Camboja</option>
                    <option value="Canadá">Canadá</option>
                    <option value="Catar">Catar</option>
                    <option value="Cazaquistão">Cazaquistão</option>
                    <option value="Chade">Chade</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Chipre">Chipre</option>
                    <option value="Colômbia">Colômbia</option>
                    <option value="Comores">Comores</option>
                    <option value="Coreia do Norte">Coreia do Norte</option>
                    <option value="Coreia do Sul">Coreia do Sul</option>
                    <option value="Costa do Marfim">Costa do Marfim</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croácia">Croácia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Dinamarca">Dinamarca</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Egito">Egito</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                    <option value="Equador">Equador</option>
                    <option value="Eritreia">Eritreia</option>
                    <option value="Escócia">Escócia</option>
                    <option value="Eslováquia">Eslováquia</option>
                    <option value="Eslovênia">Eslovênia</option>
                </select>
            </div>
            <div class="w33 info_endereco_item">
                <label for="uf">UF</label>
                <input type="text" name="uf" id="uf" placeholder="Unidade federativa..." class="w100">
            </div>
        </div>
        <div class="w100 info_endereco_container centralizar">
            <div class="w50 info_endereco_item">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" placeholder="Digite a sua cidade..." class="w100">
            </div>
            <div class="w50 info_endereco_item">
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" id="logradouro" placeholder="Digite o logradouro..." class="w100">
            </div>
        </div>
        <div class="w100 info_endereco_container centralizar">
            <div class="w70 info_endereco_item">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="w100" placeholder="Digite o seu bairro...">
            </div>
            <div class="w30 info_endereco_item">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero" class="w100" placeholder="Número da casa...">
            </div>
        </div>
        <div class="w100 centralizar aviso-importante">
            <img src="<?php echo ENDERECO_SITE; ?>img/caution.png" alt="imagem de atenção">
            <span>ATENÇÃO! É importante preencher todos os campos.</span>
        </div>
        <div class="w100 centralizar botao-cadastrar">
            <input type="submit" value="Cadastrar-se" class="w100">
        </div>
    </form>
</div>