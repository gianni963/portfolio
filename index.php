<?php 

$auth = 0; 
include 'lib/include.php'; 
include 'lib/image.php'; 


$condition ='';
$category = false;
if(isset($_GET['category'])){
	$slug = $db->quote($_GET['category']);
	$select = $db->query("SELECT * FROM categories WHERE slug = $slug");
	if(!isset($_GET['category'])){
		header("HTTP/1.1 301 MOVED PERMANENTLY");
		header('location:' . WEBROOT);
		die();
	}
	$category = $select->fetch();
	$condition = "WHERE works.category_id={$category['id']}";
}

$works = $db->query("
	SELECT works.name, works.id, works.slug, images.name as image_name 
	FROM works 
	LEFT JOIN images ON images.id = works.image_id
	$condition
")->fetchAll();


$categories = $db->query('SELECT slug, name FROM categories')->fetchAll();

if($category){
	$title = "Gianni 3G - {$category['name']}";
}else{
	$title = "Gianni 3G - web developer Bruxelles";
}

if($category){
	$titreh1 = "Mes réalisations - {$category['name']}";
}else{
	$titreh1 = "Mes réalisations";
}
?>


<?php include 'partials/header.php'; ?>

<?php include 'partials/banner.html'; ?>

<?php include 'partials/apropos.php'; ?>

<section id="realisations">
	<div class="container">
		<div class="row">
			<h1><?= $titreh1 ?></h1>
			<hr>
				<h2>Voici la liste de mes réalisations</h2>

				<div class="col-sm-12">
				<ul class="nav nav-pills">
					<?php foreach($categories as $category):?>
					<li>
						<a href="<?= WEBROOT; ?>categorie/<?= $category['slug']; ?>">
							<?= $category['name']; ?>
						</a>
					</li>
				<?php endforeach ?>
				</ul>
				</div>

			<div class="col-sm-12">
				<div class="row">
					<?php foreach($works as $k => $work) : ?>
						<div class="col-sm-4">
								<!--<a class="image" href="<?= WEBROOT; ?>realisation/<?= $work['slug']; ?>">
									
									<img src="<?= WEBROOT; ?>img/works/<?= resizedName($work['image_name'],210,210); ?>" alt="">
									<p><?= $work['name']; ?></p>
									
						</a>-->	

						
							<div class="view view-first">	
								
									
									<img src="<?= WEBROOT; ?>img/works/<?= resizedName($work['image_name'],360,185); ?>" alt="">
									<div class="mask">
										<h2><?= $work['name']; ?></h2>

									        <p>&nbsp;</p>

										<a class="info" href="<?= WEBROOT; ?>realisation/<?= $work['slug']; ?>">Voir plus</a>
									</div>
									
								
							</div>		
						</div>

					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'partials/contact.php'; ?>
<?php //include 'lib/debug.php'; ?>
<?php include 'partials/footer.php'; ?>



