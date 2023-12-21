<?php

namespace Baezeta\Catcher\Factory;

class Yaml
{
    private static string $salto = "\n";

    public static function dump(array $exceptions)
    {
        $yaml = '';
        $indent = 0;
        foreach ($exceptions as $key => $value) {
            $yaml .= $key . ':' . self::$salto;
            $indent++;
            foreach ($value as $key2 => $value2){
                $yaml .= str_repeat(' ', $indent * 2) . $key2 . ':' . self::$salto;
                $indent++;
                foreach ($value2 as $key3 => $value3){
                    $yaml .= str_repeat(' ', $indent * 2) . $key3 . ':' . $value3 . self::$salto;
                }
                $indent--;
            }
        }
        $name = date('Y-m-d').'_exceptions.yaml';
        $file = fopen($name, 'w');
        fwrite($file, $yaml);
        fclose($file);
        $destino = resources('yaml');
        file_put_contents($destino.'/'.$name, $yaml);
    }
}
