<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 25/02/16
 * Time: 09:30
 */

require_once 'classes/ProdutoComposicao.php';
require_once 'classes/Caracteristica.php';

//criação do objeto
$p1 = new ProdutoComposicao('Chocolate', 10, 7);

//composição
$p1->addCaracteristica('cor', 'branco');
$p1->addCaracteristica('Peso', '2.6 KG');
$p1->addCaracteristica('Potencia', '20 watts RMS');

print 'Produto' .$p1->getDescricao(). "<br>\n";

foreach ($p1->getCaracteristica() as $c){
    print 'Caracteristica - '  .$c->getNome() . ' - '.$c->getValor(). "<br>\n";
}