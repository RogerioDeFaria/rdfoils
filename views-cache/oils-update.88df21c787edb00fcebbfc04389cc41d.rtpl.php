<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Óleos
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Óleos</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/oils/<?php echo htmlspecialchars( $oils["idoil"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <!-- Tabela tb_oils -->
              <label for="desenglishname">Nome do Óleo em Inglês</label>
              <input type="text" class="form-control" id="desenglishname" name="desenglishname" placeholder="Digite o nome do Óleo em Inglês" value="<?php echo htmlspecialchars( $oils["desenglishname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
              <label for="desportuguesename">Nome do Óleo em Português</label>
              <input type="text" class="form-control" id="desportuguesename" name="desportuguesename" placeholder="Digite o nome do Óleo em Português" value="<?php echo htmlspecialchars( $oils["desportuguesename"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <!-- Tabela tb_oil_facts -->
              <label for="desscientificname">Nome científico</label>
              <input type="text" class="form-control" id="desscientificname" name="desscientificname" placeholder="Digite o nome científico" value="<?php echo htmlspecialchars( $oils["desscientificname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="descommonname">Nome popular</label>
              <input type="text" class="form-control" id="descommonname" name="descommonname" placeholder="Digite o nome popular" value="<?php echo htmlspecialchars( $oils["descommonname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desfamily">Família botânica</label>
              <input type="text" class="form-control" id="desfamily" name="desfamily" placeholder="Digite a família botânica" value="<?php echo htmlspecialchars( $oils["desfamily"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desorigin">Orígem do óleo</label>
              <input type="text" class="form-control" id="desorigin" name="desorigin" placeholder="Digite a orígem do óleo" value="<?php echo htmlspecialchars( $oils["desorigin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desextrmethod">Método de extração</label>
              <input type="text" class="form-control" id="desextrmethod" name="desextrmethod" placeholder="Digite o método de extração" value="<?php echo htmlspecialchars( $oils["desextrmethod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="description">Descrição do produto</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Digite a descrição do produto" value="<?php echo htmlspecialchars( $oils["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desdilution">Diluição</label>
              <input type="text" class="form-control" id="desdilution" name="desdilution" placeholder="Digite o modo de diluição" value="<?php echo htmlspecialchars( $oils["desdilution"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="dessecurity">Informações de segurança</label>
              <input type="text" class="form-control" id="dessecurity" name="dessecurity" placeholder="Digite as informações de segurança" value="<?php echo htmlspecialchars( $oils["dessecurity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desapplications">Aplicações</label>
              <input type="text" class="form-control" id="desapplications" name="desapplications" placeholder="Digite as aplicações" value="<?php echo htmlspecialchars( $oils["desapplications"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desbenefit">Benefícios primários</label>
              <input type="text" class="form-control" id="desbenefit" name="desbenefit" placeholder="Digite os benefícios primários" value="<?php echo htmlspecialchars( $oils["desbenefit"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="desprimaryuses">Usos primários comuns</label>
              <input type="text" class="form-control" id="desprimaryuses" name="desprimaryuses" placeholder="Digite os usos primários comuns" value="<?php echo htmlspecialchars( $oils["desprimaryuses"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="inaromatic_use">Uso aromático? (0 - não / 1 - sim)</label>
              <input type="text" class="form-control" id="inaromatic_use" name="inaromatic_use" placeholder="Uso aromático - 0 (não) ou 1 (sim)" value="<?php echo htmlspecialchars( $oils["inaromatic_use"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="intopical_use">Uso tópico? (0 - não / 1 - sim)</label>
              <input type="text" class="form-control" id="intopical_use" name="intopical_use" placeholder="Uso tópico - 0 (não) ou 1 (sim)" value="<?php echo htmlspecialchars( $oils["intopical_use"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              <label for="internal_use">Uso interno? (0 - não / 1 - sim)</label>
              <input type="text" class="form-control" id="internal_use" name="internal_use" placeholder="Uso interno - 0 (não) ou 1 (sim)" value="<?php echo htmlspecialchars( $oils["internal_use"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->