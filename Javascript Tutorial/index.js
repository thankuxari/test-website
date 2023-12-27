document.getElementById("submit").onclick = () => {


   switch(document.getElementById("checkbox").checked){
    case true :
        console.log("true");
        break;
    case false :
        console.log("false");
        break;
   }

    if(document.getElementById("male").checked)
    {
        console.log("You are male");
    }
    else
    {
        console.log("You are female");
    }
} 