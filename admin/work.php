<?php 
include '../lib/include.php';
include '../partials/admin_header.php';

/**
* SUPPRESSION
**/
if(isset($_GET['delete'])){
	checkCsrf();
	$id = $db->quote($_GET['delete']);
	$db->query("DELETE FROM works WHERE id=$id");
	setFlash('La réalisation a été suprimée');
	header('Location:work.php');
	die();
}

/**
*Catégories
**/

$select = $db->query('SELECT id, name, slug FROM works');
$works = $select->fetchAll();


?>

<h1>Les Réalisations</h1>

<p><a href="work_edit.php" clas="btn btn-success">Ajouter une nouvelle réalisation</a></p>
<table class="tablet table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($works as $category): ?>
			<tr>
				<td><?= $category['id']; ?></td>
				<td><?= $category['name']; ?></td>
				<td>
					<a href="work_edit.php?id=<?= $category['id']; ?>" class="btn btn-default">Editer</a>
					<a href="?delete=<?= $category['id']; ?>&<?=csrf(); ?>" class="btn btn-error" onclick="return confirm('êtes-vous sûr?');">supprimer</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php include '../partials/footer.php'; ?>