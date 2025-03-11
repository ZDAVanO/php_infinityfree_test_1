<?php include('./includes/header.php'); ?>
<main>


    <h1>Home Page</h1>

    <p>Page loaded at: <span id="load-time"></span></p>
    <script>
        document.getElementById('load-time').innerText = new Date().toLocaleString();
    </script>




    <div class="card">

        <!-- GET Form -->
        <h3>GET Request Form</h3>
        <form method="get" action="index.php">
            <label for="getData">Enter Data:</label>
            <input type="text" name="getData" id="getData" required>
            <input type="submit" value="Submit GET">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['getData'])) {
                echo "<p>You submitted (GET): " . htmlspecialchars($_GET['getData']) . "</p>";
            }
        ?>
        
        <hr>
        
        <!-- POST Form -->
        <h3>POST Request Form</h3>
        <form method="post" action="index.php">
            <label for="postData">Enter Data:</label>
            <input type="text" name="postData" id="postData" required>
            <input type="submit" value="Submit POST">
        </form>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['postData'])) {
                echo "<p>You submitted (POST): " . htmlspecialchars($_POST['postData']) . "</p>";
            }
        ?>

        <hr>

        <!-- POST AJAX Form -->
        <h3>POST AJAX Form</h3>
        <form id="postAjaxForm">
            <label for="ajaxPostData">Enter Data:</label>
            <input type="text" name="ajaxPostData" id="ajaxPostData" required>
            <input type="button" value="Submit via AJAX" id="postAjaxSubmit">
        </form>
        <div id="postAjaxResponse"></div>

        <hr>

        <!-- GET AJAX Form -->
        <h3>GET AJAX Form</h3>
        <form id="getAjaxForm">
            <label for="ajaxGetData">Enter Data:</label>
            <input type="text" name="ajaxGetData" id="ajaxGetData" required>
            <input type="button" value="Submit via AJAX" id="getAjaxSubmit">
        </form>
        <div id="getAjaxResponse"></div>

        <hr>

        <p>Page Load Time: <span id="loadTime"></span></p>

    </div>

    <script>

        // POST AJAX
        document.getElementById('postAjaxSubmit').addEventListener('click', function() {
            var postData = document.getElementById('ajaxPostData').value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax-handler.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('postAjaxResponse').innerHTML = xhr.responseText;
                }
            };
            xhr.send('ajaxPostData=' + encodeURIComponent(postData));
        });

        // GET AJAX
        document.getElementById('getAjaxSubmit').addEventListener('click', function() {
            var getData = document.getElementById('ajaxGetData').value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'ajax-handler.php?ajaxGetData=' + encodeURIComponent(getData), true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('getAjaxResponse').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
</main>
<?php include('./includes/footer.php'); ?>
