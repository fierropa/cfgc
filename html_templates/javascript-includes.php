<script type="text/javascript">
    window.ecjQuery = window.jQuery;
    jQuery.noConflict(true);
    var countryData = {"All":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTownDistrict","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.stateProvinceRegion","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":false},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false},
                          {"field":"buildingNumber","validationType":"","label":"label.buildingNumber","type":"input","essential":false},
                          {"field":"streetName","validationType":"","label":"label.streetName","type":"input","essential":false},
                          {"field":"suburb","validationType":"","label":"label.suburb","type":"input","essential":false},
                          {"field":"apartmentNumber","validationType":"","label":"label.aptNumber","type":"input","essential":false}
                        ],
                      "DE":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTown","type":"input","essential":true}
                        ],
                      "HK":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.district","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.province","type":"input","essential":false}
                        ],
                      "IN":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":false},
                          {"field":"city","validationType":"","label":"label.cityTown","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true}
                        ],
                      "IT":
                        [
                          {"field":"streetName","validationType":"","label":"label.streetName","type":"input","essential":true},
                          {"field":"buildingNumber","validationType":"","label":"label.buildingNumber","type":"input","essential":true},
                          {"field":"address","validationType":"","label":"label.addressLine2","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"city","validationType":"","label":"label.town","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.region","type":"input","essential":false}
                        ],
                      "CN":
                        [
                          {"field":"buildingNumber","validationType":"","label":"label.buildingNumber","type":"input","essential":true},
                          {"field":"streetName","validationType":"","label":"label.streetName","type":"input","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTown","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.province","type":"input","essential":true}
                        ],
                      "NZ":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"suburb","validationType":"","label":"label.suburb","type":"input","essential":false},
                          {"field":"city","validationType":"","label":"label.city","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true}
                        ],
                      "FR":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"city","validationType":"","label":"label.town","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.region","type":"input","essential":false}
                        ],
                      "MY":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTown","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.state","type":"input","essential":true}
                        ],
                      "ES":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTownDistrict","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.stateProvinceRegion","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false}
                        ],
                      "AU":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"suburb","validationType":"","label":"label.suburb","type":"input","essential":true},
                          {"field":"state","validationType":"STATE","label":"label.state","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true}
                        ],
                      "SG":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTown","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true}
                        ],
                      "GB":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.city","type":"input","essential":true},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true}
                        ],
                      "IE":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.city","type":"input","essential":true},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.eircode","type":"input","essential":false}
                        ],
                      "US":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.city","type":"input","essential":true},
                          {"field":"state","validationType":"STATE","label":"label.stateProvince","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false}
                        ],
                      "CA":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.city","type":"input","essential":true},
                          {"field":"state","validationType":"STATE","label":"label.stateProvince","type":"input","essential":true},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false}
                        ],
                      "NL":
                        [
                          {"field":"streetName","validationType":"","label":"label.streetName","type":"input","essential":true},
                          {"field":"buildingNumber","validationType":"NONNEGATIVEINTEGER","label":"label.buildingNumber","type":"input","essential":true},
                          {"field":"apartmentNumber","validationType":"","label":"label.aptNumber","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":true},
                          {"field":"city","validationType":"","label":"label.city","type":"input","essential":true}
                        ],
                      "Other":
                        [
                          {"field":"address","validationType":"","label":"label.addressLines","type":"textarea","essential":true},
                          {"field":"city","validationType":"","label":"label.cityTownDistrict","type":"input","essential":true},
                          {"field":"state","validationType":"","label":"label.stateProvinceRegion","type":"input","essential":false},
                          {"field":"postalCode","validationType":"POSTALCODE","label":"label.postalCode","type":"input","essential":false},
                          {"field":"county","validationType":"","label":"label.county","type":"input","essential":false}
                        ]
                      };
    var statesData = {"AU":
                        [
                          {"code":"NSW","name":"New South Wales"},{"code":"VIC","name":"Victoria"},{"code":"QLD","name":"Queensland"},{"code":"SA","name":"South Australia"},{"code":"TAS","name":"Tasmania"},
                          {"code":"WA","name":"Western Australia"},{"code":"ACT","name":"Australian Capital Territory"},{"code":"NT","name":"Northern Territory"}
                        ],
                      "MX":
                        [
                          {"code":"AGU","name":"Aguascalientes"},{"code":"BCN","name":"Baja California"},{"code":"BCS","name":"Baja California Sur"},{"code":"CAM","name":"Campeche"},
                          {"code":"CHH","name":"Chihuahua"},{"code":"CHP","name":"Chiapas"},{"code":"COA","name":"Coahuila"},{"code":"COL","name":"Colima"},{"code":"DIF","name":"Distrito Federal"},
                          {"code":"DUR","name":"Durango"},{"code":"GRO","name":"Guerrero"},{"code":"GUA","name":"Guanajuato"},{"code":"HID","name":"Hidalgo"},{"code":"JAL","name":"Jalisco"},
                          {"code":"MEX","name":"Mexico"},{"code":"MIC","name":"Michoacán"},{"code":"MOR","name":"Morelos"},{"code":"NAY","name":"Nayarit"},{"code":"NLE","name":"Nuevo Leon"},
                          {"code":"OAX","name":"Oaxaca"},{"code":"PUE","name":"Puebla"},{"code":"QUE","name":"Querétaro"},{"code":"ROO","name":"Quintana Roo"},{"code":"SIN","name":"Sinaloa"},
                          {"code":"SLP","name":"San Luis Potosí"},{"code":"SON","name":"Sonora"},{"code":"TAB","name":"Tabasco"},{"code":"TAM","name":"Tamaulipas"},{"code":"TLA","name":"Tlaxcala"},
                          {"code":"VER","name":"Veracruz"},{"code":"YUC","name":"Yucatan"},{"code":"ZAC","name":"Zacatecas"}
                        ],
                      "US":
                        [
                          {"code":"AL","name":"Alabama"},{"code":"AK","name":"Alaska"},{"code":"AS","name":"American Samoa"},{"code":"AZ","name":"Arizona"},{"code":"AA","name":"Armed Forces Americas"},
                          {"code":"AE","name":"Armed Forces Europe"},{"code":"AP","name":"Armed Forces Pacific"},{"code":"AR","name":"Arkansas"},{"code":"CA","name":"California"},{"code":"CO","name":"Colorado"},
                          {"code":"CT","name":"Connecticut"},{"code":"DE","name":"Delaware"},{"code":"DC","name":"District of Columbia"},{"code":"FM","name":"Federated States Of Micronesia"},
                          {"code":"FL","name":"Florida"},{"code":"GA","name":"Georgia"},{"code":"GU","name":"Guam"},{"code":"HI","name":"Hawaii"},{"code":"ID","name":"Idaho"},{"code":"IL","name":"Illinois"},
                          {"code":"IN","name":"Indiana"},{"code":"IA","name":"Iowa"},{"code":"KS","name":"Kansas"},{"code":"KY","name":"Kentucky"},{"code":"LA","name":"Louisiana"},{"code":"ME","name":"Maine"},
                          {"code":"MH","name":"Marshall Islands"},{"code":"MD","name":"Maryland"},{"code":"MA","name":"Massachusetts"},{"code":"MI","name":"Michigan"},{"code":"MN","name":"Minnesota"},
                          {"code":"MS","name":"Mississippi"},{"code":"MO","name":"Missouri"},{"code":"MT","name":"Montana"},{"code":"NE","name":"Nebraska"},{"code":"NV","name":"Nevada"},
                          {"code":"NH","name":"New Hampshire"},{"code":"NJ","name":"New Jersey"},{"code":"NM","name":"New Mexico"},{"code":"NY","name":"New York"},{"code":"NC","name":"North Carolina"},
                          {"code":"ND","name":"North Dakota"},{"code":"MP","name":"Northern Mariana Islands"},{"code":"OH","name":"Ohio"},{"code":"OK","name":"Oklahoma"},{"code":"OR","name":"Oregon"},
                          {"code":"PW","name":"Palau"},{"code":"PA","name":"Pennsylvania"},{"code":"PR","name":"Puerto Rico"},{"code":"RI","name":"Rhode Island"},{"code":"SC","name":"South Carolina"},
                          {"code":"SD","name":"South Dakota"},{"code":"TN","name":"Tennessee"},{"code":"TX","name":"Texas"},{"code":"UT","name":"Utah"},{"code":"VT","name":"Vermont"},
                          {"code":"VI","name":"Virgin Islands"},{"code":"VA","name":"Virginia"},{"code":"WA","name":"Washington"},{"code":"WV","name":"West Virginia"},{"code":"WI","name":"Wisconsin"},
                          {"code":"WY","name":"Wyoming"}
                        ],
                      "CA":
                        [
                          {"code":"AB","name":"Alberta"},{"code":"BC","name":"British Columbia"},{"code":"MB","name":"Manitoba"},{"code":"NB","name":"New Brunswick"}, {"code":"NL","name":"Newfoundland and Labrador"},
                          {"code":"NT","name":"Northwest Territories"},{"code":"NS","name":"Nova Scotia"},{"code":"NU","name":"Nunavut"},{"code":"ON","name":"Ontario"},{"code":"PE","name":"Prince Edward Island"},
                          {"code":"QC","name":"Quebec"},{"code":"SK","name":"Saskatchewan"},{"code":"YT","name":"Yukon"}
                        ]
                      };
</script>
<script type="text/javascript" src="https://app.etapestry.com/hosted/eTapestry.com/EtapOnlineRegistration.js"></script>
<script type="text/javascript" src="https://app.etapestry.com/hosted/eTapestry.com/SharingSupport.js"></script>
<script type="text/javascript" src="https://app.etapestry.com/hosted/eTapestry.com/diyParams.js"></script>
<script type="text/javascript" src="newsletterresources/ecommBehavior.js"></script>
<script type="text/javascript" src="https://app.etapestry.com/hosted/eTapestry.com/responsiveiframe.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.0/ui-bootstrap-tpls.min.js"></script>
<script type="text/javascript" src="https://app.etapestry.com/hosted/eTapestry.com/diy.js"></script>
<script type="text/javascript" src="https://app.etapestry.com/hosted/eTapestry.com/diycontroller.js"></script>
<script type="text/javascript">
    function getTranslations()
    {
        var translations = {};
        
        translations["label.firstName"] = "first name";
        translations["label.lastName"] = "last name";
        translations["label.emailAddress"] = "email address";
        translations["label.phoneNumber"] = "phone number";
        translations["label.fund"] = "Fund";
        
        translations["msg.pleaseEnter.n"] = "Please enter your {0}.";
        translations["msg.pleaseSelect.n"] = "Please select your {0}.";
        translations["msg.pleaseSelectMembership"] = "Please select a membership level.";
        translations["msg.pleaseAnswerQuestion"] = "Please provide an answer to the following question.";
        translations["msg.pleaseEnterName"] = "Please complete the account name or both first and last names.";
        translations["msg.pleaseConfirmEmail"] = "Please confirm your email address.";
        translations["msg.invalidConfirmEmail"] = "The confirmation email address does not match the initial email address.";
        translations["msg.invalidEmail"] = "Please enter a valid email address.";
        
        //Names resources
        translations["label.firstName"] = "First Name";
        translations["label.lastName"] = "Last Name";
        translations["label.cancel"] = "Cancel";
        translations["label.cancelCustom"] = "Cancel Custom";
        
        return translations;
    }
    
    //Create an array for all the labels
    var labels                   = [];
    labels["label.city"]         = "City";
    labels["label.state"]        = "State";
    labels["label.postalCode"]   = "Postal Code";
    labels["label.addressLine2"] = "Address Line 2";
    var dateFormat               = 'M/d/yyyy';
    var countryCode              = 'US';
    var languageCode             = 'en';
    var decimalSeparator         = /\./g;
    var commaSeparator           = /\,/g;
    var decimalEq                = '.';
    var commaEq                  = ',';
    var currencySymb             = "\u0024";

    var typeValidator = registerEcommerceTypeValidator(createValidationInstance());
    
    function validate_form()
    {
        var typeValidator = registerEcommerceTypeValidator(createValidationInstance());

        return validate();
    }
    
    var ri = responsiveIframe();
    ri.allowResponsiveEmbedding();
</script>
    
    <input type="hidden" name="dbOrgName" value="CommunityFamilyGuidanceCenter"/>
    <input type="hidden" name="locale" value="en_US"/>
    <input type="hidden" name="isDiy" value="true"/>
    <input type="hidden" name="isNewAddress" value="true"/>
    <input type="hidden" name="pageId" value="xPODvC3m"/>
    <input type="hidden" name="successURL" value="https://app.etapestry.com/onlineforms/CommunityFamilyGuidanceCenter/newsletterSuccess.html"/>
    <input type="hidden" name="failURL" value="https://app.etapestry.com/onlineforms/CommunityFamilyGuidanceCenter/newsletterFail.html"/>
    <input type="hidden" name="persona" value="Personal"/>
    <input type="hidden" name="notifyDonor" value="true"/>
    <input type="hidden" name="fromEMail" value="membership@cfgcenter.com"/>
    <input type="hidden" name="notifyOrg" value="false"/>
    <input type="hidden" name="notifyEMail" value=""/>
    <input type="hidden" name="transType" value="contact" /> 
    <input type="hidden" name="allow" value="true" /> 
    <input type="hidden" name="accountName" /> 
    <input type="hidden" name="sortName" /> 
    <input type="hidden" name="longSalutation" /> 
    <input type="hidden" name="shortSalutation" /> 
    <input type="hidden" name="personaNote" /> 
    <input type="hidden" name="donorEmailSubject" value="Thank You For Signing Up" /> 
    <input type="hidden" name="orgEmailSubject" value="" />
    <input type="hidden" name="donorEmailRef" value="8758.0.3302" />
    <input type="hidden" name="contactSubject" value="Newsletter Subscription - New" />
    <input type="hidden" name="contactMethod" value="label.import.field.contactMethods.value.diyForms.contact" />
    <input type="hidden" name="orgLocale" value="en_US" />