<?php

$hieraquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados'=>array(
            //Início: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo'=>"Gerente de Vendas"
                    )
                    //Termino: Gerente de VEndas
                )
            ),
            //Termino: Direito Comercial
            //Inicio: Direito Financeiro
            array(
                'nome_cargo'=>'Direito Financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_Cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Pagamentos
                            array (
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Termino: Superviso de Pagamentos
                        )
                    ),
                    //Termino: Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Iniicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Termino: Superviso de Suprimentos
                        )   
                    )
                        
                    )
                )
            )
            //Termino: Direito Financeiro
        )
                            );

function exibe($cargos) {

    $html = '<ul>';

    foreach ($cargos as $cargo) {
        
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        
        if (isset($cargo['subordinados']) && count($cargo['subornidados']) > 0) {

        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hieraquia);
?>