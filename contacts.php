<?php include "inc/header.inc"; ?>
	
	<section id="contacts">
        <div class="container">
			<h1>Contacts</h1>
			<form name="myForm" method="post" action="database-write.php" onsubmit="return(validate());">
				<!-- name -->
				<div class="row">
					<div>
						<!-- firstname -->
						<div class="form-group">
							<label for="firstname">First Name </label>
							<input class="form-text" type="text" name="firstname" required>
						</div>
					</div>
					<div>
						<!-- lastname -->
						<div class="form-group">
							<label for="lastname">Last Name </label>
							<input class="form-text" type="text" name="lastname" required>
						</div>
					</div>
				</div>
				
				<!-- email -->
				<div class="form-group">
					<label for="email">Email </label>
					<input class="form-text" type="text" name="email" required>
				</div>
				<!-- phone -->
				<div class="form-group">
					<label class="sr-only" for="phone">Phone </label>
					<input class="form-text" type="text" name="phone" required>
				</div>
				<!-- message -->
				<div class="form-group">
					<textarea placeholder="Describe yourself here..." name="message" id="message" rows="5"></textarea>
				</div>
				<input id="submit" class="ghost-button" type="submit" value="Send" />
			</form>
		</div>
	</section>


<?php include "inc/footer.inc"; ?>