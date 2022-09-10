unction Tcreator(){

for (i = 0; i < 5; i++){
    var p = document.createElement("p6");
    p.innerHTML = "sdfds";
    document.body.appendChild(p);
}
}
Tcreator();


function Chel(){
    let e = document.getElementById("fo");
    let el = e.getBoundingClientRect();
    console.log(el);
    var i = 0;
    for (var key in el[key]){
    var pvh = document.getElementsByTagName("p6")[i];
    pvh.textContent = `${key}`+ ":" + `${el[key]}`; 
    i++;
    }
}
    
    
function Colour(){
    var colours = ["red","green","white"];
    var e = colours.length - 1;
    var r = Math.floor(Math.random() * e);
    document.body.style.backgroundColor = colours[r];
}
       


//document.addEventListener("scroll",Chel);


function nearme(){
   var p = document.getElementsByTagName("p2")[0];
   
   var ctm = p.getBoundingClientRect();
console.log(ctm);
   if (ctm["top"] < 30)
       {
           document.body.style.backgroundColor = "red";
           
       }
    else if (ctm["top"] < -30)
       {
        document.body.style.backgroundColor = "green";  
       }
    else {
    document.body.style.backgroundColor = "blue";}
    p.textContext = ctm["top"].toString();
}



document.addEventListener("scroll",nearme);
