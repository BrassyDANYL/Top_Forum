<?php
/*
Template Name: Registration
*/
get_header();
?>

<div class="container">
      <div class="registration">
         <h2 class="subtitle">2 easy steps to register</h2>
         <div class="fill-in-form">fill in the form in english</div>
         <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/arrow_down_gold.png" alt="arrow">
         <div class="terms">READ THOROUGHLY TERMS&CONDITIONS</div>
          <div class="choosesomething">
            <h2>Please, choose a conference:</h2>
            <select name="select" id="conference">
               <option value="1">Wealth TOP FORUM Israel 2016
               </option>
               <option value="2">Wealth TOP FORUM Israel
               </option>
               <option value="3">Wealth TOP FORUM Israel 2022
               </option>
            </select>
         </div>

         <div class="choosesomething">
            <h2>Please choose delegate package:</h2>
            <div class="radio-con">
               <input type="radio" id="standard" name="package">
               <label for="standard">
                  <div>standard</div>
               </label>
               <input type="radio" id="premium" name="package">
               <label for="premium">
                  <div>premium</div>
               </label>
            </div>
         </div>

         <div class="choosesomething">
            <h2>Name:</h2>
            <input type="text">
         </div>

         <div class="choosesomething">
            <h2>Surname:</h2>
            <input type="text">
         </div>

         <div class="choosesomething">
            <h2>Business Area:</h2>
            <select name="select" id="business_area">
               <option value="1">Forex companies
               </option>
               <option value="2">Forex companies 2
               </option>
               <option value="3">Forex companies 3
               </option>
            </select>
         </div>

         <div class="choosesomething">
            <h2>Position:</h2>
            <input type="text">
         </div>
         <div class="choosesomething">
            <h2>E-mail (for orginizers):</h2>
            <input type="email">
         </div>
         <div class="choosesomething">
            <h2>Mobile Number (for orginizers):</h2>
            <input type="tel">
         </div>
         <div class="choosesomething">
            <h2>Country:</h2>
            <input type="text">
         </div>
         <div class="choosesomething">
            <h2>Web-site:</h2>
            <input type="text">
         </div>

         <div class="choosesomething">
            <h2>Method of payment:</h2>
            <div class="radio-con2">
               <input type="radio" id="free-payment" name="payment">
               <label for="free-payment"><div>free</div></label>
               <input type="radio" id="visa-mastercard" name="payment"> 
               <label for="visa-mastercard"><div class="visa"></div></label>
               <input type="radio" id="invoice" name="payment">
               <label for="invoice"><div>invoice</div></label>
               <input type="radio" id="paypal" name="payment">
               <label for="paypal"><div class="paypal"></div></label>
            </div>
         </div>
         <div class="accept">
            <input required type="checkbox" name="accept" id="accept">
            <label for="accept">I accept <a href="#">Terms&Conditions</a></label>
            <button>submit</button>
         </div>

      </div>
   </div>
         

<?php
get_footer();
?>