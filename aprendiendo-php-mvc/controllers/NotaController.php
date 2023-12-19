<?php

class notaController {
    
    public function listar() {
        //modelo
        require_once 'models/nota.php';
        
        //logica dela accion del controlador
        $nota = new nota();
        $notas = $nota->conseguirTodos('notas');
        
        //vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear() {
        
        require_once 'models/nota.php';
        
        $nota = new nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde php MVC");
        $nota->setDescripcion("Descripcion de mi nota");
        $guardar = $nota->guardar();
        
        echo $nota->db->error;
        die();
        header("Location: index.php?controller=Nota&action=listar");
    }
    
    public function borrar() {
        
    }
}