<div class="container">


	<h1>Medicos</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>CRM</th>
				<th>Ramal</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($medicos as $medico) : ?>

				<tr>
					<td scope="row"><?=$medico["nome"]?></td>
					<td scope="row"><?=$medico["crm"]?></td>
					<td scope="row"><?=$medico["ramal"]?></td>
					
				</tr>
			<?php endforeach ?>

		</tbody>
	</table>
</div>