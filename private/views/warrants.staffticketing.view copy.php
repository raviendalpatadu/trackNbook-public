 <div class="row p-10 g-10">
     <div class="col-4 mx-50 py-20">
         <div class="dashboard-card card-hover">
             <div class="card-value">
                 23
             </div>
             <div class="card-text">
                 <a href="<?= ROOT ?>staffTicketing/refundList">
                     Refund Requests
                 </a>
             </div>
         </div>
     </div>
     <div class="col-4 mx-50 py-20">
         <div class="dashboard-card card-hover">
             <div class="card-value">
                 23
             </div>
             <div class="card-text">
                 <a href="<?= ROOT ?>staffTicketing/warrant">
                     Warrants Requests
                 </a>
             </div>
         </div>
     </div>
     <div class="col-4 mx-50 py-20">
         <div class="dashboard-card card-hover">
             <div class="card-value">
                 23
             </div>
             <div class="card-text">
                 Rejected Warrants
             </div>
         </div>
     </div>

     <div class="graphbox row g-20 p-50">
         <!-- graph left -->
         <div class="d-flex flex-column flex-grow col-6 bg-white p-20">
             <!-- graph head -->
             <div>
                 <h4 class="card-title">Site Analysis</h4>
                 <h5 class="card-subtitle">Overview of Latest Month</h5>
             </div>
             <canvas id="bookingChart"></canvas>

         </div>

         <!-- graph right -->
         <div class="d-flex flex-column flex-grow col-6 bg-white p-20">
             <!-- graph head -->
             <div>
                 <h4 class="card-title">Site Analysis</h4>
                 <h5 class="card-subtitle">Overview of Latest Month</h5>
             </div>
             <canvas id="bookingpie"></canvas>

         </div>

     </div>
 </div>




 <main class="bg-light-blue">
     <div class="d-flex flex-row g-20 p-20">
         <div class="d-flex flex-column g-20 " style="
    /* flex: 1; */
">
             <div style="flex: 1;" class="d-flex flex-column g-10 justify-content-between">
                 <div class="d-flex g-20 " style="
    flex: 1;
">
                     <div class="dashboard-card card-hover">
                         <h3>23</h3>
                         <p>Refund Requests</p>
                     </div>
                     <div class="dashboard-card card-hover">
                         <h3>23</h3>
                         <p>Refund Requests</p>
                     </div>
                 </div>

                 <div class="d-flex g-20 " style="
    flex: 1;
">
                     <div class="dashboard-card card-hover">
                         <h3>23</h3>
                         <p>Refund Requests</p>
                     </div>
                     <div class="dashboard-card card-hover">
                         <h3>23</h3>
                         <p>Refund Requests</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="graphbox width-fill d-flex ">
             <!-- graph left -->
             <div class="d-flex flex-column flex-grow bg-white p-20">
                 <!-- graph head -->
                 <div>
                     <h4 class="card-title">Site Analysis</h4>
                     <h5 class="card-subtitle">Overview of Latest Month</h5>
                 </div>
                 <canvas id="bookingChart" height="300"></canvas>

             </div>
         </div>


     </div>












 </main>
 </div>