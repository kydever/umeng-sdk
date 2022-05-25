<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiMultiIndiceDTO extends SDKDomain {

       	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param String $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $indicesId;
    
        /**
    * @return 指标ID
    */
        public function getIndicesId() {
        return $this->indicesId;
    }
    
    /**
     * 设置指标ID     
     * @param String $indicesId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIndicesId( $indicesId) {
        $this->indicesId = $indicesId;
    }
    
        	
    private $code;
    
        /**
    * @return 指标类型（触发用户数：event_device，触发次数：event_count，累计值：property_num_sum）
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置指标类型（触发用户数：event_device，触发次数：event_count，累计值：property_num_sum）     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $propertyName;
    
        /**
    * @return 属性名
    */
        public function getPropertyName() {
        return $this->propertyName;
    }
    
    /**
     * 设置属性名     
     * @param String $propertyName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPropertyName( $propertyName) {
        $this->propertyName = $propertyName;
    }
    
        	
    private $displayName;
    
        /**
    * @return 指标名
    */
        public function getDisplayName() {
        return $this->displayName;
    }
    
    /**
     * 设置指标名     
     * @param String $displayName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDisplayName( $displayName) {
        $this->displayName = $displayName;
    }
    
        	
    private $eventName;
    
        /**
    * @return 事件名称
    */
        public function getEventName() {
        return $this->eventName;
    }
    
    /**
     * 设置事件名称     
     * @param String $eventName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEventName( $eventName) {
        $this->eventName = $eventName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "indicesId", $this->stdResult )) {
    				$this->indicesId = $this->stdResult->{"indicesId"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "propertyName", $this->stdResult )) {
    				$this->propertyName = $this->stdResult->{"propertyName"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayName", $this->stdResult )) {
    				$this->displayName = $this->stdResult->{"displayName"};
    			}
    			    		    				    			    			if (array_key_exists ( "eventName", $this->stdResult )) {
    				$this->eventName = $this->stdResult->{"eventName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "indicesId", $this->arrayResult )) {
    			$this->indicesId = $arrayResult['indicesId'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "propertyName", $this->arrayResult )) {
    			$this->propertyName = $arrayResult['propertyName'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayName", $this->arrayResult )) {
    			$this->displayName = $arrayResult['displayName'];
    			}
    		    	    			    		    			if (array_key_exists ( "eventName", $this->arrayResult )) {
    			$this->eventName = $arrayResult['eventName'];
    			}
    		    	    		}
 
   
}
?>