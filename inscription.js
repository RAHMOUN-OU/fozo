let first_name = document.getElementById('input1');
let last_name = document.getElementById('input2');
let mail = document.getElementById('input3');
let age = document.getElementById('input4');
// let style_of_cloths = document.querySelectorAll('#input5');
let erea = document.getElementById('input6');
let max_lenght = document.getElementsByClassName('maxl');
let passwr1 = document.getElementById('input7');
let passwr2 = document.getElementById('input8');
let btn_validation = document.getElementById('validation');
let subm = document.getElementById('input9');

btn_validation.style.display = "none";

// let submit_valide="true";

subm.addEventListener("click",function(e){
    e.preventDefault();
    if(first_name.value.charAt(0)!==first_name.value.charAt(0).toUpperCase() || first_name.value.length<2 ){
        
        document.getElementById('V1').innerHTML="may the name so small Or the first littre diffrent uppercase ";
        document.getElementById("V1").style="font-size: 10px; padding-left:5px; color:green;";
        submit_valide="false";
    }

    if(last_name.value.charAt(0)!==last_name.value.charAt(0).toUpperCase() || last_name.value.length<2 ){
        
        document.getElementById('V2').innerHTML="may the name so small Or the first littre diffrent uppercase ";
        document.getElementById("V2").style="font-size: 10px; padding-left:5px; color:green;";
        submit_valide="false";
    }

    //check mail

    let mail1 = mail.value.indexOf("@") 

if(mail.value.slice(mail1)!=="@uhp.ac.ma"){

document.getElementById("V10").innerHTML="may this mail not a prof mail";
document.getElementById("V10").style="font-size: 10px; padding-left:5px; color:green;";
submit_valide="false";
}


if(age.value<18 || age.value>70){
document.getElementById("V3").innerHTML="u are xaref(older) or so adult";
document.getElementById("V3").style="font-size: 10px; padding-left:5px; color:green;";
submit_valide="false";

}


if(passwr1.value!==passwr2.value || passwr1.value.length<8){
  document.getElementById("V4").innerHTML="The first password is different from the second";
  document.getElementById("V4").style="font-size: 10px; padding-left:5px; color:green;";
  submit_valide="false";
}




},false);

// if(submit_valide==="true"){
//     subm.style.display = "block"; 
// }
//  else{
//     subm.style.display="none";
// }



erea.Onkeydown = function(){
    max_lenght.innerHTML=erea.getAttribute("maxlength") - this.value.length
};
















