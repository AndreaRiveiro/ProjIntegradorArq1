<?php

use Illuminate\Database\Seeder;
use App\Produto;
use App\Categoria;


class CadastrarProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Produto();
        $produto->nome_produto = "Banana";
        $produto->tipo_produto = "Alimento Orgânico";
        $produto->codigo_do_produto = "101";
        $produto->codigo_categoria = "1";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Banana nanica orgânica produzida por pequenos agricultores de forma sustentável nos arredores de São Paulo.";
        $produto->codigo_fornecedor = "02";
        $produto->nome_loja = "Agricultura Familiar";
        $produto->preco_venda = "5";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/banana.jpg";
        $produto->save();


        $produto = new Produto();
        $produto->nome_produto = "Hidratante";
        $produto->tipo_produto = "Beleza Natural";
        $produto->codigo_do_produto = "201";
        $produto->codigo_categoria = "2";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Hidratante feito com oléo de melaleuca, argila branca e oleos essenciais. Indicado para peles mistas e secas.";
        $produto->codigo_fornecedor = "03";
        $produto->nome_loja = "Amor Florinda";
        $produto->preco_venda = "40";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/sabonetecorporal.jpg";
        $produto->save();



        $produto = new Produto();
        $produto->nome_produto = "Kti Casa + Beleza";
        $produto->tipo_produto = "Limpeza";
        $produto->codigo_do_produto = "301";
        $produto->codigo_categoria = "3";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Kit para casa e beleza com produtos naturais e orgânicos sem aditivos quimicos.";
        $produto->codigo_fornecedor = "04";
        $produto->nome_loja = "Honest Company";
        $produto->preco_venda = "30";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/kitcasabeleza.jpg";
        $produto->save();


        $produto = new Produto();
        $produto->nome_produto = "Cebola";
        $produto->tipo_produto = "Orgânico";
        $produto->codigo_do_produto = "102";
        $produto->codigo_categoria = "1";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Cebola orgânica produzida por pequenos agricultores de forma sustentável nos arredores de São Paulo.";
        $produto->codigo_fornecedor = "02";
        $produto->nome_loja = "Agricultura Familiar";
        $produto->preco_venda = "5";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/cebola.jpg";
        $produto->save();


        $produto = new Produto();
        $produto->nome_produto = "Brocolis";
        $produto->tipo_produto = "Orgânico";
        $produto->codigo_do_produto = "103";
        $produto->codigo_categoria = "1";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Brocolis orgânica produzida por pequenos agricultores de forma sustentável nos arredores de São Paulo.";
        $produto->codigo_fornecedor = "02";
        $produto->nome_loja = "Agricultura Familiar";
        $produto->preco_venda = "8";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/brocoliscomum.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Cenoura";
        $produto->tipo_produto = "Orgânico";
        $produto->codigo_do_produto = "104";
        $produto->codigo_categoria = "1";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Cenoura orgânica produzida por pequenos agricultores de forma sustentável nos arredores de São Paulo.";
        $produto->codigo_fornecedor = "02";
        $produto->nome_loja = "Agricultura Familiar";
        $produto->preco_venda = "8";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/cenoura.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Cebolinha";
        $produto->tipo_produto = "Orgânico";
        $produto->codigo_do_produto = "105";
        $produto->codigo_categoria = "1";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Cebolinha orgânica produzida por pequenos agricultores de forma sustentável nos arredores de São Paulo.";
        $produto->codigo_fornecedor = "02";
        $produto->nome_loja = "Agricultura Familiar";
        $produto->preco_venda = "3";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/cebolinha.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Beringela";
        $produto->tipo_produto = "Orgânico";
        $produto->codigo_do_produto = "106";
        $produto->codigo_categoria = "1";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Beringela orgânica produzida por pequenos agricultores de forma sustentável nos arredores de São Paulo.";
        $produto->codigo_fornecedor = "02";
        $produto->nome_loja = "Agricultura Familiar";
        $produto->preco_venda = "8";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/berinjela.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Sabonete Natural";
        $produto->tipo_produto = "Beleza Natural";
        $produto->codigo_do_produto = "202";
        $produto->codigo_categoria = "2";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Sabonete feito com argila branca, mel e oleos essenciais. Indicado para peles óleosas e mistas.";
        $produto->codigo_fornecedor = "03";
        $produto->nome_loja = "Amor Florinda";
        $produto->preco_venda = "25";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/sabonetenatural.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Tônico Facial";
        $produto->tipo_produto = "Beleza Natural";
        $produto->codigo_do_produto = "203";
        $produto->codigo_categoria = "2";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Tônico facial feito com óleo tea tree,livra a pele de quaisquer vestígios de impureza, enquanto ajuda a prevenir acne.";
        $produto->codigo_fornecedor = "03";
        $produto->nome_loja = "Amor Florinda";
        $produto->preco_venda = "60";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/tonicofacial.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Espuma de Limpeza Facial";
        $produto->tipo_produto = "Beleza Natural";
        $produto->codigo_do_produto = "204";
        $produto->codigo_categoria = "2";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Espuma de Limpeza Facial foi formulada no pH fisiológico da pele e não contém sulfatos, removendo as impurezas de forma suave e eficaz..";
        $produto->codigo_fornecedor = "03";
        $produto->nome_loja = "Amor Florinda";
        $produto->preco_venda = "40";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/espumaderosto.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Hidratante Para Pele Mista";
        $produto->tipo_produto = "Beleza Natural";
        $produto->codigo_do_produto = "205";
        $produto->codigo_categoria = "2";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Hidratante infundido com folhas de malva que hidrata, nutre e reequilibra a pele.";
        $produto->codigo_fornecedor = "03";
        $produto->nome_loja = "Amor Florinda";
        $produto->preco_venda = "50";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/hidratantepelemista.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Kit Facial";
        $produto->tipo_produto = "Beleza Natural";
        $produto->codigo_do_produto = "206";
        $produto->codigo_categoria = "2";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Kit facial composto por hidratante diurno, protetor solar fator 30, sabonete de rosto pequeno e protetor labial.";
        $produto->codigo_fornecedor = "03";
        $produto->nome_loja = "Amor Florinda";
        $produto->preco_venda = "80";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/kitfacial.jpg";
        $produto->save();


        $produto = new Produto();
        $produto->nome_produto = "Sabão Multiuso";
        $produto->tipo_produto = "Limpeza";
        $produto->codigo_do_produto = "302";
        $produto->codigo_categoria = "3";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Sabão em líquido multiuso feito de forma natural com produto orgânicos sem aditivos quimicos.";
        $produto->codigo_fornecedor = "04";
        $produto->nome_loja = "Honest Company";
        $produto->preco_venda = "30";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/honestsabao.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Amaciante de Bebê";
        $produto->tipo_produto = "Limpeza";
        $produto->codigo_do_produto = "303";
        $produto->codigo_categoria = "3";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Amaciante de bebê feito com elementos naturais sem aditivos quimicos e hipoalergênico.";
        $produto->codigo_fornecedor = "04";
        $produto->nome_loja = "Honest Company";
        $produto->preco_venda = "40";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/honestCasa.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Removedor de manchas";
        $produto->tipo_produto = "Limpeza";
        $produto->codigo_do_produto = "304";
        $produto->codigo_categoria = "3";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Removedor de manchas feito com elementos naturais sem aditivos quimicos.";
        $produto->codigo_fornecedor = "04";
        $produto->nome_loja = "Honest Company";
        $produto->preco_venda = "35";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/limpezaHonest2.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Detergente";
        $produto->tipo_produto = "Limpeza";
        $produto->codigo_do_produto = "305";
        $produto->codigo_categoria = "3";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Detergente feito com elementos naturais sem aditivos quimicos com espuma biodegradável.";
        $produto->codigo_fornecedor = "04";
        $produto->nome_loja = "Honest Company";
        $produto->preco_venda = "35";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/limpezaHonest2.jpg";
        $produto->save();

        $produto = new Produto();
        $produto->nome_produto = "Kit Casa Sustentável";
        $produto->tipo_produto = "Limpeza";
        $produto->codigo_do_produto = "306";
        $produto->codigo_categoria = "3";
        $produto->quantidade_em_estoque = "10";
        $produto->estoque_maximo = "20";
        $produto->descricao_prod = "Kit de elementos sustentaveis e orgânicos para a sua casa.";
        $produto->codigo_fornecedor = "04";
        $produto->nome_loja = "Honest Company";
        $produto->preco_venda = "25";
        $produto->produto_status = "Em estoque";
        $produto->imagens = "/img/kitcasa.jpg";
        $produto->save();
    }
}
