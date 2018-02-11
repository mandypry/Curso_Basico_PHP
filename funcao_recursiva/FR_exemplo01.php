<?php

$hierarquia = array(
			array(
				'nome_cargo'=>'CEO',
				'subordinados'=>array( 
				//inicio : Diretor Comercial
				array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
						//inicio : Gerente de Vendas
						array(
							'nome_cargo'=>'Gerernte de Vendas'
						)
						//Termino : Gerente de Vendas
					)
				),
				//Termino : Diretor Comercial
				//inicio : Diretor Finaceiro
				array(
					'nome_cargo'=>'Diretor Finaceiro',
					'subordinados'=>array(
						//inicio : Gerente de Contas a pagar
						array(
							'nome_cargo'=>'Gerente de Contas a Pagar',
							'subordinados'=>array(
							//inicio : Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Termino : Supervisor de Pagamentos
						)
					),
					//Termino : Gerente de Contas a pagar
					//Inicio : Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=> array(

									array(

										'nome_cargo'=> 'Auxiliar Administrativa'
									)

								)
							)
							//Inicio: Supervisor de Suprimentos
						)
					)
					//Termino: Gerente de Compras	
				)
			)
			//Termino : Diretor Finaceiro
		)

	)
);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';

	}
	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia); 
?>