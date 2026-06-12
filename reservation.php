<?php
include 'php/server.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MARU - Reservation</title>
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
  </head>
  <body>
       <!-- NAVIGATION BAR -->
    <header class="navbar">
        <div class="logo">MARU</div>
        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About Us</a>
            <a href="menu.php">Menu</a>
            <a href="reservation.php">Reservation</a>
            <a href="history.php">History</a>
        </nav>
    </header>

    <!-- RESERVATION CONTENT SECTION -->
    <section class="section-container form-outer-wrap">
      <div class="form-card">
        <h1 class="form-title">Reserve a Table</h1>

        <form action="php/insert_data.php" method="POST" id="reservation-form">
          <!-- Date Input -->
          <div class="form-group">
            <label for="date">date *</label>
            <input type="date" name="date" id="date" required />
          </div>

          <!-- Time Dropdown -->
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

          <!-- Number of Guests -->
          <div class="form-group">
            <label for="guest-count">Number of Guests *</label>
            <input type="number" id="guest-count" name="guest_count" min="1" required placeholder="How many people?" />
          </div>

          <!-- Tables to Reserve -->
          <div class="form-group">
            <label for="table-count">Tables to Reserve *</label>
            <p class="form-help-text">Each table seats a maximum of 4 people.</p>
            <input type="number" id="table-count" name="table_count" min="1" value="1" required />

            <!-- Status Display Box for Live Calculations -->
            <div id="status-display" class="status-box info">Selected tables can hold up to <strong id="total-capacity">4</strong> guests.</div>
          </div>

          <!-- Name Input -->
          <div class="form-group">
            <label for="name">name *</label>
            <input type="text" name="name" id="name" required placeholder="Your full name" />
          </div>

          <!-- Email Input -->
          <div class="form-group">
            <label for="email">email *</label>
            <input type="email" name="email" id="email" required placeholder="yourname@email.com" />
          </div>

          <!-- Phone Number Input -->
          <div class="form-group">
            <label for="phone">phone number *</label>
            <input type="tel" name="phone" id="phone" required placeholder="0812XXXXXXXX" />
          </div>

          <!-- Submit Button -->
          <div class="form-submit-block">
            <button type="submit" class="submit-book-table-btn">Book Table</button>
          </div>
        </form>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-brand">
          <h2 class="footer-logo">MARU</h2>
          <p>For further information</p>

          <!-- Phone Contact Row -->
          <p style="display: flex; align-items: center; gap: 8px; margin: 8px 0">
            <svg xmlns="http://w3.org" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink: 0">
              <path
                fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
              />
            </svg>
            <a href="https://api.whatsapp.com/send/?phone=6281373336880&text&type=phone_number&app_absent=0&utm_source=ig" class="footer-link">081373358830</a>
          </p>

          <!-- Instagram Contact Row -->
          <p style="display: flex; align-items: center; gap: 8px; margin: 8px 0">
            <svg xmlns="http://w3.org" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="flex-shrink: 0">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
              />
            </svg>
            <a href="https://www.instagram.com/marubakehouse?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="footer-link">@marubakehouse</a>
          </p>
        </div>

        <div class="footer-visit">
          <h3>Visit Us!</h3>
          <p>Komp. Superblock, Sydney Hotel No.6, Sungai Panas, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
          <div class="map-placeholder">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0459251659026!2d104.03266769999999!3d1.1274255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989cfa470bcc9%3A0x34818064c5b3942a!2sMaru%20Bake%20House!5e0!3m2!1sen!2sid!4v1780188615537!5m2!1sen!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
      <div class="footer-copyright">©2026 Maru Bake House</div>
    </footer>

    <!-- External Javascript File Connection -->
    <!-- <script src="js/reservation.js"></script> -->
    <!-- <script src="js/notification.js"></script> -->

    <script>

//       document.addEventListener("DOMContentLoaded", () => {
//   const guestCountInput = document.getElementById("guest-count");
//   const tableCountInput = document.getElementById("table-count");
//   const totalCapacityDisplay = document.getElementById("total-capacity");
//   const statusDisplay = document.getElementById("status-display");
//   const form = document.getElementById("reservation-form");

//   function updateStatus() {
//     const guestCount = parseInt(guestCountInput.value) || 0;
//     const tableCount = parseInt(tableCountInput.value) || 0;
//     const totalCapacity = tableCount * 4;

//     if (!totalCapacityDisplay || !statusDisplay) return;

//     totalCapacityDisplay.innerHTML = totalCapacity;

//     if (guestCount > totalCapacity) {
//       statusDisplay.innerHTML = `Warning: You have selected ${tableCount} tables which can only accommodate <strong id="total-capacity">${totalCapacity}</strong> guests. Please increase the number of tables or reduce the number of guests.`;
//       statusDisplay.className = "status-box warning";
//     } else {
//       statusDisplay.innerHTML = `Selected tables can hold up to <strong id="total-capacity">${totalCapacity}</strong> guests.`;
//       statusDisplay.className = "status-box info";
//     }
//   }

//   if (guestCountInput && tableCountInput) {
//     guestCountInput.addEventListener("input", updateStatus);
//     tableCountInput.addEventListener("input", updateStatus);
//   }

//   updateStatus();

//   if (form) {
//     form.addEventListener("submit", (event) => {
//       const guestCount = parseInt(guestCountInput.value) || 0;
//       const tableCount = parseInt(tableCountInput.value) || 0;
//       const totalCapacity = tableCount * 4;

//       if (guestCount > totalCapacity) {
//         alert("Cannot proceed. Your guests exceed the selected table capacity.");
//         return;
//       }
//       const newReservation = {
//         id: Date.now().toString(),
//         date: document.getElementById("date").value,
//         time: document.getElementById("bookingTime").value,
//         guests: guestCount,
//         tables: tableCount,
//         name: document.getElementById("name").value,
//         email: document.getElementById("email").value,
//         phone: document.getElementById("phone").value,
//       };

//       // window.location.href = 'history.php';
//     });
//   }
// });

document.addEventListener("DOMContentLoaded", () => {
  const guestCountInput = document.getElementById("guest-count");
  const tableCountInput = document.getElementById("table-count");
  const totalCapacityDisplay = document.getElementById("total-capacity");
  const statusDisplay = document.getElementById("status-display");
  const form = document.getElementById("reservation-form");
  const dateInput = document.getElementById("date");
  const timeInput = document.getElementById("bookingTime");

  // --- FITUR 1: BLOKIR TANGGAL LALU ---
  if (dateInput) {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, "0");
    const day = String(today.getDate()).padStart(2, "0");
    dateInput.min = `${year}-${month}-${day}`;
  }

  // --- FUNGSI UPDATE STATUS KAPASITAS ---
  function updateStatus() {
    if (!guestCountInput || !tableCountInput || !totalCapacityDisplay || !statusDisplay) return;

    const guestCount = parseInt(guestCountInput.value) || 0;
    const tableCount = parseInt(tableCountInput.value) || 0;
    const totalCapacity = tableCount * 4;

    totalCapacityDisplay.textContent = totalCapacity;

    if (guestCount > totalCapacity) {
      statusDisplay.innerHTML = `Warning: You have selected ${tableCount} tables which can only accommodate <strong>${totalCapacity}</strong> guests. Please increase the number of tables or reduce the number of guests.`;
      statusDisplay.className = "status-box warning";
    } else {
      statusDisplay.innerHTML = `Selected tables can hold up to <strong>${totalCapacity}</strong> guests.`;
      statusDisplay.className = "status-box info";
    }
  }

  if (guestCountInput && tableCountInput) {
    guestCountInput.addEventListener("input", updateStatus);
    tableCountInput.addEventListener("input", updateStatus);
  }

  updateStatus();

  // --- PROSES SUBMIT FORM ---
  if (form) {
    form.addEventListener("submit", (event) => {
      // JANGAN event.preventDefault() dulu, kita cek dulu baru submit

      const guestCount = parseInt(guestCountInput?.value) || 0;
      const tableCount = parseInt(tableCountInput?.value) || 0;
      const totalCapacity = tableCount * 4;
      const selectedDate = dateInput?.value || "";
      const selectedTime = timeInput?.value || "";
      const inputEmail = document.getElementById("email")?.value.trim().toLowerCase() || "";
      const inputPhone = document.getElementById("phone")?.value.trim() || "";

      // --- CEK WAKTU LEWAT ---
      if (selectedDate === dateInput?.min && selectedTime) {
        const now = new Date();
        const currentHours = now.getHours();
        const currentMinutes = now.getMinutes();
        const slotStartTime = selectedTime.split("-")[0];
        const [slotHours, slotMinutes] = slotStartTime.split(":").map(Number);

        if (currentHours > slotHours || (currentHours === slotHours && currentMinutes >= slotMinutes)) {
          alert("This time slot has already passed for today. Please choose a later time.");
          event.preventDefault(); // ← Cuma diblokir kalau error
          return;
        }
      }

      // --- CEK KAPASITAS ---
      if (guestCount > totalCapacity) {
        alert("Cannot proceed. Your guests exceed the selected table capacity.");
        event.preventDefault(); // ← Cuma diblokir kalau error
        return;
      }

      // --- CEK RESERVASI GANDA (di localStorage sementara) ---
      let reservationHistory = JSON.parse(localStorage.getItem("allReservations")) || [];
      
      const isDuplicate = reservationHistory.some(res => {
        const sameDateTime = res.date === selectedDate && res.time === selectedTime;
        const sameContact = (res.email.toLowerCase() === inputEmail) || (res.phone === inputPhone);
        return sameDateTime && sameContact;
      });

      if (isDuplicate) {
        alert("You have already made a reservation for this time slot under this email or phone number.");
        event.preventDefault(); // ← Cuma diblokir kalau error
        return;
      }

      // ✅ Kalau SEMUA CEKAN LULUS, BARU KIRIM KE DATABASE!
      // Kita hapus localStorage, biar datanya masuk ke PHP
      alert("Reservation Process Succeded!");
      // form.submit(); ← Ini gak perlu ditulis kalau gak ada event.preventDefault() di awal
    });
  }
});

</script>
  </body>
</html>
