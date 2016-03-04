var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
    var xmlHttp;
    
    if(window.XMLHttpRequest){
        xmlHttp = new XMLHttpRequest();
    }else{
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlHttp;
}

function process(){
    if(xmlHttp){//if we have a valid request object try the following:
        try{
            //.open does not start a connection with the server.  It configures, or sets up the connection with the server.
            //GET = how to send data to the server. URL = where to send data. true = if it is true, handle asynchronously (at the same time) 
            xmlHttp.open("GET", "/ajax/list.json", true);//not connected to the server yet.
            //.onreadystatechange is a property that we set equal to a function that gets called anytime the program communicates with the server and the state is changed.
            //.onreadystatechange must be before set before the communication actually occurs.
            xmlHttp.onreadystatechange = handleServerResponse;
            //The function that connects or communicates with the server.
            xmlHttp.send(null);
            }catch(e){
                alert( e.toString() );
            }
        }
    }           
    //The request has been sent off above and now we need to tell the program what to do with the information.
    function handleServerResponse(){
        //Sets up a variable to reference the empty html div created in the body
        kids = document.getElementById("kids");
        //1 = established a connection with server. 2 = request received. 3 = server is processing the request. 4 = The communication went okay (but not necessarily successful).
        if(xmlHttp.readyState==1){
            kids.innerHTML += "Status 1: server connection established<br/><br/>";
        }else if(xmlHttp.readyState==2){
            kids.innerHTML += "Status 2: request to server recieved <br/><br/>";
        }else if(xmlHttp.readyState==3){
            kids.innerHTML += "Status 3: server is processing the request <br/><br/>";
        }else if(xmlHttp.readyState==4){
            if(xmlHttp.status==200){//status = 200 indicates success.  
                try{
                    myArr = JSON.parse(xmlHttp.responseText);
                    kids.innerHTML += "Status 4: request is finished and response is ready <br/><br/><br/>";
                    
                }catch(e){
                    alert( e.toString() );
                }
            }else{
                alert( xmlHttp.statusText );//tells us what went wrong.
            }
        }
    }
    

