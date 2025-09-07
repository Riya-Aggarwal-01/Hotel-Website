<?php
include('include/header.php');
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Hotel Room Booking Form</h2>
    <form id="bookingForm" action="configuration/config.php" method="post" >
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstname"placeholder="Enter your first name" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Enter your last name" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="checkIn" class="form-label">Check-In Date</label>
                <input type="date" class="form-control" name="checkIn" id="checkIn" required>
            </div>
            <div class="col-md-6">
                <label for="checkOut" class="form-label">Check-Out Date</label>
                <input type="date" class="form-control"name="checkOut" id="checkOut" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="roomType" class="form-label">Room Type</label>
                <select class="form-select" name="roomType" id="roomType"required>
                    <option value="" selected disabled>Select room type</option>
                    <option value="Single">Single Deluxe</option>
                    <option value="Double">Double Deluxe</option>
                    <option value="Suite">Junior Suite</option>
                    <option value="Executive">Executive Suite</option>
                    <option value="Royal">Royal Suite</option>
                    <option value="Economic">Economic</option>
                    <option value="Executive">Executive</option>
                    <option value="premium">Premium</option>
                   
                </select>
            </div>
            <div class="col-md-6">
                <label for="guests" class="form-label">Number of Guests</label>
                <input type="number" class="form-control" id="guests" min="1" max="10" value="1" name="guests" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="specialRequests" class="form-label">Special Requests</label>
            <textarea class="form-control" name="specialRequests" id="specialRequests" rows="3" placeholder="Enter any special requests (optional)"></textarea>
        </div>

        <button type="submit" class="btn w-100 mb-3" style="background-color:#6E4525;color: white;">Book Now</button>

    </form>
</div>

<!-- Bootstrap 5 JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<!-- <script>
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Booking confirmed! We will contact you shortly.');
    });
</script>
 --><?php
include('include/footer.php');
?>

