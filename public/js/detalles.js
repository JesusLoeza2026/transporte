var url = 'http://localhost/transporte/public/apiAuto';

new Vue ({
    el:'#detalles',
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
     editando:false,
     agregar:false,
     auxid:'',
     id_chofer:0,
     id_turno:0

    },

    created:function(){
    this.getAuto();
    },

methods:{

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
            activo:this.activo,
            id_chofer:this.id_chofer
            }
        this.$http.post(url,auto)
        .then(function(json){
            alert('agregado con exito');
            this.getAuto();
            // console.log(json);
            
        });
        
        },
        showAuto:function(id){
            this.$http.get(url + '/' + id)
            .then(function(json){
                this.id_auto=json.data.id_auto;
                this.nombre=json.data.nombre;
                this.cantidad=json.data.cantidad;
                this.activo=json.data.activo;
                this.editando=true;
                this.auxid = json.data.id_auto;

            })  
        },
        actualizarA:function(id){
            alert('Actualizado refresque');
            var auto={
                id_auto:this.id_auto,
                nombre:this.nombre,
                cantidad:this.cantidad,
                activo:this.activo
                }

                this.$http.patch(url + '/' + id,auto)
                .then(function(response){
				this.getAuto();
                this.editando=true;
                alert('Actualizado refresque');
			})

        },
        EliminarAuto:function(id){
			var confir = confirm("Esta Apunto de eliminar ¿Esta Seguro?");
			if (confir){
				this.$http.delete(url + '/' + id).then
				(function(response){
					this.getAuto()
				}
				)
			}


		}
    
    



}

    














})