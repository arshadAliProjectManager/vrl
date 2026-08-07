<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9996340820';
        $this->comp['phonehtml'] = 'tel:+919996340820';
        $this->comp['phone1'] = '+91 0000000000';
        $this->comp['phonehtml1'] = 'tel:+910000000000';
        $this->comp['supportmail'] = 'support@mycompany.com';
        $this->comp['replyToMail'] = 'support@mycompany.com';
        $this->comp['mail'] = 'support@mycompany.com';    
        $this->comp['mailhtml'] = "mailto:support@mycompany.com";
        $this->comp['company3'] = 'Vince Roadline Packers and Movers';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919996340820";

        $this->comp['address'] = "H.No. 07, Vikaas Colony, near Loha Mandi, Vikas Nagar, Adampur, Haryana 125052";
        $this->comp['address1'] = "H.No. 07, Vikaas Colony, near Loha Mandi, Vikas Nagar";
        $this->comp['address2'] = "Adampur, Haryana 125052";

        $this->comp['branchAddress'] = "No 4 4th Cross Road N 7 Kiadb Export Promotion 4th Cross Industrial Area Whitefield Opp To Opp Showroom Bengaluru Karnataka 560066";
        $this->comp['branchAddress1'] = "No 4 4th Cross Road N 7 Kiadb Export Promotion 4th Cross Industrial Area Whitefield Opp To Opp Showroom";
        $this->comp['branchAddress2'] = "Bengaluru, Karnataka 560066";
        $this->comp['branchAddressRegion'] = "Bengaluru";
        $this->comp['branchPostalCode'] = "560066";
        $this->comp['branchState'] = "Karnataka";
        $this->comp['branchStateUrl'] = "karnataka";

        $this->comp['addressRegion'] = "Adampur";
        $this->comp['postalCode'] = "125052";
        $this->comp['companystate'] = "Haryana";
        $this->comp['themeColor'] = "#D60412";

        $this->comp['experience'] = "20+";
        $this->comp['startYear'] = "2006";

        $this->comp['happyClients'] = "19,850+";
        $this->comp['yearsExperience'] = "20+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
