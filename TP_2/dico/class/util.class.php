<?php
class Util {

    public static function ask($question = null) {
        if ($question != null) {
            printf($question);
        }

        return strtolower(str_replace("\n", '', fgets(STDIN)));
    }

    public static function getKeyByValue($value, $array) {
        foreach ($array as $k => $v) {
            if ($v == $value) {
                return $k;
            }
        }

        return null;
    }

}
