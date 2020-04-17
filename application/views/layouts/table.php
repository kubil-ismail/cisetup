<?php table_url(); ?>

<table class="table table-bordered" id="<?= $table_title ?>" width="100%" cellspacing="0">
    <thead>
        <tr>
            <?php foreach ($table_key as $res) : ?>
                <th><?= $res ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($table_data as $res => $value) : ?>
            <tr>
                <td><?= ++$res; ?></td>
                <td><?= $value['category_id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['cashier_id'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#<?= $table_title ?>').DataTable();
    });
</script>