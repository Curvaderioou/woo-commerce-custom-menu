
<?php
/*
function handel_custom_checkout($fields){


  //$fields['billing']['billing_first_name']['label'] = 'Primeiro nome'; aqui estou dizendo que o label correspondente vai ter o title 
  //primeiro nome, poderia trocar o label por required e dar um =  false, aí o campo não seria mais obrigatório.


$fields['billing']['billing_presente'] = [
  'label' => 'Embrulhar para Presente?',
  'required' => false,
  'class' => ['form-row-wide'],
  'clear' => true,
  'type' => 'select',
  'options' => [
    'nao' => "Não",
    'sim' => "Sim",
  ]
];

  return $fields;

}

add_filter('woocommerce_checkout_fields', 'handel_custom_checkout');
*/
//Ação abaixo para incluir a opção adicionada no painel de pedidos
/*
function show_admin_custom_checkout_presente($order){
  $presente = get_post_meta($order->get_id(), '_billing_presente', true);
  echo '<p><strong>Presente: </strong></p>' . $presente;
}
add_action('woocommerce_admin_order_data_after_shipping_address', 'show_admin_custom_checkout_presente');

//Abaixo vamos adicionar ação para área de avisos do pedido
function handel_custom_checkout_field($checkout){
  woocommerce_form_field('mensagem_personalizada', [
    'type' => 'textarea',
    'class' => ['form-row-wide mensagem-personalizada'],
    'label' => 'Mensagem Personalizada',
    'placeholder' => 'Escreva uma mensagem para a pessoa que você está presenteando.',
    'required' => false,
  ], $checkout->get_value('mensagem_personalizada'));
}
add_action('woocommerce_after_order_notes', 'handel_custom_checkout_field');
*/
//Validar campo caso ele seja necessário
//function handel_custom_checkout_field_process(){
//  if(!$_POST['mensagem_personalizada']){
//    wc_add_notice('Por favor, escreva uma mensagem personalizada.', 'erro');
//  } }
//add_action('woocommerce_checkout_process', 'handel_custom_checkout_field_process');


//Adicionar ao banco de dados
//function handel_custom_checkout_field_update($order_id){
//  if(!empty($_POST['mensagem_personalizada'])){
//    update_post_meta($order_id, 'mensagem_personalizada', sanitize_text_field($_POST['mensagem_personalizada']));
//  }
//}
// add_action('woocommerce_checkout_update_order_meta', 'handel_custom_checkout_field_update');



//Mostrar informação no painel
//function show_admin_custom_checkout_mensagem($order){
// $presente = get_post_meta($order->get_id(), 'mensagem_personalizada', true);
//echo '<p><strong>Mensagem: </strong></p>' . $mensagem;
//}
//add_action('woocommerce_admin_order_data_after_shipping_address', 'show_admin_custom_checkout_mensagem');

?>