<?php include('./includes/header.php'); ?>

<main>

    <h1>Contact Me</h1>

    <p>Page loaded at: <span id="load-time"></span></p>
    <script>
        document.getElementById('load-time').innerText = new Date().toLocaleString();
    </script>

    <!-- <form action="contact.php" method="POST">
        <label for="name">Ваше ім'я:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Ваш email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Ваше повідомлення:</label><br>
        <textarea id="message" name="message" required></textarea><br>

        <button type="submit">Надіслати</button>
    </form> -->


    <div class="container mt-5 col-10 col-md-8 col-lg-6 col-xl-5">

        <form method="POST" action="contact.php">
            <input id="name" name="name" type="text" class="feedback-input" placeholder="Name" required/>
            <input id="email" name="email" type="text" class="feedback-input" placeholder="Email" />
            <textarea id="message" name="message" class="feedback-input" placeholder="Comment"></textarea>
            <input type="submit" value="SUBMIT" />
        </form>

    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Обробка форми
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Просте виведення
        echo "<h3>Ваше повідомлення надіслано!</h3>";
        echo "<p>Ім'я: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Повідомлення: $message</p>";
    }
    ?>

</main>

<?php include('./includes/footer.php'); ?>
