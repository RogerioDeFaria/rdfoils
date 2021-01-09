<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Óleos
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/oils">Óleos</a></li>
    <li class="active"><a href="/admin/oils/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Óleo</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/oils/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desenglishname">Nome do óleo em inglês</label>
              <input type="text" class="form-control" id="desenglishname" name="desenglishname" placeholder="Digite o nome do óleo em inglês">
              <label for="desportuguesename">Nome do óleo em português</label>
              <input type="text" class="form-control" id="desportuguesename" name="desportuguesename" placeholder="Digite o nome do óleo em português">
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