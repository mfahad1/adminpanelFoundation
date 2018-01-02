<?php
/*
 * Class: RestService
 * Usage: Communicate with Given URL to get the desired Record
 * Returns: json object
 * Exception: Dies returning a JSON object with the error
 * Notes: Also connects to the database to read user information
 */

class RestService {
	
    /*
     * Function: Get_data_services
     * Usage: Communicate with Given URL to get the desired Record
     * Returns: Data with json decode
     */

    public function get($service_url, $header = null, $data = null) {
        $curl = curl_init($service_url);
		
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($curl, CURLOPT_USERPWD, $header['user'] . ":" . $header['pass']); //Your credentials goes here
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); // Version updated to 1.1
        curl_setopt($curl, CURLOPT_ENCODING, '');
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        curl_close($curl);
        
        $this->maintainLogs($service_url, $header, $data, $response);
        return $response;
    }

    /**
     *  Example API call post
     *  Insert New Record in Database
     */
    public function post($location, $header = null, $data) {

        // json encode data

        $data_string = json_encode($data);
		//echo $location;
        // set up the curl resource
        $curl = curl_init();
        // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($curl, CURLOPT_USERPWD, $header['user'] . ":" . $header['pass']); //Your credentials goes here
        curl_setopt($curl, CURLOPT_URL, $location);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        // curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Connection: Keep-Alive'));
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        curl_close($curl);
		
		$this->maintainLogs($location, $header, $data_string, $response);
        return $response;
    }

    /**
     *  Example API call PUT
     *  Fetch/update Record from/in Database
     */
    public function put($location, $header, $data) {

        // json encode data

        $data_string = json_encode($data);
        //echo $location;
        // set up the curl resource
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $header['user'] . ":" . $header['pass']); //Your credentials goes here
        curl_setopt($curl, CURLOPT_URL, $location);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
        curl_setopt($curl, CURLOPT_ENCODING, '');
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        curl_close($curl);
        
        $this->maintainLogs($location, $header, $data_string, $response);
        return $response;
    }
    
    
    
    /**
     *  Example API call PUT
     *  Delete Record from Database
     */
    public function delete($location, $header, $data) {

        // json encode data

        $data_string = json_encode($data);
        //echo $location;
        // set up the curl resource
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $header['user'] . ":" . $header['pass']); //Your credentials goes here
        curl_setopt($curl, CURLOPT_URL, $location);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
        curl_setopt($curl, CURLOPT_ENCODING, '');
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        curl_close($curl);
        
        $this->maintainLogs($location, $header, $data_string, $response);
        
        return $response;
    }
    
    
    /**
     *  Example API call post
     *  Fetching Employee image in binary format
     */
    public function getEmployeeImageBinary($location, $header, $data) {

        $data_string = json_encode($data);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $header['user'] . ":" . $header['pass']); //Your credentials goes here
        curl_setopt($curl, CURLOPT_URL, $location);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1); 
        curl_setopt($curl, CURLOPT_ENCODING, '');
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }
    
    
    
    
    public function maintainLogs($location, $header, $data_string, $response){
			return;



	 /*         * *****************  TO CHECK LOGS  ******************** */
        if (config_item('customLogs')) {
            // create or add response to log file
            $time = date("Y-m-d h:i:s D", time());
            $dirPath = dirname(__DIR__) . "\logs";
            if (!is_dir($dirPath)) {
                mkdir($dirPath, 0777);
            }
            // $requestPath = $dirPath . "/RequestLogs.txt";
            $responsePath = $dirPath . "/WebServicesEmpLogs.txt";

            $resp = "\r\n-----------------------------------\r\n";
            $resp .= $time . "\r\n";
            $resp .= "-----------------------------------\r\n";
            $resp .= $location . "\r\n";
            $resp .= "-----------------------------------\r\n";
            $resp .= json_encode($header) . "\r\n";
            $resp .= "-----------------------------------\r\n";
            $resp .= "Requested Data:".$data_string . "\r\n";
            $resp .= "-----------------------------------\r\n";
            $resp .= "Response Data:".json_encode($response) . "\r\n";
            $resp .= "####################################\r\n";
            

            $file = (file_exists($responsePath)) ? fopen($responsePath, "a+") : fopen($responsePath, "w+");
            fwrite($file, $resp);
            fclose($file);
            chmod($responsePath, 0777);
        }
    }
    

    public function test() {
        echo "CALLED";
    }

}
