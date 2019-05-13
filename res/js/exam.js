function questionNumbers(total){

    var x="",i;
    for(i=1; i<=total; i++)
    {
        x=x+"<button type='button' id='ques"+i+"' class='mark' onclick='markVisited("+i+")'>"+i+"</button>";
        if(i%4==0)
        x=x+"<br>";
    }
    x=x+"<div> <button name='submit-test' type='button' class='all-button all-button-hover' onclick='calculateScore()'>Submit Test</button></div>";
    document.getElementById("mark-question").innerHTML = x;
}


/*Show timer during the exam */
function showTimer(){

  //console.log(total);
  var deadline = new Date().getTime()+1000*60*30; 
  var x = setInterval(function() { 
  var now = new Date().getTime(); 
  var t = deadline - now; 
  var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
  var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
  var seconds = Math.floor((t % (1000 * 60)) / 1000); 
  document.getElementById("timer").innerHTML = hours + "h " + minutes + "m " + seconds + "s "; 
      if (t < 0) { 
          clearInterval(x); 
          calculateScore();
      } 
  }, 1000); 

}

showTimer(30);
