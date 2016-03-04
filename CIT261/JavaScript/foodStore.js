 //The request object will be stored in the xmlHttp variable
        var xmlHttp = createXmlHttpRequestObject();
        //This function creates the request object that will be responsible for communicating with the server
        function createXmlHttpRequestObject(){
            var xmlHttp;//Clarify that we are working with the xmlHttp variable
            
            //Test for Internet explorer and use ActiveXObject if true
            if(window.ActiveXObject){
                try{
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }catch(e){
                        xmlHttp = false;
                    }
            }else{//Else use the following for other Operating systems...
                try{
                    xmlHttp = new XMLHttpRequest();
                    }catch (e){
                        xmlHttp = false;
                    }
            }       
            if(!xmlHttp){//Cover our butt if we simply can't create the object
                alert("We can't create that object!");
            }else{
                return xmlHttp; //If all goes well, return the variable, which has the request object stored in it
            }
        }
        //This is the function responsible for taking the object we just created and sending a request to the server
        //Designated as "onload" in the body means the function will kick off immediately upon loading the page
        function process(){
            //Tests for the object state
            //Remember, the xmlHttp variable is where the request object is stored.
            if(xmlHttp.readyState==0 || xmlHttp.readyState==4){ //Test if the request object is available (before it has started, or when it has finished)
                food = encodeURIComponent(document.getElementById("userInput").value);//The variable called food is equal to whatever the user types into the input box.
                xmlHttp.open("GET", "foodStore.php?food="+food, true);
                //"object's name".open is a builtin function that creates the type of request we are going to send to the server.        
                //GET = what type of request.  Whatever request you send is the type you must recieve.     
                //foodStore.php is the url of the file.  The ? seperates the parameter.
                //true means it is asynchronous
                        xmlHttp.onreadystatechange = handleServerResponse; //Another builtin saying whenever the server responds with information, do something with it.
                        xmlHttp.send(null);//A builtin that sends the request. GET doesn't use a parameter, therefore null.  POST only uses a parameter.
            }else{
                setTimeout('process()',1000);//If the Object is busy, wait, and then communicate again with the process() function.
            }
        }
        //Tells what to do with the response from the server.
        function handleServerResponse(){
            if(xmlHttp.readyState==4){//if the object is done communicating....
                if(xmlHttp.status==200){//if the communication session went okay...
                    xmlResponse = xmlHttp.responseXML;//Store the response in a variable called xmlResponse.
                                                     //responseXML is a buitin function that extracts the XML from the file.
                    xmlDocumentElement = xmlResponse.documentElement;//The documentElement is the root element of the XML file, stored in a variable named xmlDocumentElement.
                    message = xmlDocumentElement.firstChild.data; //gets the data from the first (and only child) of the document (located within the <response> tags) (stored in the xmlDocumentElement variable).
                    //Changes the HTML file
                    //innerHTMl is what shows on the page, the stuff between the tags.
                    document.getElementById("underInput").innerHTML = '<span style="color:blue">' + message + '</span>';
                    setTimeout('process()',1000);
                }
                else{
                    alert('Something went wrong!');
                }
            }
        }
    //3 AJAX components:  Function to create the object for communication, function to communicate with the server, function to do something with the information. 

