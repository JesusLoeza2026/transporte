var url="http://localhost/transporte/public/apiLogin";

new Vue({
    http: {
        headers:{
             'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
         }
        },
el:'#contraseña',
data:{
    prueva:'hola',
    nombres:'',
    apellidos:'',
    password:'',
    usuario:'',
   
    contra:[]
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
        
        }
    }



})