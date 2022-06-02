<?php
    /*
    Template Name: booking
    */
    ?>
<?php require_once('booking-header.php'); ?>
<section class="container-fluid b-form">
    <div class="container col-md-10">
      <div class="row">
          <div class="col-md-6 img-fluid b-girl">
            <!-- image -->
          </div>
          <div class="col-md-6 form">
            <h3>Book Tickets</h3>
              <form action="/action_page.php" class="needs-validation" novalidate>
                  <div class="row">
                    <div class="form-group col">
                    <label for="f-name">First Name</label>
                    <input type="text" class="form-control" id="f-name" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group col">
                      <label for="l-name">Last Name</label>
                      <input type="text" class="form-control" id="l-name" required>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div> <!-- row -->

                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="row">
                    <div class="form-group col">
                    <label for="tour">Select tour</label>
                    <select name="tour" input type="text" class="form-control custom-select" id="tour" required>
                      <div class="invalid-feedback">Please fill out this field.</div>
                      <option selected>Choose...</option>
                      <option value="objects">Objects & Memories Tour</option>
                      <option value="tactile">Please Touch: Tactile Tour</option>
                      <option value="commissariat">The Commissariat Tour</option>
                      <option value="treasure">Treasure!</option>
                    </select>
                  </div>
                  <div class="form-group col">
                      <label for="tickets">Select tickets</label>
                      <select name="tickets" input type="text" class="form-control custom-select" id="tickets" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        <option selected>Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10+">10+</option>
                      </select>
                    </div>
                  </div> <!-- row -->

                  <div class="form-group">
                  <label for="date-picker">Select date & time</label>
                  <div class="input-group date" id="datetimepicker-demo" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker-demo"/>
                    <div class="input-group-append" data-target="#datetimepicker-demo" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </div>
                </div>

                  <button type="submit" class="btn" role="button">Submit</a>
                  
                </form>

          </div>

    </div>
  </div>

</section>

<?php get_footer(); ?>