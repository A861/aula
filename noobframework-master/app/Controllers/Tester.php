<?php

namespace App\Controllers;

use Core\Controller;

class Tester extends Controller {
    public function index() {
        $this->view('Teste');
    }
    public function k() {
        $this->view('Teste2');
    }
    }

?>
