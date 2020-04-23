//Criando a função para pac gratis
function meu_pac_gratis( $arr, $instance_id )
{
  //Define o minimo
	$minimum_value >= 150;
 
        //pega o valor do carrinho
        $cart_subtotal = WC()->cart->cart_contents_total;
		if($cart_subtotal > $minimum_value)
		{

				//definindo o curso zero
				$arr['cost'] = 0;

				//adicionando texto ao label
				$arr['label'] .= ': <b>GRÁTIS</b>';
		}
	return $arr;
}
//adicionando filtro
add_filter( 'woocommerce_correios_correios-pac_rate', 'meu_pac_gratis', 10, 2 );
