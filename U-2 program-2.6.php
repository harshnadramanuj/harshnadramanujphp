<!DOCTYPE html>
<html>
<body>
    <form method="POST">
        <input type="number" step="any" name="n1" required value="<?= $_POST['n1'] ?? '' ?>">
        <select name="op">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" step="any" name="n2" required value="<?= $_POST['n2'] ?? '' ?>">
        <button type="submit">Calculate</button>
    </form>

    <?php
    function calc($a, $b, $op) {
        if ($op == 'add') return $a + $b;
        if ($op == 'sub') return $a - $b;
        if ($op == 'mul') return $a * $b;
        if ($op == 'div') return $b == 0 ? "Cannot divide by zero" : $a / $b;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $res = calc(floatval($_POST['n1']), floatval($_POST['n2']), $_POST['op']);
        echo "<h3>Result: $res</h3>";
    }
    ?>
</body>
</html>