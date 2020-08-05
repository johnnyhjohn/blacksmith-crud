# blacksmith-crud
Project to teach new developers about basic stuffs

---------------------------------------------------------
## CONTROLE DE ESTOQUE DE FERREIRO
---------------------------------------------------------
1 - Introdução
---------------------------------------------------------
Será necessário controlar o estoque dos ferreiros de uma cidade, para isso montaremos uma estrutura em que possamos saber o tipo de itens que o ferreiro faz, quantos ele tem em estoque, se possível fabricar mais e o valor de cada item, podendo assim extrair um relatório de custos e ganhos mensais.

---------------------------------------------------------
2 - Modelo de objetos
---------------------------------------------------------
- Pessoa (nome, idade, raça, vilarejo, imagem)
     - Tipo : ferreiro (oficina)
     - Tipo : cliente ()
- Raças (nome, descricao, imagem)
- Oficina (nome,produtos, materiais, vilarejo, imagem)
- Material (nome,tipo,valor, imagem)
- OfinaMaterial (oficina, material, quantidade)
- Produto (nome, tipo, valor, materiais, imagem)
- OfinaProduto (oficina, produto, quantidade)
- ProdutoMateriais (material, quantidade)
- Vilarejo (nome, sigla, reino, imagem)
- Reino (nome, sigla, imperio, imagem)
- Império (nome, sigla, imagem)

------------------------------------------------
3 - TECNOLOGIAS
------------------------------------------------
- PHP (Framework Laravel) 
- jQuery (para aprender a utilizar o javascript)
- Banco de dados mySql
- Git
* Decidi utilizar o PHP pois é uma linguagem backend facil, e com o framework Laravel conseguimos implementar boas Design Patterns que poderão ser usadas em qualquer linguagem
