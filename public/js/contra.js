var url="http://localhost/transporte/public/apiCambio/";

new Vue({
    http: {
        headers:{
             'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
         }
        },
el:'#contraseña',
data:{
    prueva:'hola',
    sku:'',
    nombres:'',
    apellidos:'',
    password:'',
    usuario:'',
    editando2:false,
    contra:[],
    aux:''
    
},

created:function(){
    this.getContra();
    },

methods:{

        getContra:function(){
        this.$http.get(url)
        .then(function(json){
            this.contra=json.data;

        });
        
        },

        muestraCo:function(id){
            this.$http.get(url  + id)
                .then(function(json){
                    this.nombres=json.data.sku,
                    this.apellidos=json.data.apellidos,
                    this.usuario=json.data.usuario,
                    this.password=json.data.password
                    this.aux=json.data.sku
                    this.editando2=true
    
                }) 
            
        },
        actualizarA:function(id){
            
            var contra={
                nombres:this.nombres,
                apellidos:this.apellidos,
                usuario:this.usuario,
                password:this.password
                }

                this.$http.patch(url + id,contra)
                .then(function(response){
                this.getContra();
                this.editando2=true;
                Swal.fire({        
                    type: 'success',
                    title: 'Éxito',
                    text: '¡Actualizado!',        
                });
              
            })

        }
    }



})