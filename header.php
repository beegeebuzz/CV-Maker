<?php require 'function.php';?>
<header>
    <div>
        <nav>
            <ul>
                <?php foreach ($items as $item => $url){ ?>
                <li>
                    <a href="<?php echo $url ?>"><?php echo $item; };?></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
