<?php
namespace Cnab\Retorno\Cnab240;

class TrailerLote extends \Cnab\Format\Linha
{
	public function __construct($codigo_banco)
    {
        $yamlLoad = new \Cnab\Format\YamlLoad($codigo_banco);
        $yamlLoad->load($this, 'cnab240', 'trailer_lote');
	}
}
