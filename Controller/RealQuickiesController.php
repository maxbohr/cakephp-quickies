<?php

App::uses('AppController','Controller');
App::uses('CakeEmail','Network/Email');

/*
    Smaller / Miscellaneous snippets each contained within single function.
    Larger snippets are grouped by Individual Controllers like EmailController.
*/

class RealQuickiesController extends AppController {

    public function slug_test() {
        $strings = array(
            'Allen & Joseph',
            'Air / Sea',
            'Why (Not) a bracket',
            'How_Am_I_Doing',
            'how-is-this-possible_and__and_NOT',
        );
        foreach($strings as $string) {
            debug($string);
            debug(Inflector::slug($string));
            debug(Inflector::slug($string, '-'));
            debug(strtolower(Inflector::slug($string, '-')));
        }
        $this->autoRender = false;
    }

}

