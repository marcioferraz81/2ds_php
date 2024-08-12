var vez = 1;
var vencedor = "";

$(".casa").click(function () {
    var bg = $(this).css("background-image");
    if (bg === "none" || bg === "")
    {
        var imagem = "url(../img/" + vez.toString() + ".jpg)";
        $(this).css("background", imagem);

        vez = (vez === 1 ? 2 : 1);
        verificarFimDeJogo();
    }
});

function verificarFimDeJogo() {
    if (verificarCasas(1, 2, 3) ||
            verificarCasas(4, 5, 6) ||
            verificarCasas(7, 8, 9) ||
            verificarCasas(1, 4, 7) ||
            verificarCasas(2, 5, 8) ||
            verificarCasas(3, 6, 9) ||
            verificarCasas(1, 5, 9) ||
            verificarCasas(3, 5, 7)
            ) {
        $("#resultado").html("<h1>O jogador " + vencedor + " venceu! </h1>");
        $(".casa").off("click");
    }
}

function verificarCasas(pos1, pos2, pos3) {
    var casaA = $("#casa" + pos1);
    var casaB = $("#casa" + pos2);
    var casaC = $("#casa" + pos3);
    var bgA = $("#casa" + pos1).css("background-image");
    var bgB = $("#casa" + pos2).css("background-image");
    var bgC = $("#casa" + pos3).css("background-image");

//não pode ser none ou vazio, pq senão o vazio será considerado igual e finaliza
    if ((bgA === bgB) && (bgB === bgC) && (bgA !== "none" && bgA !== "")) {
        //se encontrar o nome 1.jpg em bgA 
        if (bgA.indexOf("1.jpg") > 0)
            vencedor = "1";
        else
            vencedor = "2";
        return true;
    } else {
        return false;
    }
}



