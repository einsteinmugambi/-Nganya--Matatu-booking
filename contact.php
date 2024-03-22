<?php
require_once 'header.php';
?>

<h2>Contact Us</h2>
<p>Have a question or need help? Contact us:</p>

<form action="send_contact_form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" cols="30" required></textarea>
    <br>
    <button type="submit">Send</button>
</form>

<?php
require_once 'footer.php';
?>