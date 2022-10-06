<?php
include_once './includes/_head.php';
include_once './includes/_header.php';

?>
<div class="container">
<div style="width: 20rem;"class="mb-2">
  <label id="input"for="exampleFormControlInput1" class="form-label">Nome</label>
  <input type="text" class="form-control" id="exampleFormControlInput1">
</div>
<div>
<label class="mb-2" for="Partido">Partido</label>
    <select style="width: 10rem"; name="Partido" id="Partido">
    <option value="YUPI">YUPI</option>
    <option value="PIPI">PIPI</option>
    <option value="FGAR">FGAR</option>
</select>
<label class="mb-2 mt-4" for="Cargo">Cargo</label>
    <select  style="width: 10rem;" name="Cargo" id="Cargo">
    <option value="Deputado Federal">Deputado Federal</option>
    <option value="Deputado Estadual">Deputado Estadual</option>
    <option value="Presidente">Presidente</option>
</select>
</div>
<div style="width: 20rem;"class="mb-3 mt-4">
  <label for="exampleFormControlInput1" class="form-label">Número</label>
  <input type="numero" class="form-control" id="exampleFormControlInput1">

<div style="width: 25rem;" class="mb-4 mt-4">
  <label for="formFile" class="form-label">Imagem do candidato</label>
  <input class="form-control" type="file" id="formFile">
</div>

<input style="background-color: grey; border:none;"class="btn btn-primary" type="Submit" value="Enviar">
</div>
