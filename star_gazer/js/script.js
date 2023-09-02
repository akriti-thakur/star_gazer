function updateplanet(clicked){

}




function addplanet(){
   let name = document.getElementById('name').value;
  let size = document.getElementById('size').value;
 let  speed = document.getElementById('speed').value;
let image= document.getElementById('image').value;

let value="name="+name+"size="+size+"speed"+speed+"image="+image;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("error").innerHTML = this.responseText;
    }
};

xhttp.open('POST', "planet/addplanet.php", true);
xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhttp.send(value);
}
