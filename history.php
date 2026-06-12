<?php
include 'php/server.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MARU - Booking History</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <style>
        /* CSS biar modal bisa discroll */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: flex-start;
            overflow-y: auto;
            padding: 20px 0;
            z-index: 9999;
        }

        .modal-content-wrap {
            width: 90%;
            max-width: 500px;
            position: relative;
        }
        
        body.modal-open {
            overflow: hidden;
        }
    </style>
</head>
<body>

    <header class="navbar">
        <div class="logo">MARU</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="menu.php">Menu</a>
            <a href="reservation.php">Reservation</a>
            <a href="history.php" class="active">History</a>
        </nav>
    </header>

    <section class="section-container form-outer-wrap">
        <div class="form-card">
            <h1 class="form-title">Your Reservation History</h1>

            <div id="no-booking-message" style="text-align: center; padding: 20px; display: none;">
                <p>You have no active reservations at the moment.</p>
                <a href="reservation.php" class="submit-book-table-btn" style="display: inline-block; text-decoration: none; margin-top: 15px">Book Now</a>
            </div>

            <div id="reservations-container">
                <?php
                $sql = "SELECT * FROM reservations ORDER BY reservation_id DESC";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $id_data = $row['reservation_id'] ?? $row['reservation_id'];
                ?>

                <div class="reservation-card-item">
                    <h3>Reservation #<?php echo $id_data; ?></h3>
                    <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
                    <p><strong>Date:</strong> <?php echo $row['date']; ?></p>
                    <p><strong>Time Slot:</strong> <?php echo $row['bookingTime']; ?></p>
                    <p><strong>Party Size:</strong> <?php echo $row['guest_count']; ?> Guests</p>
                    <p><strong>Tables Reserved:</strong> <?php echo $row['table_count']; ?> Table(s)</p>
                    <p><strong>Contact Info:</strong> <?php echo $row['email']; ?> | <?php echo $row['phone']; ?></p>
                    
                    <div style="display: flex; gap: 10px; margin-top: 15px;">
                        <button class="submit-book-table-btn" style="background-color: #28a745; flex: 1;" 
                                onclick="openEditModal(
                                    '<?php echo $id_data; ?>',
                                    '<?php echo $row['date']; ?>',
                                    '<?php echo $row['bookingTime']; ?>',
                                    '<?php echo $row['guest_count']; ?>',
                                    '<?php echo $row['table_count']; ?>',
                                    '<?php echo $row['name']; ?>',
                                    '<?php echo $row['email']; ?>',
                                    '<?php echo $row['phone']; ?>'
                                )">
                            Update Details
                        </button>

                        <a href="php/delete_data.php?id=<?php echo $id_data; ?>" class="submit-book-table-btn" style="background-color: #dc3545; flex: 1; text-decoration:none;" onclick="return confirm('Are you sure?')">
                            Cancel Reservation
                        </a>
                    </div>
                </div>

                <?php
                    }
                } else {
                ?>
                <script>document.getElementById('no-booking-message').style.display = 'block';</script>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- EDIT POPUP -->
    <div id="update-modal" class="modal-overlay">
        <div class="modal-content-wrap">
            <div class="form-card" style="margin-top: 0">
                <button type="button" id="close-modal" class="close-modal-btn">&times;</button>
                <h1 class="form-title" style="font-size: 1.8rem; margin-bottom: 20px">Edit Reservation</h1>

                <form id="edit-reservation-form">
                    <input type="hidden" id="edit-id" />

                    <div class="form-group">
                        <label for="date">date *</label>
                        <input type="date" name="date" id="date" required />
                    </div>

                    <div class="form-group">
                        <label for="bookingTime">Select Time Slot: *</label>
                        <select id="bookingTime" name="bookingTime" required>
                            <option value="">-- Choose a slot --</option>
                            <option value="11:30-13:30">11:30 AM - 13:30 PM</option>
                            <option value="13:30-15:30">13:30 PM - 15:30 PM</option>
                            <option value="15:30-17:30">15:30 PM - 17:30 PM</option>
                            <option value="17:30-19:30">17:30 PM - 19:30 PM</option>
                            <option value="19:30-21:30">19:30 PM - 21:30 PM</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="guest-count">Number of Guests *</label>
                        <input type="number" id="guest_count" name="guest_count" min="1" required />
                    </div>

                    <div class="form-group">
                        <label for="table-count">Tables to Reserve *</label>
                        <p class="form-help-text">Each table seats a maximum of 4 people.</p>
                        <input type="number" id="table_count" name="table_count" min="1" required />
                        <div id="status-display" class="status-box info" style="margin-top: 10px; padding: 10px; border-radius: 4px">Selected tables can hold up to <strong id="total-capacity">4</strong> guests.</div>
                    </div>

                    <div class="form-group">
                        <label for="name">name *</label>
                        <input type="text" name="name" id="name" required />
                    </div>

                    <div class="form-group">
                        <label for="email">email *</label>
                        <input type="email" name="email" id="email" required />
                    </div>

                    <div class="form-group">
                        <label for="phone">phone number *</label>
                        <input type="tel" name="phone" id="phone" required />
                    </div>

                    <div class="form-submit-block">
                        <button type="submit" class="submit-book-table-btn">Update Reservation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-brand">
                <h2 class="footer-logo">MARU</h2>
                <p>For further information</p>

                <p style="display: flex; align-items: center; gap: 8px; margin: 8px 0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink: 0">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    <a href="https://api.whatsapp.com/send/?phone=6281373336880&text&type=phone_number&app_absent=0&utm_source=ig" class="footer-link">081373358830</a>
                </p>

                <p style="display: flex; align-items: center; gap: 8px; margin: 8px 0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink: 0">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.047 3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275 1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 0 0 1 0-5.334"/>
                    </svg>
                    <a href="https://www.instagram.com/marubakehouse?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="footer-link">@marubakehouse</a>
                </p>
            </div>

            <div class="footer-visit">
                <h3>Visit Us!</h3>
                <p>Komp. Superblock, Sydney Hotel No.6, Sungai Panas, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
                <div class="map-placeholder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0459251659026!2d104.03266769999999!3d1.1274255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989cfa470bcc9%3A0x34818064c5b3942a!2sMaru%20Bake%20House!5e0!3m2!1sen!2sid!4v1780188615537!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="footer-copyright">©2026 Maru Bake House</div>
    </footer>

    <script>
        // FUNGSI BUAT BUKA MODAL & ISI DATA
        function openEditModal(reservation_id, date, bookingTime, guest_count, table_count, name, email, phone) {
            document.getElementById("edit-id").value = reservation_id;
            document.getElementById("date").value = date;
            document.getElementById("bookingTime").value = bookingTime;
            document.getElementById("guest_count").value = guest_count;
            document.getElementById("table_count").value = table_count;
            document.getElementById("name").value = name;
            document.getElementById("email").value = email;
            document.getElementById("phone").value = phone;
            document.getElementById("update-modal").style.display = "flex";
            document.body.classList.add("modal-open");
        }

        // FUNGSI BUAT SIMPAN PERUBAHAN
        const form = document.getElementById("edit-reservation-form");

        if (form) {
            form.onsubmit = function (e) {
                e.preventDefault();

                const id = document.getElementById("edit-id").value;

                if (!id) {
                    alert("ID Not Found!");
                    return;
                }

                const date = document.getElementById("date").value;
                const bookingTime = document.getElementById("bookingTime").value;
                const guest_count = document.getElementById("guest_count").value;
                const table_count = document.getElementById("table_count").value;
                const name = document.getElementById("name").value;
                const email = document.getElementById("email").value;
                const phone = document.getElementById("phone").value;

                const data = {
                    reservation_id: id,
                    date: date,
                    bookingTime: bookingTime,
                    guest_count: guest_count,
                    table_count: table_count,
                    name: name,
                    email: email,
                    phone: phone,
                };

                console.log("Mau update ID:", id);
                console.log("Datanya:", data);

                // Kirim ke file PHP kamu
                fetch('php/update_data.php', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(data),
                })
                .then((res) => res.json())
                .then((result) => {
                    if (result.status === "success") {
                        alert("✅ Reservation Data has been Changed!");
                        document.getElementById("update-modal").style.display = "none";
                        document.body.classList.remove("modal-open");
                        window.location.reload();
                    } else {
                        alert("❌ Failed: " + result.message);
                    }
                })
                .catch((err) => {
                    console.error("Error:", err);
                    alert("❌ Error koneksi!");
                });
            };
        }

        // TOMBOL CLOSE
        document.getElementById("close-modal").addEventListener("click", function () {
            document.getElementById("update-modal").style.display = "none";
            document.body.classList.remove("modal-open");
        });

        // Klik luar modal
        document.getElementById('update-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                document.getElementById("update-modal").style.display = "none";
                document.body.classList.remove("modal-open");
            }
        });

        // Hitung kapasitas meja
        const tableInput = document.getElementById('table_count');
        const capacityDisplay = document.getElementById('total-capacity');
        if(tableInput && capacityDisplay) {
            tableInput.addEventListener('input', function() {
                const tables = parseInt(this.value) || 0;
                capacityDisplay.textContent = tables * 4;
            });

            const initialTables = parseInt(tableInput.value) || 0;
            capacityDisplay.textContent = initialTables * 4;
        }
    </script>

</body>
</html>