
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
                    <li @click="menu=1" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-bag"></i> Categorías</a>
                    </li>
                    <li @click="menu=2" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-bag"></i> Artículos</a>
                    </li>
                </ul>
            </li>
           
<!--    Menu COMPRAS con sus sub-menus, los sub-menus tienen directivas @click  que seran para 
        cambiar los valores de la variable "menu" Cuando haga click en un sub menu 
        para  utilizarlo en la vista contenido  -->

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Compras</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=3" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-wallet"></i> Ingresos</a>
                    </li>
                    <li @click="menu=4" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-notebook"></i> Proveedores</a>
                    </li>
                </ul>
            </li>

<!--    Menu VENTAS con sus sub-menus, los sub-menus tienen directivas @click  que seran para 
        cambiar los valores de la variable "menu" Cuando haga click en un sub menu 
        para  utilizarlo en la vista contenido  -->

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=5" class="nav-item">
                        <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Ventas</a>
                    </li>
                    <li @click="menu=6" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                    </li>
                </ul>
            </li>



<!--    Menu ACCESO con sus sub-menus, los sub-menus tienen directivas @click  que seran para 
        cambiar los valores de la variable "menu" Cuando haga click en un sub menu 
        para  utilizarlo en la vista contenido  -->

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=7" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-user"></i> Usuarios</a>
                    </li>
                    <li @click="menu=8" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-user-following"></i> Roles</a>
                    </li>
                </ul>
            </li>

<!--    Menu REPORTES con sus sub-menus, los sub-menus tienen directivas @click  que seran para 
        cambiar los valores de la variable "menu" Cuando haga click en un sub menu 
        para  utilizarlo en la vista contenido  -->

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=9" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ingresos</a>
                    </li>
                    <li @click="menu=10" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
                    </li>
                </ul>
            </li>


<!--    Menu AYUDA tienen directivas @click  que seran para cambiar los valores de la variable "menu" 
        Cuando haga click en un "menu" para  utilizarlo en la vista contenido  -->

            <li @click="menu=11" class="nav-item">
                <a class="nav-link" href="#"><i class="icon-book-open"></i> Ayuda <span
                        class="badge badge-danger">PDF</span></a>
            </li>

<!--    Menu ACERCA DE tienen directivas @click  que seran para cambiar los valores de la variable "menu" 
        Cuando haga click en un "menu" para  utilizarlo en la vista contenido  -->

            <li @click="menu=12" class="nav-item">
                <a class="nav-link" href="#"><i class="icon-info"></i> Acerca de...<span
                        class="badge badge-info">IT</span></a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><?php /**PATH /opt/lampp/htdocs/laravel1/sistema/taw-2019/blog/resources/views/plantilla/sidebar.blade.php ENDPATH**/ ?>