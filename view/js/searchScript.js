var searchBox          = null;
var value              = null;
var http               = null;
var respond            = null;
var containerResultBox = null;
var respondJson        = null;
// Where the content has loaded
document.addEventListener("DOMContentLoaded",  (event)=>{
    searchBox              = document.querySelector("#searchBox");
    containerResultBox     = document.querySelector("#resultBox");
    
});

function search(){
    let word  = searchBox.value;
    removeChild();
    http      = new XMLHttpRequest();
    
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            respond = this.responseText;
            console.log(respond);
            respondJson = JSON.parse(respond);
            
            represesnt();
        }
    };
    http.open("GET", "http://127.0.0.1:8080/phpmbs/api/searchServicesApi.php?keyword="+word);
    http.send();

}

function represesnt(){

   
   /*  remove old row  */
   removeChild()

   for(let i = 0; i<respondJson.data.length; i++){
       
       let div  = document.createElement('div');
       div.classList = "old card  ml-3";
       div.style.width = "18rem";
       // image
       let img = document.createElement('img');
       img.classList = "card-img-top";
       img.style.maxHeight = "200px";
       img.alt = "Card image ca";
       img.src = respondJson.data[i].image;
       //div
       let divch = document.createElement('div');
       divch.classList = "card-body";
       // name server
       let h5Name = document.createElement('h5');
       h5Name.classList = "card-title";
       h5Name.innerText =  respondJson.data[i].name;
       //descriptoin
       let PDes = document.createElement('P')
       PDes.classList = "card-text";
       PDes.innerText =  respondJson.data[i].about;
       //form
       let formButton = document.createElement('form');
       formButton.action ="./../controller/bookingController.php";
       formButton.method = "POST";
       //hidden input
       let inputhidden = document.createElement("input");
       inputhidden.type = "hidden";
       inputhidden.name = "id_service";
       inputhidden.value =  respondJson.data[i].id;
       // Submit Button
       let inputSub = document.createElement("input");
       inputSub.type = "submit";
       inputSub.classList = "btn btn-primary";
       inputSub.value = "Booking";

       div.append(img);
       div.append(divch);
       divch.append(h5Name);
       divch.append(PDes);
       divch.append(formButton);
       formButton.append(inputhidden);
       formButton.append(inputSub);



       

       containerResultBox.append(div);

    }

    
}

function removeChild(){
    /** Remove all chidler  */
     containerResultBox.innerHTML = ' ';

    
}
