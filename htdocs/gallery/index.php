<?php include "../includes/header.php";
//include "../includes/db.php";

$items = array(
	'freerunning',
	'parallel-bars'
);
?>
	<?php if (isSet($_GET['p'])) {
		$gallery = htmlspecialchars($_GET['p']);
		$title = ucwords(str_replace('-', ' ', $gallery)); ?>
		<article class="wrap">
			<header class="center">
				<h2><?php echo $title;?></h2>
			</header>
			<div class="masonry-container">
			<?php if ($handle = opendir("./".$gallery)) {
				while (false !== ($item = readdir($handle))) {
					if ( $item != "." && $item != ".." && $item != 'front.jpg') { ?>

<a href='<?php echo $gallery.'/'.$item;?>' data-lightbox='<?php echo $gallery;?>'>
	<img class="masonry-item" src="<?php echo thumb($rootpath.'gallery/'.$gallery.'/'.$item, 300);?>">
</a>
					<?php }
				} ?>
			<?php } ?>
			</div>
	<?php } else { ?>
		<article class="wrap">
			<header class="center">
				<h2>Gallery</h2>
			</header>
		<div id="gallery-list">
		<?php foreach ($items as $folder) {
		$title = ucwords(str_replace('-', ' ', $folder));
		?>
			<a href="<?php echo $rootpath.'gallery/?p='.$folder;?>">
				<div class="img-container">
					<img src="<?php echo thumb($rootpath.'gallery/'.$folder.'/front.jpg', 1140);?>">
				</div>
				<h3><?php echo $title;?></h3>
			</a>
		<?php } ?>
		</div>
	<?php } ?>
</article>
<?php include "../includes/footer.php"; ?>
