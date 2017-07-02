Main = {};   //Objekterzeugung
Main.WordArray = [];    //Es werden zwei Arrays erstellt
Main.WordUArray = [];

Main.Lives = 5;
Main.NumInWordBank = Words.Length;

Main.Highscore=100000; // Fixer Startwert für den Highscore

Main.Word = "test";
Main.WordU = "";

Main.PullWord = function(){

    Main.Word = Words.List[(Math.floor(Math.random()*Main.NumInWordBank))];  // Gibt eine Zufallszahl zwischen min z.B. 0 (inklusive) und max z.B. 1 (exklusive) zurück
};

Main.SetUnderline = function (){
    Main.PullWord();

    for(i=0; i<Main.Word.length; i++){

        Main.WordArray[i] = Main.Word.charAt(i);   //Ein String, der das Zeichen an der angegebenen index-Stelle wiedergibt.
        Main.WordUArray[i] = "_";
    }
    Main.WordU = Main.WordUArray.join("");
    document.getElementById("WORD").innerHTML = Main.WordU;             // Wertezuweisung, WORD aus der Index erhält die Werte aus Main.WordU
    document.getElementById("numLetters").innerHTML = Main.Word.length;     //Wertezuweisung, numLetters aus der index bekommt die Werte aus Main.Word.length übergeben
};

//Die Methode Document.getElementById() greift auf ein HTML-Element zu, das ein eindeutiges id-Attribut besitzt

Main.UpdateLetter = function(letter) {



    Main.Changes = 0;


    for (var i = 0; i < Main.Word.length; i++) {
        Main.WordArray[i] = Main.Word.charAt(i);

        if (Main.Word.charAt(i) == letter) {        // Bedingungen werden definiert, wenn diese zutreffen, erhöht sich die (oben) deklarierte Variable Main.Changes um 1
            Main.WordUArray[i] = letter;
            Main.Changes += 1;

        }
    }



    if (Main.Changes < 1) {                 // Bedingung für den Verlust eines Lebens
        Main.Lives -= 1;
        document.getElementById("lives").innerHTML = Main.Lives;


    }

    if(Main.Changes <1) {               // Bedingung für die Abnahme des Highscore
        Main.Highscore-=12357;
        document.getElementById("highscore").innerHTML = Main.Highscore;
    }


    Main.WordU = Main.WordUArray.join("");
    document.getElementById("WORD").innerHTML = Main.WordU;

    console.log(5);

    console.log( Main.WordUArray);
    console.log(Main.WordArray);

    Main.Word1=Main.WordArray.join("");
    Main.Word2=Main.WordUArray.join("");



                                                                // Wenn das eingebene Wort bzw die eingebenen Buchstaben aus dem dem Array Main.Word
                                                                // mit dem Wort bzw den Buchstaben aus dem Array WordU übereinstimmen tritt jene Anweisung in Kraft

    if(Main.Word1===Main.Word2){
        alert("Sie haben gewonnen!!");

        var score = Main.Highscore;                                // Highscore in Variable speichern, sobald Spiel gewonnen wurde
        alert ("Gratulation Ihr Score Beträgt: " +score);           // Score im Browser ausgeben


        $.ajax({                                                    //Ajax, um der PHP Datei den Highscore zu übergeben, damit dieser in die Datenbank geschrieben werden kann
            url: "RankedList.php",
            method: "post",
            data: score,
            success: function(data)
            {
                //alert("Sucess!")
            },
            error: function() {
            }
        });

       window.location.reload();

        console.log(6);

    }
                                                                                // wenn die Anzahl der Leben unter 1, spricht 0 beträgt, dann ist das Spiel beendet und man hat verloren

    if (Main.Lives<1) {
        document.getElementById ("WORD").innerHTML==Main.Word;
        alert("Sie haben keine Leben mehr! Versuchen Sie es erneut");
        window.location.reload();
    }

};

Main.PullWord();
Main.SetUnderline();