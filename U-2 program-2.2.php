<form method="POST">
    <input type="text" name="n" placeholder=" " required>
    <button>Sort</button>
</form>

<?php if ($_POST) {
    $a = explode(',', $_POST['n']);
    sort($a);
    echo "Result: " . implode(', ', $a);
} ?>