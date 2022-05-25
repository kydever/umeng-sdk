<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/umeng/umini/param/UmengUminiGetRetentionByDataSourceIdListDTO.class.php');

class UmengUminiGetRetentionByDataSourceIdResult {

        	
    private $data;
    
        /**
    * @return 返回留存数据
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置返回留存数据     
     * @param UmengUminiGetRetentionByDataSourceIdListDTO $data     
          
     * 此参数必填     */
    public function setData(UmengUminiGetRetentionByDataSourceIdListDTO $data) {
        $this->data = $data;
    }
    
        	
    private $code;
    
        /**
    * @return 状态码
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置状态码     
     * @param Long $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $success;
    
        /**
    * @return 状态
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置状态     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $msg;
    
        /**
    * @return 返回消息
    */
        public function getMsg() {
        return $this->msg;
    }
    
    /**
     * 设置返回消息     
     * @param String $msg     
          
     * 此参数必填     */
    public function setMsg( $msg) {
        $this->msg = $msg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$dataResult=$this->stdResult->{"data"};
    				$this->data = new UmengUminiGetRetentionByDataSourceIdListDTO();
    				$this->data->setStdResult ( $dataResult);
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "msg", $this->stdResult )) {
    				$this->msg = $this->stdResult->{"msg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "data", $this->arrayResult )) {
    		$dataResult=$arrayResult['data'];
    			    			$this->data = new UmengUminiGetRetentionByDataSourceIdListDTO();
    			    			$this->data->setStdResult ( $dataResult);
    		}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "msg", $this->arrayResult )) {
    			$this->msg = $arrayResult['msg'];
    			}
    		    	    		}

}
?>