<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Blends
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/blends">Blends</a></li>
    <li class="active"><a href="/admin/blends/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Blend</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/blends/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <!-- Tabela tb_blends -->
              <label for="desenglishname">Nome do blend em inglês</label>
              <input type="text" class="form-control" id="desenglishname" name="desenglishname" placeholder="Digite o nome do blend em inglês">
              <label for="desportuguesename">Nome do blend em português</label>
              <input type="text" class="form-control" id="desportuguesename" name="desportuguesename" placeholder="Digite o nome do blend em português">
              <!-- Tabela tb_blends_facts -->              
              <label for="descomponents">Componentes</label>
              <input type="text" class="form-control" id="descomponents" name="descomponents" placeholder="Digite os componentes">
              <label for="description">Descrição do produto</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Digite a descrição do produto">
              <label for="desdilution">Diluição</label>
              <input type="text" class="form-control" id="desdilution" name="desdilution" placeholder="Digite o modo de diluição">
              <label for="dessecurity">Informações de segurança</label>
              <input type="text" class="form-control" id="dessecurity" name="dessecurity" placeholder="Digite as informações de segurança">
              <label for="desapplications">Aplicações</label>
              <input type="text" class="form-control" id="desapplications" name="desapplications" placeholder="Digite as aplicações">
              <label for="desbenefit">Benefícios primários</label>
              <input type="text" class="form-control" id="desbenefit" name="desbenefit" placeholder="Digite os benefícios primários">
              <label for="desprimaryuses">Usos primários comuns</label>
              <input type="text" class="form-control" id="desprimaryuses" name="desprimaryuses" placeholder="Digite os usos primários comuns">
              <label for="inaromatic_use">Uso aromático? (0 - não / 1 - sim)</label>
              <input type="text" class="form-control" id="inaromatic_use" name="inaromatic_use" placeholder="Uso aromático - 0 (não) ou 1 (sim)">
              <label for="intopical_use">Uso tópico? (0 - não / 1 - sim)</label>
              <input type="text" class="form-control" id="intopical_use" name="intopical_use" placeholder="Uso tópico - 0 (não) ou 1 (sim)">
              <label for="internal_use">Uso interno? (0 - não / 1 - sim)</label>
              <input type="text" class="form-control" id="internal_use" name="internal_use" placeholder="Uso interno - 0 (não) ou 1 (sim)">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->