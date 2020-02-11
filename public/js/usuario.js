var url = 'http://localhost/transporte/public/apiUsuario';
new Vue({
	el:'#usuario',
	 http: {
	 	headers:{
	  		'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
	  	}
	  },

	data:{
		nombre:'Hola',
		id:'',
		usuario:[],
    	nombres:'',
    	apellidos:'',
    	fecha:'',
    	lugar:'',
    	dirrecion:'',
    	activo:1,
    	cupos:0,
		
	},

	created:function(){
		this.getUsuario();
	},

	methods:{

		getUsuario:function(){
			this.$http.get(url)
			.then(function(json){
				this.usuario=json.data;

			});
			
		}
	}

})