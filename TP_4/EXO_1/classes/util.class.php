<?php
class Util {

    public static function write($file, array $content) {
        file_put_contents($file, serialize($content));
    }

    public static function read($file) {
        return file_exists($file) ? unserialize(file_get_contents($file)) : [];
    }

}
