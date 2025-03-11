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

<?php include('./includes/header.php'); ?>
<main>
    <h2>Зворотний зв'язок</h2>
    <form action="contact.php" method="POST">
        <label for="name">Ваше ім'я:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Ваш email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Ваше повідомлення:</label><br>
        <textarea id="message" name="message" required></textarea><br>

        <button type="submit">Надіслати</button>
    </form>
</main>
<?php include('./includes/footer.php'); ?>
