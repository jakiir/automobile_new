<?php
if (!class_exists( 'all_states' )){ 
		class all_states{
			
			//public $countryList;
			
		function __construct() {
									 
		  }
		
			  
	   function state_list(){		  
		   $states = array(
				'AL' => __( 'Alabama', 'automobile' ),
				'AK' => __( 'Alaska', 'automobile' ),
				'AZ' => __( 'Arizona', 'automobile' ),
				'AR' => __( 'Arkansas', 'automobile' ),
				'CA' => __( 'California', 'automobile' ),
				'CO' => __( 'Colorado', 'automobile' ),
				'CT' => __( 'Connecticut', 'automobile' ),
				'DE' => __( 'Delaware', 'automobile' ),
				'DC' => __( 'District Of Columbia', 'automobile' ),
				'FL' => __( 'Florida', 'automobile' ),
				'GA' => _x( 'Georgia', 'US state of Georgia', 'automobile' ),
				'HI' => __( 'Hawaii', 'automobile' ),
				'ID' => __( 'Idaho', 'automobile' ),
				'IL' => __( 'Illinois', 'automobile' ),
				'IN' => __( 'Indiana', 'automobile' ),
				'IA' => __( 'Iowa', 'automobile' ),
				'KS' => __( 'Kansas', 'automobile' ),
				'KY' => __( 'Kentucky', 'automobile' ),
				'LA' => __( 'Louisiana', 'automobile' ),
				'ME' => __( 'Maine', 'automobile' ),
				'MD' => __( 'Maryland', 'automobile' ),
				'MA' => __( 'Massachusetts', 'automobile' ),
				'MI' => __( 'Michigan', 'automobile' ),
				'MN' => __( 'Minnesota', 'automobile' ),
				'MS' => __( 'Mississippi', 'automobile' ),
				'MO' => __( 'Missouri', 'automobile' ),
				'MT' => __( 'Montana', 'automobile' ),
				'NE' => __( 'Nebraska', 'automobile' ),
				'NV' => __( 'Nevada', 'automobile' ),
				'NH' => __( 'New Hampshire', 'automobile' ),
				'NJ' => __( 'New Jersey', 'automobile' ),
				'NM' => __( 'New Mexico', 'automobile' ),
				'NY' => __( 'New York', 'automobile' ),
				'NC' => __( 'North Carolina', 'automobile' ),
				'ND' => __( 'North Dakota', 'automobile' ),
				'OH' => __( 'Ohio', 'automobile' ),
				'OK' => __( 'Oklahoma', 'automobile' ),
				'OR' => __( 'Oregon', 'automobile' ),
				'PA' => __( 'Pennsylvania', 'automobile' ),
				'RI' => __( 'Rhode Island', 'automobile' ),
				'SC' => __( 'South Carolina', 'automobile' ),
				'SD' => __( 'South Dakota', 'automobile' ),
				'TN' => __( 'Tennessee', 'automobile' ),
				'TX' => __( 'Texas', 'automobile' ),
				'UT' => __( 'Utah', 'automobile' ),
				'VT' => __( 'Vermont', 'automobile' ),
				'VA' => __( 'Virginia', 'automobile' ),
				'WA' => __( 'Washington', 'automobile' ),
				'WV' => __( 'West Virginia', 'automobile' ),
				'WI' => __( 'Wisconsin', 'automobile' ),
				'WY' => __( 'Wyoming', 'automobile' ),
				'AA' => __( 'Armed Forces (AA)', 'automobile' ),
				'AE' => __( 'Armed Forces (AE)', 'automobile' ),
				'AP' => __( 'Armed Forces (AP)', 'automobile' ),
				'AS' => __( 'American Samoa', 'automobile' ),
				'GU' => __( 'Guam', 'automobile' ),
				'MP' => __( 'Northern Mariana Islands', 'automobile' ),
				'PR' => __( 'Puerto Rico', 'automobile' ),
				'UM' => __( 'US Minor Outlying Islands', 'automobile' ),
				'VI' => __( 'US Virgin Islands', 'automobile' ),
			);
		   
		   return $states;
	   }    
        
    }
}