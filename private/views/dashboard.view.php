<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" <?= ASSETS ?>css/styles.css">
</head>

<body>
    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h1>Dashboard</h1>
                            <p>Welcome to the dashboard</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-6">
                        <p>Welcome to the dashboard</p>
                    </div>
                    <div class="col-6">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias voluptas natus, laboriosam veritatis itaque repudiandae, voluptate minima aliquid quod ea cumque, necessitatibus voluptatum quidem assumenda tempore blanditiis et quia earum.</p>
                    </div>

                </div>
            </div>
        </main>
    </div>


</body>

</html>