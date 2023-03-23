<div class="container">
	<h1>Портфолио</h1>
	<p>Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.</p>
	<table class="table">
		<thead>
			<tr>
				<th class="bg-dark-subtle">Год</th>
				<th class="bg-dark-subtle">Проект</th>
				<th class="bg-dark-subtle">Описание</th>
			</tr>
		</thead>
		<tbody>
			<?php

			foreach ($data as $row) {
				echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
			}

			?>
		</tbody>
	</table>
</div>