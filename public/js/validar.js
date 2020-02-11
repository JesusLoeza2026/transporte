var url = 'http://localhost/transporte/public/apiUsu';
new Vue({
	el:'#usuario',
	 http: {
	 	headers:{
	  		'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
	  	}
	  },

	data:{
        nombre:'Hola',
        datos:[],
        sku:0,
        skuA:0,
        nombres:'',
        apellidos:'',
        usuario:'',
        password:'',
        rol:'',
        id_auto:0,
        id_chofer:0,
        editando:false,
		
		
	},

	created:function(){
		this.getDatos();
	},
	methods:
	{
		getDatos:function(){
			this.$http.get(url)
			.then(function(json){
				this.datos=json.data;

			});
		},

	
	}

})