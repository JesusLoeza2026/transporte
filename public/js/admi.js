var url = 'http://localhost/transporte/public/apiAuto';

new Vue ({
    el:'#admi',
    http: {
    headers:{
         'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     }
    },

    data:{
     auto:[],
     id_auto:0,
     nombre:'',
     cantidad:0,
     activo:0,
     editando:true,
     auxid:'',
     validar:23232

    },
    created:function(){
        this.getAdministrador();
    },
    
    created:function(){
    this.getAuto();
    },

methods:{
         getAdministrador:function(){
        this.$http.get(admi)
        .then(function(json){
            this.administrador=json.data;

        });
        
        },

        getAuto:function(){
        this.$http.get(url)
        .then(function(json){
            this.auto=json.data;

        });
        
        },

        AgregarNuevo:function(){
        var auto={
            id_auto:this.id_auto,
            nombre:this.nombre,
            cantidad:this.cantidad,
            activo:this.activo
            }
        this.$http.post(url,auto)
        .then(function(json){
            alert('agregado con exito');
            this.getAuto();
            // console.log(json);
            this.editando=true;
        });
        
        },
      
    



}

    














})