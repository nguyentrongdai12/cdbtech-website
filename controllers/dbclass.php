<?php  
    class dbclass
    { 
        protected $dbhost;
        protected $dbuser;
        protected $dbpass;
        protected $dbname; 
        protected $__conn;        
        
        function connect()
        {
            if (!$this->__conn){
                $this->__conn = mysqli_connect($dbhost = '115.73.212.67:3333', $dbuser = 'admin', $dbpass = 'Cdb@@2022', $dbname = 'cdbtech_web') or die ('Lỗi kết nối');
                mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
                return $this->__conn;
            }
            else {
                    return NULL;
            }
        }   
        function dis_connect(){
            // Nếu đang kết nối thì ngắt
            if ($this->__conn){
                mysqli_close($this->__conn);
            }
        }
        function get_rs($sql)
        {
            $this->connect(); 
            $result = mysqli_query($this->__conn, $sql);
            return $result;
        }
        function query($query)
        {
            $this->connect();
            if ($this->__conn->query($query) === TRUE) {
                return TRUE;
            } else {
                return FALSE;
            }    
        }
    }
?>