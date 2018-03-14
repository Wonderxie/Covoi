<?php
	
class View extends MyObject{
    protected $args;
    protected $templateNames;
	
	//Constructeur de View
	public function __construct($controller, $templateName, $args = array()){
        //templateNames est un tableau qui stocker les noms de template
		//En plus de cela, ici on actualise le template content
		
		$this->templateNames = array();
        $this->templateNames['head'] = 'head';
        $this->templateNames['top'] = 'top';
        $this->templateNames['content'] = $templateName;
        $this->templateNames['foot'] = 'foot';
		
		//args est un tableau qui stocke les arguments de la requète
	    $this->args = $args;
        $this->args['controller'] = $controller;
        $this->args['view'] = $this;		
	}
	
    
	public function setArg($key, $val) {
       $this->args[$key] = $val;
    }
	
	
	//A modifier par la suite
    public function templatesSearchPaths() {
 		// paths are ordered and will be prefixed by templates/ 
		//Vide pour le moment
		return array('');
    }
   
 	// load template named $name according the templatesSearchPaths()
    public function loadTemplate($name,$args=NULL) {
 		$templateSearchPaths = $this->templatesSearchPaths();
 		$templateFileName = null;
 		$i = -1;

 		do {
 			$i++;
 			$templateFileName = __ROOT_DIR . '/templates/'. $templateSearchPaths[$i] . $name . 'Template.php';
 		} while(!is_readable($templateFileName) && $i<count($templateSearchPaths));

 		if(! is_readable($templateFileName)){
 			throw new Exception('Undefined template named "' . $name .'"');
		}
		
		//Affiche le nom du template load
 		//$this->log('Load template: ' . $templateSearchPaths[$i] . $name . 'Template.php');
			 
 		$this->loadTemplateFileNamed($templateFileName,$args);
    }
	
 	public function loadTemplateFileNamed($templateFileName,$args=NULL) {	
 		if(isset($args)){
 			foreach($args as $key => $value){
 				$$key = $value;
			}
		}
 		require($templateFileName);
 	}
	
	public function render(){
		
        $this->loadTemplate($this->templateNames['head'], $this->args);
        $this->loadTemplate($this->templateNames['top'], $this->args);
        $this->loadTemplate($this->templateNames['content'], $this->args);
        $this->loadTemplate($this->templateNames['foot'], $this->args);
	}

}
	
?>