<?php $this->view("./includes/header"); ?>

<?php

echo "<pre>";
// print_r($data);
echo "</pre>";

?>

<body class="flex-column">
  
    <img src="<?=ASSETS?>images/shika.jpg" alt="">

</body>

</html>

<script>
    let table = new DataTable('#myTable', {
        ajax: {
            url: '<?= ROOT ?>/ajax/getStation',
            dataSrc: ''
        },
        columns: [{
                title: 'Station Name',
                data: 'station_name'
            },
            {
                title: 'Station Id',
                data: 'station_id'
            }
        ]
    });
</script>