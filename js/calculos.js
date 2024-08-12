$("#txtcolor").change(function () {
    var valor = $(this).val();
    $("body").css("background-color", valor);
});

$("#calcular").click(function () {
    var valor = parseFloat($("#txtvalor").val());
    var desconto = parseFloat($("#txtdesconto").val());
    var multa = parseFloat($("#txtmulta").val());

    var final = parseFloat(valor * (desconto / 100) + multa);

    var moeda = final.toLocaleString("pt-BR", {style: "currency", currency: "BRL"});

    $("#txtresultado")
            .css({'font-weight': 'bold', 'font-size': '18pt'})
            .text('Resultado ' + moeda);

    //estrutura de decisão
    if (valor <= 5) {
        alert('Valor menor ou igual a 5');
    } else {
        alert('Valor maior que 5');
    }
    //if ternário
    var mostrar = ' da média';
    mostrar = (valor > 7) ? 'acima' + mostrar : 'abaixo' + mostrar;

    alert('If ternário: ' + mostrar);

    //switch case 
    var msg = "Resultado é ";

    switch (parseInt(final) % 2) {
        case 0:
            msg += "par";
            break;
        case 1:
            msg += "ímpar";
            break;
        default:
            msg += "erro";
            break;
    }

    $("txtmsg")
            .css({'font-weight': 'bold', 'font-size': '14pt', 'color': 'blue'})
            .text(msg);


    //fatorial 5! = 120
    var fatorial = 1;
    for (var i = 1; i <= valor; i++) {
        fatorial *= i;
    }

    $("#txtfatorial")
            .css({'font-weight': 'bold', 'font-size': '20pt', 'color': '#555'})
            .text('Fatorial de ' + valor + "! é: " + fatorial);
});

