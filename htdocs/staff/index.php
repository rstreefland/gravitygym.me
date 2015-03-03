<?php include('../includes/header.php');

session_start();

$users = array(
    //staff => whiteknights
    'staff' => '$2y$10$cZ97fZlMDvL7IaT9wlpi2ejnDJKGD3zaEYTLl2cIEsdNrxuA4Man2'
);

if (isSet($_GET['logout'])) {
    session_destroy();
    header('location: index.php');
}

if (isSet($_SESSION['loggedIn'])) {

    $donations = array(
        'MauraPeterson@example.com' => generateCode(),
        'HughieTupper@example.com' => generateCode(),
        'RebeccaPond@example.com' => generateCode(),
        'CheyanneRamsey@example.com' => generateCode(),
        'HalleBarber@example.com' => generateCode(),
        'PhillipBritton@example.com' => generateCode(),
        'TyronStenet@example.com' => generateCode(),
        'CathleenClemens@example.com' => generateCode(),
        'MagdalenAlbertson@example.com' => generateCode()
    );

    ?>
    <div class="wrap">
        <div class="row">
            <div class="eight columns">
                <h2>Donations</h2>
            </div>
            <div class="four columns align-right">
                <a class="button" href="./?logout=1">Log out</a>
            </div>
        </div>
        <table style="width: 100%;" class="align-center">
            <tr>
                <th class="align-left">Email address</th>
                <th>Donation code</th>
                <th>Reward level</th>
            </tr>
            <?php foreach ($donations as $email => $code) {
            ?>
            <tr>
                <td class="align-left"><?php echo $email;?></td>
                <td><?php echo $code;?></td>
                <td>Donor package <?php echo rand(1, 4);?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <?php
    //session_destroy();


} elseif (isSet($_POST['username']) && isSet($_POST['password'])) {

    //User exists
    if (array_key_exists($_POST['username'], $users)) {

        //Password matches
        if (password_verify($_POST['password'], $users[$_POST['username']])) {
            $_SESSION['loggedIn'] = true;
            header('location: index.php');
        }

        //Password doesn't match
        else {
            $_SESSION['error'] = 'Incorrect password.';
            header('location: index.php');
        }

    //User doesn't exist
    } else {
        $_SESSION['error'] = 'User not found.';
        header('location: index.php');
    }

} else {
    if (isSet($_SESSION['error'])) {
        $error = $_SESSION['error'];
        session_destroy();
    } else {
        $error = false;
        session_destroy();
    }
?>
<div class="wrap pad-top">
    <form action="" method="post">
        <div class="row">
            <div class="six columns offset-by-three">
                <?php echo $error; ?>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
        </div>
        <div class="row">
            <div class="six columns offset-by-three">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        </div>
        <div class="row">
			<div class="six columns offset-by-three align-right">
				<button type="submit" class="small">Log in</button>
			</div>
		</div>
    </div>
</div>
<?php } include('../includes/footer.php');?>
