<?php include "../includes/header.php";
//include "../includes/db.php";

$items = array(
	'freerunning',
	'trampolining',
	'parallel-bars'
);

if (isSet($_GET['p'])) {
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
						<img class="masonry-item" src="<?php echo thumb($rootpath.'gallery/'.$gallery.'/'.$item, 300);?>" alt="Gallery item">
					</a>
				<?php }
			} ?>
		<?php } ?>
		</div>
	</article>
<?php } else { ?>
	<div class="block pad bg bg3 align-center">
		<div class="wrap">
			<div class="row">
				<h1>Gallery</h1>
			</div>
		</div>
	</div>
	<?php foreach ($items as $gallery) {
		//I know inline CSS is bad.. Sorry!
		?>
		<div class="block large pad bg" style="
			background:
				linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) ),
				url(<?php echo $rootpath.'gallery/'.$gallery.'/front.jpg';?>);
			background-size: cover;">
			<div class="wrap align-center">
				<div class="row">
					<div class="twelve columns">
						<h2><?php echo ucfirst(str_replace('-', ' ', $gallery));?></h2>
					</div>
				</div>
				<div class="row">
					<a class="button" href="<?php echo $rootpath?>gallery/?p=<?php echo $gallery;?>">View</a>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } include "../includes/footer.php"; ?>
