var arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,0];
var status = 0;
var moves = 1;
var score_game = 0;
var game=0;
function move(val){
    let trash;
    if (status==2){
    if (arr[val+1]==0 ){
        if (val==3 || val==7 || val==11){//проверка находятся ли на одной строчке
            return;
        }
        else{
        trash=arr[val];
        arr[val]=arr[val+1];
        arr[val+1]=trash;
        document.getElementById("btn"+val).value=" ";
        document.getElementById("btn"+(val+1)).value=trash;
        }
    }
    
    else if (arr[val-1]==0 ){
        if (val==4 || val==8 || val==12){//проверка находятся ли на одной строчке
            return;
        }
        else{
        trash=arr[val];
        arr[val]=arr[val-1];
        arr[val-1]=trash;
        document.getElementById("btn"+val).value=" ";
        document.getElementById("btn"+(val-1)).value=trash;
        }

    }
    else if(arr[val+4]==0 ){
        trash=arr[val];
        arr[val]=arr[val+4];
        arr[val+4]=trash;
        document.getElementById("btn"+val).value=" ";
        document.getElementById("btn"+(val+4)).value=trash;

    }
    else if(arr[val-4]==0 ){
        trash=arr[val];
        arr[val]=arr[val-4];
        arr[val-4]=trash;
        document.getElementById("btn"+val).value=" ";
        document.getElementById("btn"+(val-4)).value=trash;

    }
}
   
}
function newround()
    {
    for (let j = 0; j <= 14; j++){
        document.getElementById("btn"+j).value=j+1;
        arr[j]=j+1;
    }
    document.getElementById("btn15").value=" ";
    arr[15]=0;
    }

function newgame(){
    let pin = 15;
    let trash;
    newround();
    status=2;
    moves=1;
    score_game=0;
    for (let j = 1; j <= 500; j++){
        let gen=Math.floor(Math.random() * 4);
        
        if (gen==0 && pin-4>=0)
        {
            move(pin-4);
            pin=pin-4;
        }

        if (gen==1 && pin+1<=15)
        {
            move(pin+1);
            pin=pin+1;
        }

        if (gen==2 && pin+4<=15)
        {
            move(pin+4);
            pin=pin+4;
        }

        if (gen==3 && pin-1>=0)
        {
            move(pin-1);
            pin=pin-1;
        }
        
    }
    
}

function check(){
    let count=0;
    for (let p=0; p<=14;p++){
        if (document.getElementById("btn"+p).value==p+1){
            count+=1;
        }
        
    }
    if (document.getElementById("btn"+15).value==" "){
            count+=1;
        }
    
    if (count==16 && status==2){
        alert("победа");
        status=0;
        moves=0;
        
        
    }
}

function score()
{
    moves += 1;
	document.getElementById("btn001").value=score_game;
    score_game = 125-moves;
}

