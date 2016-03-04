function createList(){
    list = document.createElement("ul");
    
    item1 = document.createElement("li");
    text1 = document.createTextNode("Taylor");
    item1.appendChild(text1);
    
    item2 = document.createElement("li");
    text2 = document.createTextNode("Abigail");
    item2.appendChild(text2);
    
    item3 = document.createElement("li");
    text3 = document.createTextNode("Madeline");
    item3.appendChild(text3);
    
    item4 = document.createElement("li");
    text4 = document.createTextNode("Ruthie");
    item4.appendChild(text4);
    
    item5 = document.createElement("li");
    text5 = document.createTextNode("Alan");
    item5.appendChild(text5);
    
    item6 = document.createElement("li");
    text6 = document.createTextNode("George");
    item6.appendChild(text6);
    
    item7 = document.createElement("li");
    text7 = document.createTextNode("Lucy");
    item7.appendChild(text7);
 
    list.appendChild(item1);
    list.appendChild(item2);
    list.appendChild(item3);
    list.appendChild(item4);
    list.appendChild(item5);
    list.appendChild(item6);
    list.appendChild(item7);
    
    divChildren = document.getElementById("divChildren");
    divChildren.appendChild(list);
}

