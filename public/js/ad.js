var url = 'http://localhost/transporte/public/apiChofer';
var urlturno = 'http://localhost/transporte/public/apiTurno';
var urlauto = '';

new Vue ({
      http: {
    headers:{
         'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     }
    },
el:'#admi',

     created:function(){
    this.getChofer();
     this.getTurno();
    },
data:{
    prueva:'hola',
    chofer:[],
    dias:[],
    sueldo:[150,150,150,150],
    total1:[],
    turno:[],
    prestamo:[0,0,0,0,0],
    id_chofer:0,
    buscar:''
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
        addprod:function(id){
            var dias = this.dias[id];
            var sueldo = this.sueldo[id];
            var prestamo = this.prestamo[id];
            var totalss = dias * sueldo - prestamo;
            Swal.fire({
                title: 'El pago es:',
                text: totalss,        

            })
            
           
        }

}


})