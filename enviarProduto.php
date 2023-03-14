<main>
    <div class="container container_add_produto">
        <div class="w100 cadastro_prod_container">
            <label for="fotoProduto">Coloque o link da sua imagem aqui</label>
            <input class="w100" type="text" name="fotoProduto" id="fotoProduto" placeholder="Digite o link da sua imagem..." >
            <div class="w100 cadastro_prod_item nome-produto">
                <label for="titulo_produto">Título do produto</label>
                <input class="w100" type="text" name="titulo_produto" id="titulo_produto" placeholder="Digite o título do produto..." />
            </div><!-- cadastro_prod_item -->
            <div class="w100 cadastro_prod_item desc-produto">
                <label for="desc_produto">Descrição do produto</label>
                <textarea class="w100" name="desc_produto" id="desc_produto" placeholder="Digite a descrição do produto..."></textarea>
            </div><!-- cadastro_prod_item -->
            <div class="w100 cadastro_prod_item material-produto">
                <label for="material_produto">Material do produto</label>
                <input class="w100" type="text" name="material_produto" id="material_produto" placeholder="Tipo de material do produto..." />
            </div><!-- cadastro_prod_item -->
            <div class="w100 cadastro_prod_item preco-produto">
                <label for="preco_produto">Preço do produto</label>
                <input class="w100" type="text" name="precol_produto" id="preco_produto" placeholder="Digite o preço do produto..." />
            </div><!-- cadastro_prod_item -->
            <div class="w100 cadastro_prod_item tamanho-produto">
                <label for="">Tamanho do produto</label>
                <div class="w100 centralizar">
                    <input type="text" name="largura" id="largura" placeholder="Largura do produto..." class="w33">
                    <input type="text" name="comprimento" id="comprimento" placeholder="Comprimento do produto..." class="w33">
                    <input type="text" name="peso" id="peso" placeholder="Peso do produto..." class="w33">
                </div><!-- tamanhos do produto -->
            </div><!-- cadastro_prod_item -->
            <div class="w100 centralizar cadastro_prod_item cadastro_prod_item_categoria">
                <div class="w50 marca_produto">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" placeholder="Marca do produto..." class="w100">
                </div><!-- marca_produto -->
                <div class="w50 selecionar_categoria">
                    <label for="categoria">Catgoria</label>
                    <select name="categoria" id="categoria" class="w100">
                        <option value="cat1">Tapetes</option>
                        <option value="cat1">Amigurumi</option>
                        <option value="cat1">Vasos</option>
                        <option value="cat1">Crochê</option>
                        <option value="cat1">Cerâmica e bonecos</option>
                        <option value="cat1">Têxtil</option>
                        <option value="cat1">Renda</option>
                        <option value="cat1">Cestaria</option>
                        <option value="cat1">Artesanato em madeira</option>
                        <option value="cat1">Artesanato sustentável</option>
                    </select>
                </div><!-- selecionar-categoria -->
            </div><!-- cadastro_prod_item_categoria -->
            <div class="w100 cadastro_prod_item codigo_prod">
                <label for="codigoProd">Código produto</label>
                <input type="text" name="codigoProd" id="codigoProd" placeholder="Digite o código do produto..." class="w100">
            </div>
            <div class="w100 centralizar cadatro_prod_item estoque_prod">
                <div class="w50 qtd_estoque">
                    <label for="qtdProd">Quantidade em estoque</label>
                    <input type="text" name="atdProd" id="qtdProd" class="w100" placeholder="Quantidade em estoque...">
                </div><!-- atd_estoque -->
                <div class="w50 local_estoque">
                    <label for="localEsto">Local do estoque</label>
                    <input type="text" name="localEsto" id="localEsto" class="w100" placeholder="Local onde fica o estoque...">
                </div>
            </div><!-- estoque_prod -->
            <div class="w100 centralizar cadastro_prod_item btn_vender">
                <input class="w20" type="submit" value="Vender agora">
            </div>
        </div><!-- cadastro_prod_container -->
    </div>
</main>