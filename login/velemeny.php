<!-- A vélemények táblázata -->
<table>
    <thead>
        <tr>
            <th>Név</th>
            <th>Comment</th>
            <th>Funkciók</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Betölti és megjeleníti a véleményeket az adatbázisból
        foreach ($comments as $comment) {
            echo "<tr>";
            echo "<td>{$comment['nev_id']}</td>";
            echo "<td>{$comment['komment']}</td>";
            echo "<td>
                    <a href='edit_comment.php?id={$comment['nev_id']}'>Edit</a> |
                    <a href='delete_comment.php?id={$comment['nev_id']}'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>