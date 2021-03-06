<section class="caixa mt-4">

				<div class="titulo h5 mb-0"> <h2>Lista de Parentes</h2></div>

				<div class="base-lista">

					<div>

						<div class="text-end d-flex">

							<a href="<?php echo URL_BASE."parente/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar Parente</a>

							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>

						</div>

					</div>

					<div class="lst mostraFiltro" style="">

						<form action="" method="">

						<div class="rows">

								<div class="col-4">

									<select name="txt_id_empresa">

										<option selected>Selecione o valor...</option>

										<option value="1">Código</option>

										<option value="2">Nome</option>

										<option value="3">Nascimento</option>

										<option value="4">Celular</option>

										<option value="5">Email</option>

										<option value="6">Relacionamento</option>

									</select>

								</div>

								<div class="col-6">

									<input type="text" name="" placeholder="Valor da pesquisar..." >

								</div>

								<div class="col-2">

									<input type="submit" class="btn btn-azul" value="pesquisar">

								</div>

						</div>

						</form>

					</div>

						

				<div class="tabela-responsiva tabela">

					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">

						<thead> 

						 <tr>

						 <th align="left">ID</th>

							<th align="left">Nome</th>

							<th align="left">Nascimento</th>

                            <th align="left">Celular</th>

							<th align="left">Email</th>

                            <th align="center">Relacionamento</th>

							<th align="center">Ação</th>

						 </tr>

						</thead> 

						<tbody>

							<?php foreach($parente as $contato) { ?>

							<tr>

								<td><?php echo $contato->idparente; ?></td>

								<td><?php echo $contato->nome; ?></td>

								<td><?php echo $contato->nascimento; ?></td>

								<td align="center"><?php echo $contato->celular; ?></td>

                                <td align="center"><?php echo $contato->email; ?></td>

                                <td align="center"><?php echo $contato->relacionamento; ?></td>

								<td align="center">

									<a href="formulario.html" class="btn btn-editar" title="Editar"></a>

									<a href="formulario.html" class="btn btn-exlcuir" title="excluir"></a>

								</td>

							</tr>

							<?php } ?>	

												

						</tbody> 

					</table>

					</div>

								

					</div>

				</div>

			</section>