<?php 

$auth = 0; 
include 'lib/include.php'; 
include 'lib/image.php'; 


if(!isset($_GET['slug'])){
	header("HTTP/1.1 301 MOVED PERMANENTLY");
	header('location:index.php');
	die();
}

$slug = $db->quote($_GET['slug']);
$select = $db->query("SELECT * FROM works where slug = $slug");
if($select->rowCount() == 0){
	header("HTTP/1.1 301 MOVED PERMANENTLY");
	header('location:index.php');
	die();
}
$work = $select->fetch();
$work_id = $work['id'];

$select = $db->query("SELECT * FROM images where work_id = $work_id");
$images = $select->fetchAll();
$title = $work['name'];

include 'partials/header.php';
?>

<section id="viewrealisations">
	<div class="container">
		<h1 style="color: #000;"><?= $work['name']; ?></h1>
			<div class="contenu">
				<?= $work['content']; ?>
			</div>


		<div class="imagesview">
			<?php foreach($images as $k => $image): ?>
					<img src="<?= WEBROOT; ?>/img/works/<?= $image['name']; ?>" width="80%">
			<?php endforeach ?>
		</div>
	</div>
</section>

<?php //include 'lib/debug.php'; ?>
<?php include 'partials/footer.php'; ?>