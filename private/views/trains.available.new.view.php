<?php $this->view("./includes/header"); ?>
<?php $this->view("./includes/load-js"); ?>

<?php


echo "<pre>";
// print_r($data);
echo "</pre>";



?>

<body class="flex-column">

    <table id="myTable">
        
            
    </table>
  
    <!-- <img src="images/shika.jpg" alt=""> -->

</body>

</html>

<script>
    let table = new DataTable('#myTable', {
        ajax: {
            url: '<?php echo ROOT ?>/ajax/getStation',
            dataSrc: ''
        },
        columns: [{
                title: 'Station Name',
                data: 'station_name'
            }
        ]
    });
</script>