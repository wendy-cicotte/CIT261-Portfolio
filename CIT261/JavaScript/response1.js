/* global Storage */

var request = createXmlHttpRequestObject();
var myArr;
function createXmlHttpRequestObject(){
    var request;
    
    if(window.XMLHttpRequest){
        request = new XMLHttpRequest();
    }else{
        request = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return request;
}

function process(){
    if(request){//if we have a valid request object try the following:
        try{
            //.open does not start a connection with the server.  It configures, or sets up the connection with the server.
            //GET = how to send data to the server. URL = where to send data. true = if it is true, handle asynchronously (at the same time) 
            request.open("GET", "/ajax/list.json", true);//not connected to the server yet.
            //.onreadystatechange is a property that we set equal to a function that gets called anytime the program communicates with the server and the state is changed.
            //.onreadystatechange must be set before the communication actually occurs.
            request.onreadystatechange = handleServerResponse;
            //The function that connects or communicates with the server.
            request.send(null);
            }catch(e){
                alert( e.toString() );
            }
        }
    }           
    //The request has been sent off above and now we need to tell the program what to do with the information.
    function handleServerResponse(){
       
        //1 = established a connection with server. 2 = request received. 3 = server is processing the request. 4 = The communication went okay (but not necessarily successful).
        if(request.readyState==4){
            if(request.status==200){//status = 200 indicates success.  
                try{
                    myArr = JSON.parse(request.responseText);
                    
                    listKids(myArr);
                }catch(e){
                    alert( e.toString() );
                }
            }else{
                alert( request.statusText );//tells us what went wrong.
            }
        }
    }
    function listKids(myArr){
        var out = "";
        for(i=0; i < myArr.length; i++){
            out += '<div id="border" class="border">' + '<p class="change">' + myArr[i].name + "</br>" + myArr[i].Birth + "</br>" + myArr[i].status + "</p>" + "</div>" + "</br>";
         if(typeof(Storage) !== undefined){
            localStorage.setItem(myArr[i].name, JSON.stringify(myArr[i]));
        }else{
            document.getElementById("kids").innerHTML = "Your browser does not support local storage.";
        }
        document.getElementById("kids").innerHTML = out;
        }          
    }
function changeStatus(){
        myArr[3].status = "Gone! Southern Utah University";
        myArr[0].name = "Taylor Hare";
        myArr[1].name = "Abigail Bird";
        myArr[0].status = "Married! Denver, Colorado";
        myArr[1].status = "Married! Rexburg, Idaho";
               
        listKids(myArr);
    }
    
 function changeSize(el){
	var elem = document.getElementById(el);
	elem.style.transition = "background 3.0s ease-in 3.0s";
        elem.style.transition = "width 3.0s ease-in 0s";
	elem.style.background = "#9DCEFF";
        elem.style.width = "500px";
}