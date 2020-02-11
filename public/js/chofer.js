var url = 'http://localhost/transporte/public/apiChofer';
var urlturno = 'http://localhost/transporte/public/apiTurno';
var urlauto = '';

new Vue ({
      http: {
    headers:{
         'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     }
    },
el:'#chofer',

     created:function(){
    this.getChofer();
     this.getTurno();
    },
data:{
    prueva:'hola',
    chofer:[],
    turno:[],
    auto:[],
    id_chofer:0,
    nombre:'',
    apellido:'',
    activo:'',
    id_turno:1,
    editando:false,
    editando2:false,
    auxiliar:''
},


methods:{

        getChofer:function(){
        this.$http.get(url)
        .then(function(json){
            this.chofer=json.data;

        });
        
        },
         getTurno:function(){
        this.$http.get(urlturno)
        .then(function(json){
            this.turno=json.data;

        });
        
        },
        AgregarNuevo:function(){
            var chofer={
                id_chofer:this.id_chofer,
                nombre:this-nombre,
                apellido:this.apellido,
                activo:this.activo,
                id_turno:this.turno
            }
            this.$http.post(url,chofer)
            .then(function(json){
                alert('agregado con exito');
                this.getChofer();
                // console.log(json);
                
            });
            
        },
        showModal:function(){
           this.editando=true;
        },
        Guardar:function(){
            var chofer={
                id_turno:this.id_turno,
                nombre:this.nombre,
                apellido:this.apellido,
                activo:this.activo
                }
            this.$http.post(url,chofer)
            .then(function(json){
                alert('agregado con exito');
                this.getChofer();
                console.log(json);
                
            });
            
            },
            EliminarChofer:function(id){
                var confir = confirm("Esta Apunto de eliminar ¿Esta Seguro?");
                if (confir){
                    this.$http.delete(url + '/' + id).then
                    (function(response){
                        this.getChofer()
                    }
                    )
                }
    
    
            },
            show:function(id){
                this.$http.get(url + '/' + id)
                .then(function(json){
                    this.id_turno=json.data.id_turno,
                    this.nombre=json.data.nombre,
                    this.apellido=json.data.apellido,
                    this.activo=json.data.activo,
                    this.editando2=true,
                    this.auxiliar=json.data.id_chofer
    
                })  
            },
            actualizarA:function(id){
                alert('Actualizado refresque');
                var chofer={
                    
                    id_turno:this.id_turno,
                    nombre:this.nombre,
                    apellido:this.apellido,
                    activo:this.activo
                    }
    
                    this.$http.patch(url + '/' + id,chofer)
                    .then(function(response){
                    this.getChofer();
                    this.editando2=true;
                    alert('Actualizado refresque');
                })
    
            }
            
        


}









})