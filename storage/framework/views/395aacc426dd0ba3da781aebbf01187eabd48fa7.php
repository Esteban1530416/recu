
<!-- Muestra el menu postereor de la plantilla de administrador  -->



<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li @click="menu=0" class="nav-item">
                <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Escritorio</a>
            </li>
            <li class="nav-title">
                Mantenimiento
            </li>

<!--    Menu ALMACEN con sus sub-menus, los sub-menus tienen directivas @click  que seran para 
        cambiar los valores de la variable "menu" Cuando haga click en un sub menu 
        para  utilizarlo en la vista contenido  -->
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Almacén</a>
                <ul class="nav-dropdown-items">
                    
                    <li @click="menu=2" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-bag"></i> Artículos</a>
                    </li>
                    <li @click="menu=4" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-notebook"></i> Proveedores</a>
                    </li>
                    <li @click="menu=5" class="nav-item">
                        <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Ventas</a>
                    </li>
                    <li @click="menu=6" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                    </li>
                </ul>
            </li>
           






            
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><?php /**PATH /opt/lampp/htdocs/laravel/taw2019-master (1)/resources/views/plantilla/sidebar.blade.php ENDPATH**/ ?>