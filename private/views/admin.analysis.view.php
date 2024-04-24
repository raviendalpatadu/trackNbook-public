<?php $this->view("./includes/header") ?>
<?php $this->view("./includes/load-js") ?>

<body>

    <?php $this->view("./includes/sidebar") ?>
    <div class="column-left">
        <?php $this->view("./includes/dashboard-navbar") ?>

        <main style='background-color:#EFF8FF;'>

            <div class="container">
                <div class="date-selection">
                    <input type="text" id="dateRange" name="dateRange" placeholder="Select date range">
                    <button class="fancy-button" onclick="generatePDF()">Generate report</button>
                </div>

            </div>

        </main>
    </div>

</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://unpkg.com/jspdf-invoice-template@latest/dist/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dateRange').daterangepicker({
            opens: 'left',
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });

    function generatePDF() {
        const dateRange = $('#dateRange').val().split(' - ');

        $.ajax({
            url: '<?= ROOT ?>ajax/getReservationReport',
            method: 'POST',
            data: { startDate: dateRange[0], endDate: dateRange[1] },
            success: function (response) {
                const res = JSON.parse(response);
                const reservations = res.reservations;

                let total = 0;
                const data_length = reservations.length;

                for (let i = 0; i < data_length; i++) {
                    total += parseFloat(reservations[i]['total_amount']);
                }

                const props = {
                    outputType: jsPDFInvoiceTemplate.OutputType.save,
                    returnJsPDFDocObject: true,
                    fileName: "Reservation Report",
                    orientationLandscape: false,
                    compress: true,
                    logo: {
                        src: "<?= ASSETS ?>/images/track-n-book-logo-1.png",
                        type: 'PNG',
                        width: 15,  // Adjust the width of the logo
                        height: 25,  // Adjust the height of the logo
                        margin: {
                            top: 0,
                            left: 0
                        }
                    },
                    business: {
                        name: "TrackNBook",
                        address: "Sri Lanka",
                        phone: "0771234567",
                        email: "Admin@mail.com",
                        website: "www.SriLanka-Railways.lk",
                    },
                    contact: {
                        label: "  ",
                        name: "Reservation Report",
                        otherInfo: `From: ${dateRange[0]} To: ${dateRange[1]}`,
                    },
                    invoice: {
                        label: "",
                        headerBorder: false,
                        tableBodyBorder: true, // Enable table border
                        header: [
                            {
                                title: "Reservation Date",
                                style: {
                                    width: 50,
                                    height: 20,
                                    backgroundColor: '#f2f2f2',
                                    textAlign: 'center',
                                    fontWeight: 'bold'
                                }
                            },
                            {
                                title: "Total Reservations",
                                style: {
                                    width: 50,
                                    height: 20,
                                    backgroundColor: '#f2f2f2',
                                    textAlign: 'center',
                                    fontWeight: 'bold'
                                }
                            },
                            {
                                title: "Total Amount",
                                style: {
                                    width: 50,
                                    height: 20,
                                    backgroundColor: '#f2f2f2',
                                    textAlign: 'center',
                                    fontWeight: 'bold'
                                }
                            },
                        ],
                        table: Array.from(Array(data_length), (item, index) => ([
                            reservations[index]['reservation_date'],
                            reservations[index]['total_reservations'],
                            reservations[index]['total_amount'],
                        ])),
                        additionalRows: [{
                            col1: 'Total Amount :',
                            col2: total.toString(),
                            style: {
                                fontSize: 14
                            }
                        }],
                    },
                    footer: {
                        text: "The report is created on a computer and is valid without the signature and stamp.",
                    },
                    pageEnable: true,
                    pageLabel: "Page ",
                };

                const pdfObject = jsPDFInvoiceTemplate.default(props);
                console.log("Object generated: ", pdfObject);
            },
            error: function (xhr, status, error) {
                console.error("AJAX error:", xhr.responseText);
            }
        });
    }
</script>