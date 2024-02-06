<?php 
        include 'Animal.php';
       
        
?>

<html>
<body>
    <h1>Hello World PHP!</h1>
    <h2>Summary</h2>
    <ul>
        <li>Get a php file running in a browser</li>
        <li>Practice creating an Animal Class and Dog sub-class</li>
    </ul>
    <h2>Create a new Dog, subclass of Animal</h2>
    <p>
        <?php
            $dog = new Dog("Cheddar", "dog", 1);
        ?>
    </p>
    <h2>How does var dump look</h2>
    <p>
        var dump of $dog:
        <?php
            var_dump($dog);
        ?>
    </p>
    <h2>Use the train() method on Dog</h2>
    <p>
        <?php 
            $dog->train();
            $dog->train();
        ?>
    </p>
    
</body>
</html>