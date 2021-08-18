<style type="text/css">
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
input[type=number] { -moz-appearance:textfield; }
</style>
<script>

function mas() {
    document.getElementById("input").value++;
}

function menos() {
    var valor = document.getElementById("input").value;
    

    if (valor == 1) {
    }else if(valor < 1){
        document.getElementById("input").value++;
    }
    else{
        document.getElementById("input").value--;
    }
    
}

function pierdeFoco(e){
    var valor = e.value.replace(/^0*/, '');
   e.value = valor;
 }


</script>


<button id="menos" onclick="menos()">-</button>
<input type="number" name="" id="input" value="1" min="1" 
oninput="this.value = Math.abs(this.value)" onKeyUp="pierdeFoco(this)">
<button id="mas" onclick="mas()" >+</button>

   