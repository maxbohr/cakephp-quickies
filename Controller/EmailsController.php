<?php

App::uses('AppController','Controller');
App::uses('CakeEmail','Network/Email');

class EmailsController extends AppController {

    public function test_inline_image() {
        $email = new CakeEmail('default');
        $email->from('email@example.com');
        $email->to('yourself@example.com');
        $email->subject('Testing Inline Images');
        $email->template('email_test');
        $url = 'http://upload.wikimedia.org/wikipedia/commons/5/5e/Esponjas.jpg';
        $file_path = TMP . 'photo.jpg';
        copy($url, $file_path);
        $email->attachments(array(
            'photo.jpg' => array(
                'file' => $file_path,
                'mimetype' => 'image/jpg',
                'contentId' => 'photo_001'
            )
        ));
        $email->send();
        return true;
    }

}

