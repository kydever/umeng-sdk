<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UmengUminiGetSceneInfoDTO extends SDKDomain {

       	
    private $code;
    
        /**
    * @return 推广活动值/渠道值
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置推广活动值/渠道值     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $name;
    
        /**
    * @return 推广活动/渠道中文名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置推广活动/渠道中文名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $url;
    
        /**
    * @return 推广活动连接
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置推广活动连接     
     * @param String $url     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $createDateTime;
    
        /**
    * @return 推广活动创建时间
    */
        public function getCreateDateTime() {
        return $this->createDateTime;
    }
    
    /**
     * 设置推广活动创建时间     
     * @param String $createDateTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateDateTime( $createDateTime) {
        $this->createDateTime = $createDateTime;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "createDateTime", $this->stdResult )) {
    				$this->createDateTime = $this->stdResult->{"createDateTime"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    			    		    			if (array_key_exists ( "createDateTime", $this->arrayResult )) {
    			$this->createDateTime = $arrayResult['createDateTime'];
    			}
    		    	    		}
 
   
}
?>