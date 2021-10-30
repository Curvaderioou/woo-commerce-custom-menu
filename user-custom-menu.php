<?php

//Adicionar novo menu

function handel_custom_menu($menu_links){
  $menu_links = array_slice($menu_links, 0, 5, true) + 
  ['certificados' => 'Certificados'] + 
  //['certificados2' => 'Certificados2'] + 
  array_slice($menu_links, 5, NULL, true);

  //Abaixo está tirando o downloads
  //unset($menu_links['downloads']);

  return $menu_links;
}
add_filter('woocommerce_account_menu_items', 'handel_custom_menu');

//Abaixo criamos o endpoint do menu criado acima
function handel_add_endpoint(){
  add_rewrite_endpoint('certificados', EP_PAGES);
}
add_action('init', 'handel_add_endpoint');


function handel_certificados(){
  echo "<h2>Certificados</h2>";
  echo "<p>Esses são os seus certificados</p>";
}
//Abaixo vamos criar conteudo para o endpoint = 'woocommerce_account_*nomedopointquecriamos*_endpoint', '*nomedafuncao*'
add_action('woocommerce_account_certificados_endpoint', 'handel_certificados');

// Salvar uma vez com o script abaixo e depois comenta-lo
// flush_rewrite_rules();

?>