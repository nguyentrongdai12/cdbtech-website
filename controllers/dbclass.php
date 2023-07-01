<?php  
    class dbclass
    { 
        private $dbhost = '115.73.212.67:3333';
        private $dbuser = 'admin';
        private $dbpass = 'Cdb@@2022';
        private $dbname = 'cdbtech_web';  
        private $__conn;
        
        function connect()
        {
            if (!$this->__conn){
                $this->__conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Lỗi kết nối');
                mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
            }}
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
?>