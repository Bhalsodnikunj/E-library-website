<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];
    $bookId = $_POST['bookId'];
    $bookTitle = $_POST['bookTitle'];
    $borrowDate = $_POST['borrowDate'];
    $returnDate = $_POST['returnDate'];
    $status = $_POST['status'];
}
?>
<table>
        <tr>
            <th>User ID</th>
            <th>Book ID</th>
            <th>Book Title</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Status</th>
            <th>Favorite</th>
        </tr>
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        .fav-btn {
            background-color: gold;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
    <script>
        function markFavorite(btn) {
            btn.innerText = "★ Favorite";
            btn.style.backgroundColor = "orange";
        }
    </script>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <tr>
            <td><?php echo htmlspecialchars($userId); ?></td>
            <td><?php echo htmlspecialchars($bookId); ?></td>
            <td><?php echo htmlspecialchars($bookTitle); ?></td>
            <td><?php echo htmlspecialchars($borrowDate); ?></td>
            <td><?php echo htmlspecialchars($returnDate); ?></td>
            <td><?php echo htmlspecialchars($status); ?></td>
            <td><button class="fav-btn" onclick="markFavorite(this)">❤ Favorite</button></td>
        </tr>
        <?php endif; ?>