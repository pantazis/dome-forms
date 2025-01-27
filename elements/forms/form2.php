<div class="newforms">
    <div class="row">
        <div class="container">

            <h1>INFORMATION FOR ONBOARDING IN DOME</h1>
            <p>The forms are below. Please, click the "Submit and create documents" at the bottom after filling all the
                fields.</p>
            <p>For testing purposes, you can click the "Fill with test data" button to create and print documents with
                test data but with the final legal prose, so they can be reviewed by your legal department in advance of
                creating the real documents.</p>

            <div class="grid45 a2">
                <div class="formg1">
                    <h2>Legal representative of the company</h2>
                    <p>We need information identifying the legal representative of the company who is going to sign the
                        document.</p>
                    <form action="process_legal_representative.php" method="post">
                        <div class="input-p"><label for="first-name">First Name</label><input type="text"
                                id="first-name" name="first-name" value="Jesus" required="">
                            <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"
                                data-lastpass-icon-root=""></div>
                        </div>

                        <div class="input-p"><label for="last-name">Last Name</label><input type="text" id="last-name"
                                name="last-name" value="Ruiz" required=""></div>

                        <div class="input-p"><label for="nationality">Nationality</label><input type="text"
                                id="nationality" name="nationality" value="Spanish" required=""></div>

                        <div class="input-p"><label for="id-card-number">ID card number</label><input type="text"
                                id="id-card-number" name="id-card-number" value="24676932R" required="">
                            <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"
                                data-lastpass-icon-root=""></div>
                        </div>

                    </form>
                </div>
                <div class="formg1">
                    <h2>Company information</h2>
                    <div>
                    <p>We also need information about the company so we can register it in DOME. Make sure that the name
                        is the
                        legal name of the company as found in the commercial registry or equivalent institution in your
                        jurisdiction. The address must be that of the official place of incorporation of your company.
                    </p>
                    <p>We need the VAT number of your company because we use it as a unique identifier in our database.
                        At this
                        moment, this is not used to charge you anything. Whenever in the future we provide paid services
                        to you,
                        a specific authorisation will be requested, and you will have to adhere to new terms of
                        contract.</p>
                    </div>
                    <form action="process_company_info.php" method="post">
                        <div class="input-p"><label for="company-name">Name</label><input type="text" id="company-name"
                                name="company-name" value="Air Quality Cloud" required="">
                            <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"
                                data-lastpass-icon-root=""></div>
                        </div>

                        <div class="input-p"><label for="street">Street name and number</label><input type="text"
                                id="street" name="street" value="C/ Mercado 54" required=""></div>

                        <div class="input-p"><label for="city">City</label><input type="text" id="city" name="city"
                                value="Madrid" required=""></div>

                        <div class="input-p"><label for="postal-code">Postal code</label><input type="text"
                                id="postal-code" name="postal-code" value="28654" required=""></div>

                        <div class="input-p"><label for="country">Country</label><input type="text" id="country"
                                name="country" value="Spain" required=""></div>

                        <div class="input-p"><label for="vat-number">VAT number</label><input type="text"
                                id="vat-number" name="vat-number" value="B35664875" required=""></div>

                    </form>
                </div>

                <div class="formg1">
                    <h2>Information about the LEAR</h2>
                    <p>This section identifies an employee of the company who will act as the LEAR. The LEAR is the
                        Legal Entity
                        Appointed Representative. Do not confuse with the Legal Representative, who has to appear in the
                        official records in the commercial registry or equivalent institution in your jurisdiction.
                        Instead, the
                        LEAR can be any person who is authorised by a Legal Representative to interact with DOME and act
                        on
                        behalf of the company. There is specific information about the LEAR in the knowledge base. Of
                        course,
                        the Legal Representative can appoint him/herself as the LEAR for DOME, if this is what is
                        suitable for
                        you.</p>
                    <form action="process_lear_info.php" method="post">
                        <div class="input-p"><label for="lear-first-name">First name</label><input type="text"
                                id="lear-first-name" name="lear-first-name" value="John" required="">
                            <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"
                                data-lastpass-icon-root=""></div>
                        </div>

                        <div class="input-p"><label for="lear-last-name">Last name</label><input type="text"
                                id="lear-last-name" name="lear-last-name" value="Doe" required=""></div>

                        <div class="input-p"><label for="lear-nationality">Nationality</label><input type="text"
                                id="lear-nationality" name="lear-nationality" value="Spanish" required=""></div>

                        <div class="input-p"><label for="lear-id-card-number">ID card number</label><input type="text"
                                id="lear-id-card-number" name="lear-id-card-number" value="56332876F" required="">
                            <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"
                                data-lastpass-icon-root=""></div>
                        </div>

                        <div class="input-p"><label for="lear-email">Email</label><input type="email" id="lear-email"
                                name="lear-email" value="john.doe@airquality.com" required=""></div>

                        <div class="input-p"><label for="lear-mobile-phone">Mobile phone</label><input type="tel"
                                id="lear-mobile-phone" name="lear-mobile-phone" value="+34876549022"></div>
                        <div class="action"><button type="submit" form="process_legal_representative.php">Submit and
                                create documents</button></div>

                    </form>
                </div>
            </div>




        </div>
    </div>
</div>