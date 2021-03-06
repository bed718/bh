<?php include 'includes/_head.php'; ?>

		<div id="wrap">
			
			<?php include 'includes/_header.php'; ?>
			
			<div id="content">
				
				<div class="section">
						<div class="inner">
					
				<form action="" class="compact">
					<h1>New Publisher Brief</h1>
					<div class="form-group">
						<div class="form-item"><label for="">Company</label><input type="text"></div>
						<div class="form-item"><label for="">Website</label><input type="url" placeholder="http://"></div>
						
						<div class="form-item">
							<label for="">Website description</label>
							<textarea name="" id="" cols="10" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="">Your point person</label>
						<div class="form-item left"><input type="text" placeholder="Name (First Last)"></div>
						<div class="form-item right"><input type="email" placeholder="Email"></div>
						
						<div class="form-item left"><input type="text" placeholder="Title"></div>
						<div class="form-item right"><input type="text" placeholder="Phone"></div>
					</div>
					<div class="form-group">
						<label for="">What is your monthly traffic?</label>
						<div class="form-item left"><input type="text" placeholder="Monthly uniques"></div>
						<div class="form-item right"><input type="text" placeholder="Monthly pageviews"></div>
					</div>
					<div class="form-group">
						<div class="form-item">
							<label for="">Current affiliate network(s) if any</label>
							<textarea name="" id="" cols="10" rows="10" placeholder="(e.g. RewardStyle, Skimlinks, Commission Junction, etc.)"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="">What are your top 10 preferred retailers?</label>
						<div class="form-item left"><input type="text" placeholder="1)"></div>
						<div class="form-item right"><input type="text" placeholder="2)"></div>
						<div class="form-item left"><input type="text" placeholder="3)"></div>
						<div class="form-item right"><input type="text" placeholder="4)"></div>
						<div class="form-item left"><input type="text" placeholder="5)"></div>
						<div class="form-item right"><input type="text" placeholder="6)"></div>
						<div class="form-item left"><input type="text" placeholder="7)"></div>
						<div class="form-item right"><input type="text" placeholder="8)"></div>
						<div class="form-item left"><input type="text" placeholder="9)"></div>
						<div class="form-item right"><input type="text" placeholder="10)"></div>
					</div>
					<div class="form-group">
						<label for="">What is your key demographic?</label>
						<div id="age-range" class="form-item left"><input type="text" placeholder="Age range:"></div>
						<div  class="form-item right"><input type="text" placeholder="Income range: ___ to ___ annual"></div>
						<div class="form-item left"><input type="text" placeholder="Gender: M___% / F___%"></div>
						<div class="form-item right"><input type="text" placeholder="Location:"></div>
						<div class="form-item"><input type="text" placeholder="Interests:"></div>
					</div>

					<div class="form-group">
						<label for="">How would you like to use Bringhub?</label>
						<div class="form-item check-group">
							<label class="check-item">
					        <input type="checkbox" name="" value="" class="check-cb" >
					        <span class="check-mark"></span>
					        <span class="check-desc">Content</span>
					      </label>

					      <label class="check-item">
					        <input type="checkbox" name="" value="" class="check-cb" >
					        <span class="check-mark"></span>
					        <span class="check-desc">Sponsored conetent</span>
					      </label>

					      <label class="check-item">
					        <input type="checkbox" name="" value="" class="check-cb" >
					        <span class="check-mark"></span>
					        <span class="check-desc">Shoppable advertisments</span>
					      </label>
						</div>
						<div class="form-item"><label for="">Estimated # of items you would like to make shoppable</label><input type="text" placeholder="Items/day" class="short"></div>
					</div>

					
					
					<div id="branding-choice" class="form-group">
						<label for="">How would you like to use Bringhub?</label>
						<div class="radio-group">
							<div class="form-item left">
								<label class="radio-item">
						        <input type="radio" name="branding" value="" class="radio-cb" >
						        <span class="radio-mark"></span>
						        <span class="radio-desc">Bringhub branding</span>
						      </label>
						      <div class="desc">Bringhub logo used thoughout</div>
						      <img src="../images/Confirmation-Bringhub.jpg" alt="">
					      </div>

							<div class="form-item right">
						      <label class="radio-item">
						        <input type="radio" name="branding" value="" class="radio-cb" >
						        <span class="radio-mark"></span>
						        <span class="radio-desc">Your branding</span>
						      </label>
						      <div class="desc">Your company logo used thoughout</div>
						      <img src="../images/Confirmation-Hubquire.jpg" alt="">
						      <div class="file">
						      	<input type="file" >
						      <div class="desc">Please upload an .svg or .ai file of your logo.</div>
						      </div>
						      
					      </div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-item"><label for="">Which CMS do you use?</label><input type="text" placeholder="(e.g. Wordpress, Drupal, custom, etc.)"></div>
						
						<label for="">Which best describes how you would like Bringhub to be intergrated into your CMS?</label>
						<div class="form-item">
							<label class="radio-item">
					        <input type="radio" name="cms" value="" class="radio-cb" >
					        <span class="radio-mark"></span>
					        <span class="radio-desc">Fully Automated Integration</span>
					      </label>
					      <div class="desc">We'd like to generate the Bringhub collection & product ID's within our CMS and have them automatically added to the code of relevant media within a post.
								
					      </div>
					   </div>

					   <div class="form-item">
							<label class="radio-item">
					        <input type="radio" name="cms" value="" class="radio-cb" >
					        <span class="radio-mark"></span>
					        <span class="radio-desc">Simple Integration</span>
					      </label>
					      <div class="desc">We'd like to generate the Bringhub collection & product ID's within our CMS. From there, we'll manually add these to the media code within a post.
								
					      </div>
					   </div>
						

						<div class="form-item">
							<label class="radio-item">
					        <input type="radio" name="cms" value="" class="radio-cb" >
					        <span class="radio-mark"></span>
					        <span class="radio-desc">No CMS Integration</span>
					      </label>
					      <div class="desc">We'll visit the Bringhub publisher dashboard to find products and generate collection & product ID's. Then, we'll manually add these to a post's code within our CMS.
								
								
					      </div>
					   </div>
					   
					</div>
					<div class="form-group">
					<div class="form-item"><label for="">When would you like to start using the cart?</label><input id="date" type="text" placeholder="MM/DD/YYYY" class="short"></div>
					</div>

					<div class="form-group">
					<div class="form-item">
						<label for="">Additional requests/comments</label>
						<textarea name="" id="" cols="10" rows="10" ></textarea>
					</div>
				</div>

					<div class="actions">
						<input type="submit" value="Submit"/>
					</div>


				</form>

					</div>
				</div>

			</div>
			
			<?php include 'includes/_footer.php'; ?>	
		</div>

<?php include 'includes/_foot.php'; ?>

