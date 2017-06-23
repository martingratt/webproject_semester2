Main = {};
Main.WordArray = [];
Main.WordUArray = [];

Main.Lives = 4;
Main.NumInWordBank = Words.Length;

Main.Word = "test";
Main.WordU = "";

Main.PullWord = function(){

    Main.Word = Words.List[(Math.floor(Math.random()*Main.NumInWordBank))];
};

Main.SetUnderline = function (){
    Main.PullWord();

    for(i=0; i<Main.Word.length; i++){

        Main.WordArray[i] = Main.Word.charAt(i);
        Main.WordUArray[i] = "_";
    }
    Main.WordU = Main.WordUArray.join("");
    document.getElementById("WORD").innerHTML = Main.WordU;
    document.getElementById("numLetters").innerHTML = Main.Word.length;
};

Main.UpdateLetter = function(letter) {



    Main.Changes = 0;


    for (var i = 0; i < Main.Word.length; i++) {
        Main.WordArray[i] = Main.Word.charAt(i);

        if (Main.Word.charAt(i) == letter) {
            Main.WordUArray[i] = letter;
            Main.Changes += 1;

        }
    }



    if (Main.Changes < 1) {
        Main.Lives -= 1;
        document.getElementById("lives").innerHTML = Main.Lives;

    }




    Main.WordU = Main.WordUArray.join("");
    document.getElementById("WORD").innerHTML = Main.WordU;

    console.log(5);

    console.log( Main.WordUArray);
    console.log(Main.WordArray);

    Main.Word1=Main.WordArray.join("");
    Main.Word2=Main.WordUArray.join("");




    if(Main.Word1===Main.Word2){
        alert("Sie haben gewonnen!!");
        window.location.reload();

        console.log(6);

    }

    if (Main.Lives<1) {
        document.getElementById ("WORD").innerHTML==Main.Word;
        alert("Sie haben keine Leben mehr! Versuchen Sie es erneut");
        window.location.reload();
    }

};

Main.PullWord();
Main.SetUnderline();