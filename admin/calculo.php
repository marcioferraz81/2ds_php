<div class="col-md-12 col-sm-12 mb-2">
    <div class="form-group">
        <label for="txtvalor">Valor</label>
        <input type="number" step="0.5" class="form-control"
               id="txtvalor"
               name="txtvalor" value>
    </div>
    <div class="form-group">
        <label for="txtdesconto">Desconto</label>
        <input type="number" step="0.5" class="form-control"
               id="txtdesconto"
               name="txtdesconto" value>
    </div>
    <div class="form-group">
        <label for="txtmulta">Multa</label>
        <input type="number" step="0.5" class="form-control"
               id="txtmulta"
               name="txtmulta" value>
    </div>

    <div class="form-group">
        <button id="calcular"
                class="btn btn-danger">Calcular</button>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-2 col-sm-6">
            <label for="txtcolor">Escolha uma nova cor</label>
            <input type="color" name="txtcolor" id="txtcolor" class="form-control">
        </div>
    </div>
    <hr>
</div>

<div class="col-md-12 col-sm-12 mt-2">
    <div class="alert alert-primary" role="alert">
        <p id="txtresultado">Resultado: </p>
    </div>
</div>
<div class="col-md-12 col-sm-12 mb-2">
    <div class="alert alert-warning" role="alert">
        <p id="txtmsg">Mensagem: </p>
    </div>
</div>
<div class="col-md-12 col-sm-12 mb-2">
    <div class="alert alert-success" role="alert">
        <p id="txtfatorial">N! </p>
    </div>
</div>

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>

<script src="../js/calculos.js"></script>