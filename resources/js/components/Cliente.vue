<template>
            <main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->

                <!-- Incializa la vista del componente de CLIENTE-->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Clientes
                        <button type="button" @click="abrirModal('persona','registrar')" class="btn btn-secondary">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button>
                    </div>

                    <!--seccion para buscar clientes por nombre -->
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio">
                                      <option value="nombre">Nombre</option>
                                     
                                    </select>
                               </div>
                            </div>
                        </div>

                        <!--Vista donde muestra la tabla -->
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>No. Cli.</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Comentario</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <!--cuerpo de os clientes (los clientes al igual que los proovedores son personas a asi que se diferencian por un id )-->
                            <tbody>
                                <tr v-for="persona in arrayPersona" :key="persona.id">
                                    <td>
                                        <button type="button" @click="abrirModal('persona','actualizar',persona)" class="btn btn-warning btn-sm">
                                          <i class="icon-pencil"></i>
                                        </button>
                                    </td>

                                    <td v-text="persona.id"></td>
                                    <td v-text="persona.nombre"></td>
                                    <td v-text="persona.telefono"></td>
                                    <td v-text="persona.comentario"></td>
                                    <td v-text="persona.email"></td>
                                </tr>                                
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item" v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1,buscar,criterio)">Ant</a>
                                </li>
                                <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page"></a>
                                </li>
                                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1,buscar,criterio)">Sig</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">reprecentante (*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="reprecentante" class="form-control" placeholder="Nombre del reprecentante">                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre (*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="nombre" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">rfc</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="rfc" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">curp</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="curp" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">domicilio</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="domicilio" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">numexterior</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="numexterior" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">colonia</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="colonia" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">cp</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="cp" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">localidad</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="localidad" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">municipio</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="municipio" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">estado</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="estado" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">pais</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="pais" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">telefono</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="telefono" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">celular</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="celular" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">email</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="email" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">comentario</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="comentario" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">limite credito</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="limitecredito" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">dias credito</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="diascredito" class="form-control" placeholder="Nombre de la persona">                                        
                                    </div>
                                </div>
                                
                                <div v-show="errorPersona" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjPersona" :key="error" v-text="error">

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarPersona()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarPersona()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        </main>
</template>


<script>
    export default {
        props : ['ruta'],
        data (){
            return {
/* se inicializan las variable que se ocuparan en la vista y en los metodos */ 
                persona_id: 0,
                
                
                

         reprecentante  :'',                    
         nombre  :'',                    
         rfc  :'',                    
         curp  :'',                   
         domicilio  :'',              
         numexterior  :'',            
         numinterior  :'',            
         colonia  :'',                
         cp  :'',                    
         localidad  :'',                 
         municipio  :'',                 
         estado  :'',                    
         pais  :'',                    
         telefono  :'',                
         celular  :'',                 
         email  :'',                   
         comentario  :'',              
         limitecredito  :'',           
         diascredito:'',   






                arrayPersona : [],
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                errorPersona : 0,
                errorMostrarMsjPersona : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'nombre',
                buscar : ''
            }
        },
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //calcula en numero de columnas
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
        methods : {

/* este metodo es para hacer la busqueda de clientes por nombre*/ 
            listarPersona (page,buscar,criterio){
                let me=this;
                var url= '/cliente?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayPersona = respuesta.personas.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            //metodo para cambiar la paginacion y mostrar otros registros
            cambiarPagina(page,buscar,criterio){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarPersona(page,buscar,criterio);
            },

            //metodo para registrar una nuevo cliente con la caracteristica de cliente 
            registrarPersona(){
             
                let me = this;

                axios.post('/cliente/registrar',{

        'reprecentante':this.reprecentante,
        'nombre':this.nombre,
        'rfc':this.rfc,
        'curp':this.curp,
        'domicilio':this.domicilio,
        'numexterior':this.numexterior,
        'numinterior':this.numinterior,
        'colonia':this.colonia,
        'cp':this.cp,
        'localidad':this.localidad,
        'municipio':this.municipio,
        'estado':this.estado,
        'pais':this.pais,
        'telefono':this.telefono,
        'celular':this.celular,
        'email':this.email,
        'comentario':this.comentario,
        'limitecredito':this.limitecredito,
        'diascredito':this.diascredito,
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarPersona(1,'','nombre');
                }).catch(function (error) {
                    console.log(error);
                });
            },
            //metodo para actualizar la perosna con atributo del cliente 
            actualizarPersona(){
              
                let me = this;

                axios.put('/cliente/actualizar',{


        'reprecentante':this.reprecentante,
        'nombre':this.nombre,
        'rfc':this.rfc,
        'curp':this.curp,
        'domicilio':this.domicilio,
        'numexterior':this.numexterior,
        'numinterior':this.numinterior,
        'colonia':this.colonia,
        'cp':this.cp,
        'localidad':this.localidad,
        'municipio':this.municipio,
        'estado':this.estado,
        'pais':this.pais,
        'telefono':this.telefono,
        'celular':this.celular,
        'email':this.email,
        'comentario':this.comentario,
        'limitecredito':this.limitecredito,
        'diascredito':this.diascredito,
                    'id': this.persona_id
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarPersona(1,'','nombre');
                }).catch(function (error) {
                    console.log(error);
                }); 
            },     
            
            
            // metodo para regresar los valores a sus valores originales 
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';


        this.reprecentante='';                
        this.nombre='';                
        this.rfc='';                
        this.curp='';               
        this.domicilio='';          
        this.numexterior='';        
        this.numinterior='';        
        this.colonia='';            
        this.cp='';                
        this.localidad='';             
        this.municipio='';             
        this.estado='';                
        this.pais='';                
        this.telefono='';            
        this.celular='';             
        this.email='';               
        this.comentario='';          
        this.limitecredito='';       
        this.diascredito='';         
                    this.errorPersona=0;













            },

            
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "persona":
                    {
                        switch(accion){
                            case 'registrar':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Cliente';
                                
        this.reprecentante='';                
        this.nombre='';                
        this.rfc='';                
        this.curp='';               
        this.domicilio='';          
        this.numexterior='';        
        this.numinterior='';        
        this.colonia='';            
        this.cp='';                
        this.localidad='';             
        this.municipio='';             
        this.estado='';                
        this.pais='';                
        this.telefono='';            
        this.celular='';             
        this.email='';               
        this.comentario='';          
        this.limitecredito='';       
        this.diascredito='';         
    
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'actualizar':
                            {
                                //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Cliente';
                                this.tipoAccion=2;
                                this.persona_id=data['id'];
             

        this.reprecentante = data['reprecentante'];                
        this.nombre = data['nombre'];                
        this.rfc = data['rfc'];                
        this.curp = data['curp'];               
        this.domicilio = data['domicilio'];          
        this.numexterior = data['numexterior'];        
        this.numinterior = data['numinterior'];        
        this.colonia = data['colonia'];            
        this.cp = data['cp'];                
        this.localidad = data['localidad'];             
        this.municipio = data['municipio'];             
        this.estado = data['estado'];                
        this.pais = data['pais'];                
        this.telefono = data['telefono'];            
        this.celular = data['celular'];             
        this.email = data['email'];               
        this.comentario = data['comentario'];          
        this.limitecredito = data['limitecredito'];       
        this.diascredito = data['diascredito'];         
    




                                break;
                            }
                        }
                    }
                }
            }
        },
        mounted() {
            this.listarPersona(1,this.buscar,this.criterio);
        }
    }
</script>
<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
</style>
