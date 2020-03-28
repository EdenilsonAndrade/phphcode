<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			// Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					// Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					// Termino: Gerente de vendas
				)
			),
			// Termino: Diretor Comercial
			// Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					// Inicio: Gererente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							// Inicio: Supervisor
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							// Termino: Supervisor de Pagamentos
						)
					),
					// Termino: Gerente de Contas a Pagar
					// Inicio: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							// Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(

									array(
										'nome_cargo'=>'Funcionário'										
									)

								)
							)
							// Termino: Supervisor de Suprimentos
						)
					)
					// Termino: Gerente de Compras
				)
			)
			// Termino: Diretor Financeiro
		)
	)
);

function exibe($cargos){

	// cria a tag ul do html

	$html = "<ul>";

	// foreach para percorrer o array

	foreach ($cargos as $cargo) {
		
		// cria a tag li
		$html .= "<li>";
		// retorna o nome do cargo
		$html .=$cargo['nome_cargo'];

		// condição para verificar se contém subordinados, na primeira condição para verificar se foi criado o subordinado e na segundo se contém algum subordinado informado
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			// retorna os subordinados
			$html .= exibe($cargo['subordinados']);
		}
		// fecha a tag li
		$html .= "</li>";
	}

	// fecha a tag ul do html

	$html .="</ul>";

	return $html;

}

// exibe o array hierarquia com a função exibe

echo exibe($hierarquia);

 ?>

 