<?php
require __DIR__ . '/../private/functions.php';
require __DIR__ . '/../private/model.php';
include 'header.php';

?>
<!doctype html>
<html lang="en">

        <a href="all-sneakers.php" class="button">See all our sneakers</a>
		
		<?php foreach ( $statement as $sneaker ): ?>
            <article>
                <h2><?php echo $sneaker['brand'] ?></h2>
                <h3><?php echo $sneaker['model'] ?></h3>
                <figure>
                    <span class="color"><?php echo $sneaker['color']?></span>
                    <img src="images/<?php echo $sneaker['image'] ?>" alt="" class="fluid-img"/>
                </figure>
                <span class="price">$<?php echo $sneaker['price']?></span>
                <p>
					<?php echo $sneaker['description'] ?>
                </p>
            </article>
		<?php endforeach; ?>
        <a href="all-sneakers.php" class="button">See all our sneakers</a>
				<?php include 'footer.php'; ?>
