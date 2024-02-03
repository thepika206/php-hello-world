<html>
<body>
    <h1>Hello World PHP!</h1>
    <h2>My pet</h2>
    <?php 
        include 'Animal.php';
        $dog = new Animal;
        $dog->set_name('Cheddar');
        $dog->set_type('Dog');
        $dog->introduce();
    ?>
</body>
</html>