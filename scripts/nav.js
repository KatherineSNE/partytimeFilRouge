
    let path = window.location.pathname;
    let page = path.split("/").pop();

    let purple = document.getElementsByClassName("purple");
    let blue = document.getElementsByClassName("blue");
    let pink = document.getElementsByClassName("pink");
    let yellow = document.getElementsByClassName("yellow");
    let green = document.getElementsByClassName("green");

    if (page=="Deconnected"|"Login"){
    for(let i=0; i<purple.length; i++){
        purple[i].style.backgroundColor="purple";  
        }
    }

    else if (page=="Shots"|"mcjsoroy581s87s9AdMinAreABossInDaHouse!"){
        for(let j=0; j<blue.length; j++){
            blue[j].style.backgroundColor="blue";  
        }
    }

    else if(page=="Ideas"|"sop489kh62375AdMinAreABossInDaHouse!"){
        for(let k=0; k<pink.length; k++){
            pink[k].style.backgroundColor="pink";  
        }
    }

    else if(page=="Panier"|"685732145AdMinAreABossInDaHouse"){
        for(let l=0; l<yellow.length; l++){
            yellow[l].style.backgroundColor="yellow";  
        }
    }

    else if(page=="Contact"|"Verify"){
        for(let m=0; m<green.length; m++){
            green[m].style.backgroundColor="green";  
        }
    }