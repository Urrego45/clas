<?php




class controllVistas{

    public $viewPath = 'C:\xampp\htdocs\Emi\Views';
    public $layout;
    public $layoutBl;
    public $layoutEmp;
    public $layoutSub;



    public function __construct(){

        $this->usuario = new usuario();
        $this->proveedor = new proveedor();

        $this->layout = $this->viewPath.'\Layout\layout.php';
        $this->layoutBl = $this->viewPath.'\Layout\layoutBl.php';
        $this->layoutEmp = $this->viewPath.'\Layout\layoutEmp.php';
        $this->layoutSub = $this->viewPath.'\Layout\layoutSub.php';
    }

    


    /* ------------- INICIO --------------- */

    public function index(){
        $pageTitle = 'Login';
        $body = $this->viewPath.'\login.php';

        include_once $this->layoutBl;
    }

    /* ------------- ADMIN --------------- */

    

    public function inicioA(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\Admin\index.php';
        

        include_once $this->layout;
    }

    /* --- Usuarios --- */

    public function listar(){
        $pageTitle = 'Usuarios';
        $body = $this->viewPath.'\Admin\usuarios\listar.php';
        

        include_once $this->layout;
    }

    public function crear(){
        $pageTitle = 'Crear usuario';
        $body = $this->viewPath.'\Admin\usuarios\crear.php';
        

        include_once $this->layout;
    }

    public function editar(){
        $alm = new usuario();
        if(isset($_REQUEST['id'])){
            $alm = $this->usuario->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar usuario';
        $body = $this->viewPath.'\Admin\usuarios\editar.php';
        

        include_once $this->layout;
    }

    /* --- proveedores --- */

    public function listarP(){
        $pageTitle = 'Proveedores';
        $body = $this->viewPath.'\Admin\proveedores\listar.php';
        

        include_once $this->layout;
    }

    public function crearP(){
        $pageTitle = 'Crear proveedor';
        $body = $this->viewPath.'\Admin\proveedores\crear.php';
        

        include_once $this->layout;
    }

    public function editarP(){
        $alm = new usuario();
        if(isset($_REQUEST['id'])){
            $alm = $this->proveedor->cargarID($_REQUEST['id']);
        }
        $pageTitle = 'Editar proveedor';
        $body = $this->viewPath.'\Admin\proveedores\editar.php';
        

        include_once $this->layout;
    }

    /* ------------- Sub-Admin --------------- */

    public function inicioS(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\SubAdmin\index.php';
        

        include_once $this->layoutSub;
    }

    /* --- proveedores --- */

    public function listarPS(){
        $pageTitle = 'Proveedores';
        $body = $this->viewPath.'\SubAdmin\proveedores\listar.php';
        

        include_once $this->layoutSub;
    }


    /* ------------- Empleado --------------- */

    public function inicioE(){
        $pageTitle = 'Inicio';
        $body = $this->viewPath.'\Empleado\index.php';
        

        include_once $this->layoutSub;
    }
}




?>