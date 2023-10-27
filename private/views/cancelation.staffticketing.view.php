 <?php $this->view("./includes/header"); ?>

<body>
    
<?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
     <?php $this->view("./includes/dashboard-navbar") ?>
            <main>
                <div class="container d-flex justify-content-center">
                    <div class="cancel-container justify-align-center">     
                        <div class="row mb-20 "> 
                            <div class="col-12 d-flex align-items-start">
                                <div class="text-inputs">
                                    <div class="input-text-label">Passenger ID</div>
                                        <div class="width-fill">
                                            <select class="dropdown" placeholder="Please choose">
                                                <option value=""selected>All</option>
                                                <option value="">WD1001</option>
                                                <option value="">WD1991 </option>
                                                <option value="">WD1009 </option>
                                                <option value="">WD1291 </option>
                                                <option value="">WD1091 </option>
                                                <option value="">WD1021 </option>
                                            </select>
                                        </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-20 "> 
                            <div class="col-12 d-flex align-items-start">
                                <div class="text-inputs">
                                    <div class="input-text-label">Ticket Number</div>
                                        <div class="width-fill">
                                            <select class="dropdown" placeholder="Please choose">
                                                <option value=""selected>All</option>
                                                <option value="">WD1001</option>
                                                <option value="">WD1991 </option>
                                                <option value="">WD1009 </option>
                                                <option value="">WD1291 </option>
                                                <option value="">WD1091 </option>
                                                <option value="">WD1021 </option>
                                            </select>
                                        </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-20 "> 
                            <div class="col-12 d-flex align-items-start">
                                <div class="text-inputs">
                                    <div class="input-text-label">Train Number</div>
                                        <div class="width-fill">
                                            <select class="dropdown" placeholder="Please choose">
                                                <option value=""selected>All</option>
                                                <option value="">WD1001</option>
                                                <option value="">WD1991 </option>
                                                <option value="">WD1009 </option>
                                                <option value="">WD1291 </option>
                                                <option value="">WD1091 </option>
                                                <option value="">WD1021 </option>
                                            </select>
                                        </div>
                                    <div class="assistive-text display-none">Assistive Text</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex align-items-center flex-column">
                            <button class="button"><a href="<?=ROOT?>passenger/details">
                                <div class="button-base">
                                    <div class="text">Pay</div>
                                            <svg class="arrow-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.16675 9.99935H15.8334M15.8334 9.99935L10.0001 4.16602M15.8334 9.99935L10.0001 15.8327" stroke="#344054" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                </div></a>
                            </button>
                        </div>
                    </div>                     
                </div>
            </main>
        <?php $this->view('includes/footer'); ?>
    </div>
</body>    
</html>
