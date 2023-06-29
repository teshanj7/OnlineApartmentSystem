var counter =1;
setInterval(function(){
    document.getElementById('radio'+counter).checked = true;
    counter++;
    if(counter>4){
        counter=1;
    }
},5000);

var expanded = false;
        function showCheckBoxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded){
               checkboxes.style.display = "block";
               expanded = true;
            }
            else{
                checkboxes.style.display = "none";
                expanded = false;
            }
        }
var expanded = false;
        function showCheckBox1() {
            var checkbox1 = document.getElementById("checkbox1");
            if (!expanded){
               checkbox1.style.display = "block";
               expanded = true;
            }
            else{
                checkbox1.style.display = "none";
                expanded = false;
            }
        }

var expanded = false;
        function showCheckBox2() {
            var checkbox2 = document.getElementById("checkbox2");
            if (!expanded){
               checkbox2.style.display = "block";
               expanded = true;
            }
            else{
                checkbox2.style.display = "none";
                expanded = false;
            }
        }

var expanded = false;
        function showCheckBox3() {
            var checkbox3 = document.getElementById("checkbox3");
            if (!expanded){
               checkbox3.style.display = "block";
               expanded = true;
            }
            else{
                checkbox3.style.display = "none";
                expanded = false;
            }
        }