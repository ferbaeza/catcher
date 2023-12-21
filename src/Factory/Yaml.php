<?php

namespace Baezeta\Catcher\Factory;

class Yaml
{
    private static string $salto = "\n";

    public static function dump(array $exceptions)
    {
        $yaml = '';
        $indent = 0;
        foreach ($exceptions as $fecha => $value) {
            $yaml .= '- fecha: ' .$fecha . self::$salto;
            $indent++;
            foreach ($value as $id => $value2){
                $yaml .= str_repeat(' ', $indent * 2) . '- id: '.$id . self::$salto;
                $indent++;
                foreach ($value2 as $key3 => $value3){
                    $yaml .= str_repeat(' ', $indent * 3) . $key3 . ': ' . $value3 . self::$salto;
                }
                $indent--;
            }
        }
        $name = date('Y-m-d').'_exceptions.yaml';
        $ruta = resources('yaml');
        $destino = $ruta.'/'. $name;

        $file = fopen($destino, 'w');
        fwrite($file, $yaml);
        fclose($file);
    }
}
