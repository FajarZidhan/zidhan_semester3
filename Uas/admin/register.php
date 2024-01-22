
<?php include "proses.php"?><?php include "../admin/layout/header.php"?>
<body>

<?php include "../admin/layout/navbar.php"?>
<h2>register</h2>
    <i><?= $massage?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">daftar sekarang</button>
    </form>
<?php include "layout/footer.php"?>
    
</body>
</html>