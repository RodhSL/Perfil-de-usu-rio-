<?php

    $dados_pessoais = array(
        'img' => 'https://i.pinimg.com/236x/17/37/90/173790415cff34d3f515ccb9d936d64a.jpg',
        'Nome' => 'Rodrigo Santana Lima',
        'Apelido' => 'Rod',

    );

    $dados_locais = array(
        'Rua' => 'Rua D',
        'N°_da_casa' => '320',
        'Bairro' => 'Bonfim',
        'Cidade' => 'PMA',

    );

    $dado_escolares = array(
        'Email' => 'digocnn84@Gmail.com',
        'Curso' => 'Informática',
        'Disciplinas' => array('webdesing', 'Banco de Dados', 'Projeto Integrador', 'Análise de Sistemas'),

    );

    echo ('<img src=' . $dados_pessoais['img'] . '>');
    echo ($dados_pessoais['Nome']);
    echo ('<br>');
    echo ($dados_pessoais['Apelido']);

    echo ('<br>'); 
    echo ('<br>');

    echo ('ENDEREÇO:');
    echo ('<br>');
    echo ('<br>');
    echo ('Rua: ' . $dados_locais['Rua']);
    echo ('<br>');
    echo ('N° da casa: ' . $dados_locais['N°_da_casa']);
    echo ('<br>');
    echo ('Bairro: ' . $dados_locais['Bairro']);
    echo ('<br>');
    echo ('Cidade: ' . $dados_locais['Cidade']);

    echo ('<br>');
    echo ('<br>');

    echo ('E-mail: ' . $dado_escolares['Email']);
    echo ('<br>');
    echo ('Curso: ' . $dado_escolares['Curso']);
    echo ('<br>');
    echo ('Disciplinas: ' . $dado_escolares['Disciplinas'][0]);
    echo ('<br>');
    echo ($dado_escolares['Disciplinas'][1]);
    echo ('<br>');
    echo ($dado_escolares['Disciplinas'][2]);
    echo ('<br>');
    echo ($dado_escolares['Disciplinas'][3]);

?>