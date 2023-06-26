let ee = document.getElementById('cat_carrera');
let ef = document.getElementById('catalogo_org');
var cs = document.getElementById('catalogo');
ee.addEventListener("change", function(){
   if (ee.value != 0 ) {
      cs.disabled = false;
      cs.hidden = false;
               
   }else {
      cs.disabled = true;
   }
});
cs.addEventListener("change", function(){
   if (cs.value != 0 ) {
      ef.hidden = false;                        
   }else {
      cs.disabled = true;
   }
});