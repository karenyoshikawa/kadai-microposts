{"filter":false,"title":"game.php","tooltip":"/game.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":14},"action":"insert","lines":["<?php","","require_once 'hero.php';","require_once 'slime.php';","","class Game {","    static function start() {","        $hero = new Hero();","        $slime_A = new Slime('A');","","        $slime_A->attack($hero);","        $hero->attack($slime_A);","","        Hero::description();","        Slime::description();","    }","}","","Game::start();"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526617833910,"hash":"7b03b60fad4f18615534cab2277f103990dd807d"}