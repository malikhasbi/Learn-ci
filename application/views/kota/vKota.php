<?php
foreach ($b->result_array() as $row) :
    $kota = $row['kota'];
    $total = $row['total'];
?>
    <tr>
        <td><?php echo htmlentities($kota, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlentities($total, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php endforeach; ?>