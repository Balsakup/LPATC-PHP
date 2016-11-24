<?php
require_once 'class/util.class.php';

class Dico {

    private $data = [];

    public function __construct() {
        if (file_exists('data.txt')) {
            $this->data = unserialize(file_get_contents('data.txt'));
        }
    }

    public function frenchToEnglish($sentence) {
        $sentence = explode(' ', $sentence);
        $res      = [];

        foreach ($sentence as $word) {
            if (!isset($this->data[$word])) {
                $this->data[$word] = Util::ask("Le mot '$word' n'est pas dans les données.\nAjoutez la traduction pour le mot '$word': ");
            }

            $res[] = $this->data[$word];
        }

        return ucfirst(implode(' ', $res));
    }

    public function englishToFrench($sentence) {
        $sentence = explode(' ', $sentence);
        $res      = [];

        foreach ($sentence as $word) {
            $v = null;

            if (!in_array($word, $this->data)) {
                $v = Util::ask("Le mot '$word' n'est pas dans les données.\nAjoutez la traduction pour le mot '$word': ");

                $this->data[] = $word;
            }

            $res[] = Util::getKeyByValue($v, $this->data);
        }

        return ucfirst(implode(' ', $res));
    }

    public function __destruct() {
        file_put_contents('data.txt', serialize($this->data));
    }

}
