


function keypad(l) {
 
    if(l.length !== 10){
        console.log(false)
    }
    else {

    for(var i = 0 ; i < 10 ; i++){

if (l[i]==="A" || l[i] === "B" || l[i] === "C" ){
  console.log(2)
}
else if (l[i]==="D" || l[i] === "E" || l[i] === "F") {
  console.log(3)
}
else if (l[i]==="G" || l[i] === "H" || l[i] === "I") {
  console.log(4) 
}
else if (l[i]==="J" || l[i] === "K" || l[i] === "L") {
    console.log(5)
  }
  else if (l[i]==="M" || l[i] === "N" || l[i] === "O") {
    console.log(6)
  }
  else if (l[i]==="P" || l[i] === "Q" || l[i] === "S" || l[i] === "R") {
    console.log(7)
  }
  else if (l[i]==="T" || l[i] === "U" || l[i] === "V") {
    console.log(8)
  }
  else if (l[i]==="W" || l[i] === "X" || l[i] === "Y" || l[i] === "Z") {
    console.log(9)
  }
}
}
 }

const l = ["Entotoproj".toUpperCase().split('') ]

keypad(...l)


