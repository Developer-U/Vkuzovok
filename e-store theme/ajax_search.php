<?php
if (!empty($_POST['search'])) {
	$search = $_POST['search'];
	$search = mb_eregi_replace("[^a-zа-яё0-9 ]", '', $search);
	$search = trim($search);
 
	$sth = $dbh->prepare("SELECT * FROM `city` WHERE `name` LIKE '{$search}%' ORDER BY `name`");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
 
	if ($result) {
		?>
		<div class="search_result">
			<table>
				<?php foreach ($result as $row): ?>
				<tr>
					<td class="search_result-name">
						<a href="#"><?php echo $row['name']; ?></a>
					</td>
					<td class="search_result-btn">
						<a href="#">Перейти</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<?php
	}
}