<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Iaso - Home';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('iasomenu.css') ?>
</head>
<body class="home">
	<div id="MainContainer">
		<div id="MainContainerContent">
				<div class="menuBlock">
					<h1>Iaso</h1>
				</div>
				<div class="menuBlock">
					<p>Game is based on multiple different question categories. Improve or test your medical knowledge. Good luck!</p>
				</div>
				<div class="menuBlock">

					<?= $this->Html->image('iaso_logo.jpg',array('alt'=>'iaso'));?>

				</div>
				<div id="nextbutton">
						<?= $this->Html->link('Start Game', '/game/', array('class' => 'button')) ?>
				</div>
			</div>
		</div>
	</div>
    <footer>
    </footer>
</body>
</html>
